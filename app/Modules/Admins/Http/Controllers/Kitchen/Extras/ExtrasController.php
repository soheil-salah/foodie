<?php

namespace App\Modules\Admins\Http\Controllers\Kitchen\Extras;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExtrasController extends Controller
{
    public function index()
    {
        return view('admin.pages.kitchen.extras.index');
    }
}
