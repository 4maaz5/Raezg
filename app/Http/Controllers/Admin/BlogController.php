<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('Admin.Dashboard.Blog.index');
    }
    public function create()
    {
        return view('Admin.Dashboard.Blog.cerate');
    }
}
