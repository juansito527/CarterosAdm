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

    public function domiciliohistorial(){
        return view('admin.DomiciliosComidaHistorial');
    }

    public function  paqueteria(){
        return view('admin.paqueteria');
    }

    public function paqueteriahistorial(){
        return view('admin.paqueteriaHistorial');
    }

    public function carterosvista(){
        return view('admin.Carteros');
    }
    public function carterosSolicitudvista(){
        return view('admin.CarterosSolicitud');
    }

}
