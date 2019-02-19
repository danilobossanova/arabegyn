<?php

namespace admin\Http\Controllers\Site;

use Illuminate\Http\Request;
use admin\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index(){
        return view('site.home.index');
    }
}
