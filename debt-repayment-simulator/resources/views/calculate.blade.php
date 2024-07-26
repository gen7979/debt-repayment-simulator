<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Debt Repayment Simulator</title>
</head>
<body>
    <h1>Debt Repayment Simulator</h1>
    @if (isset($error))
        <p style="color: red;">{{ $error }}</p>
    @endif
    <form action="{{ route('calculate.post') }}" method="post">
        @csrf
        <label for="principal">Principal:</label>
        <input type="number" name="principal" required><br>
        <label for="interest_rate">Interest Rate (% per year):</label>
        <input type="number" step="0.01" name="interest_rate" required><br>
        <label for="monthly_payment">Monthly Payment:</label>
        <input type="number" name="monthly_payment" required><br>
        <button type="submit">Calculate</button>
    </form>
    @if (isset($months))
        <p>It will take <strong>{{ $months }}</strong> months to repay the debt.</p>
    @endif
</body>
</html>
