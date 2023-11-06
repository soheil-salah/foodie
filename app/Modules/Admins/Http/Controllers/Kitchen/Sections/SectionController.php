<?php

namespace App\Modules\Admins\Http\Controllers\Kitchen\Sections;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
    {
        return view('admin.pages.kitchen.section.index');
    }
}
