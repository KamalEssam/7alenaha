<?php

namespace App\Http\Controllers\web\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeStart(){
        return view('dashboard.starter');
    }
    public function activeLecture(){
        return view('dashboard.active_lecture.active');
    }

}
