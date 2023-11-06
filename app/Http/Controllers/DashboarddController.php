<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboarddController extends Controller
{
    public function index(){
        return view('admin.dashboard'); //mengarahkan ke file dashboard yang ada didalam admin
    }
}
