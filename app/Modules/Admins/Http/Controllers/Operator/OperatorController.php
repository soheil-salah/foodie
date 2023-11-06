<?php

namespace App\Modules\Admins\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function newOrder()
    {
        return view('admin.pages.operator.new-order');
    }

    public function checkout()
    {
        return view('admin.pages.operator.checkout');
    }
}
