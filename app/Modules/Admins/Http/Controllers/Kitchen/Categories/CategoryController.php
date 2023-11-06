<?php

namespace App\Modules\Admins\Http\Controllers\Kitchen\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.pages.kitchen.category.index');
    }
}
