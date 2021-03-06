<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function  index(){ //retorna la vista admin
    return view('admin.index');
    }

    public function  domicilio(){
        return view('admin.domicilios');
    }
}
