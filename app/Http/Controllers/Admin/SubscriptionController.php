<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index()
    {
        return view('Admin.Dashboard.Subscriptions.index');
    }
    public function create()
    {
        return view('Admin.Dashboard.Subscriptions.create');
    }
    public function showSubscriber()
    {
        return view('Admin.Dashboard.Subscriptions.Subscribers.index');
    }
}
