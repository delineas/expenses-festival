<?php

namespace App\Http\Controllers;

use App\Expense;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    public function list()
    { 
        $expenses = Expense::all();

        return view('expenses.list', compact('expenses'));
    }

    public function form()
    {
        return view('expenses.form');
    }

    public function add(Request $request)
    {
        $request->validate(
            [
                'subject' => 'required',
                'amount' => 'required'
            ]
        );

        Expense::create($request->all());

        return redirect('/');
    }
}
