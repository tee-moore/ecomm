<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class AdminDashboardController extends AdminMainController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        return view('admin.dashboard');
    }
}
