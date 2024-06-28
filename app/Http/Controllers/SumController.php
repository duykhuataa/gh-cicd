<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
    public function sum(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');

        $sum = $num1 + $num2;

        return view('welcome', compact('num1', 'num2', 'sum'));
    }
}
