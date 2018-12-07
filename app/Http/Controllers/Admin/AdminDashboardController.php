<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class AdminDashboardController extends AdminMainController
{
    public function index()
    {
        return view('admin.index');
    }
}
