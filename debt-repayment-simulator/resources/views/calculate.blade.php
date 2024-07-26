<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>借金返済シュミレータ</title>
</head>
<body>
    <h1>借金返済シュミレータ</h1>
    @if (isset($error))
        <p style="color: red;">{{ $error }}</p>
    @endif
    <form action="{{ route('calculate.post') }}" method="post">
        @csrf
        <label for="principal">借入金額:</label>
        <input type="number" name="principal" required><br>
        <label for="interest_rate">金利 (%):</label>
        <input type="number" step="0.01" name="interest_rate" required><br>
        <label for="monthly_payment">毎月の支払額:</label>
        <input type="number" name="monthly_payment" required><br>
        <button type="submit">シュミレーション</button>
    </form>
    @if (isset($months))
        <p>It will take <strong>{{ $months }}</strong> months to repay the debt.</p>
    @endif
</body>
</html>
