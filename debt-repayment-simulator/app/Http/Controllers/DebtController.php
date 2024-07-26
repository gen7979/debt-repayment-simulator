<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DebtController extends Controller
{
    public function calculate(Request $request)
    {
        if ($request->isMethod('post')) {
            // フォームからの入力データを取得
            $principal = $request->input('principal');
            $interestRate = $request->input('interest_rate');
            $monthlyPayment = $request->input('monthly_payment');

            // 返済計算ロジック
            $balance = $principal;
            $months = 0;
            while ($balance > 0) {
                $interest = $balance * $interestRate / 100 / 12;
                $balance += $interest - $monthlyPayment;
                if ($monthlyPayment <= $interest) {
                    // 月々の支払いが利息を下回る場合、返済が完了しないため、エラーを表示
                    $error = "Monthly payment is too low to cover the interest.";
                    return view('calculate', compact('error'));
                }
                $months++;
            }

            return view('calculate', compact('months'));
        }

        return view('calculate');
    }
}
