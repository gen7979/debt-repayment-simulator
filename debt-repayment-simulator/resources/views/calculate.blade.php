<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>借金返済シュミレータ</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">借金返済シュミレータ</h1>
        @if (isset($error))
            <div class="alert alert-danger text-center">{{ $error }}</div>
        @endif
        <form action="{{ route('calculate.post') }}" method="post" class="mt-4">
            @csrf
            <div class="form-group">
                <label for="principal">借入金額 (円):</label>
                <input type="number" class="form-control" name="principal" required>
            </div>
            <div class="form-group">
                <label for="interest_rate">金利 (%):</label>
                <input type="number" step="0.01" class="form-control" name="interest_rate" required>
            </div>
            <div class="form-group">
                <label for="monthly_payment">毎月の支払額 (円):</label>
                <input type="number" class="form-control" name="monthly_payment" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">シュミレーション実行</button>
        </form>
        @if (isset($months))
            <div class="alert alert-success text-center mt-4">
                借金返済には<strong>{{ $months }}</strong>ヶ月かかります。
            </div>
        @endif
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
