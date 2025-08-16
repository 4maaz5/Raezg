<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('Admin.Dashboard.Projects.index');
    }
    public function create()
    {
        return view('Admin.Dashboard.Projects.create');
    }
}
