<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function expense() {
        return view('Dashboard.account.expense');
    }

    public function income() {
        return view('Dashboard.account.income');
    }

    public function dayBook() {
        return view('Dashboard.account.dayBook');
    }

    public function incomeStatement() {
        return view('Dashboard.account.incomeStatement');
    }

    public function category() {
        return view('Dashboard.account.category');
    }
    
}
