<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function Calculate(Request $request)
    {
        $firstNumber = $request->firstNumber;
        $secondNumber = $request->secondNumber;
        $result = null;
        if ($request->Addition) {
            $result = $firstNumber + $secondNumber;
        }
        if ($request->Subtraction) {
            $result = $firstNumber - $secondNumber;
        }
        if ($request->Multiplication) {
            $result = $firstNumber * $secondNumber;
        }
        if ($request->Division) {
            if ($secondNumber == 0) {
                $result = 'Khong chia duoc';
            } else {
                $result = $firstNumber / $secondNumber;
            }
        }
        return view('index', compact('result'));
    }

}
