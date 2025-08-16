<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('Admin.Dashboard.News.index');
    }
    public function create()
    {
        return view('Admin.Dashboard.News.create');
    }
}
