<?php

namespace admin\Http\Controllers\Admin;

use Illuminate\Http\Request;
use admin\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
        return view('admin.home.index');
    }
}
