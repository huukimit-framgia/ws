<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    protected $guard = 'admin';

    public function __construct()
    {
        $this->middleware($this->authMiddleware());
    }

    /**
     * Dashboard page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.index');
    }
}
