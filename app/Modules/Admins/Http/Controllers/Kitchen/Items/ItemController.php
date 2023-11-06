<?php

namespace App\Modules\Admins\Http\Controllers\Kitchen\Items;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        return view('admin.pages.kitchen.item.index');
    }
}
