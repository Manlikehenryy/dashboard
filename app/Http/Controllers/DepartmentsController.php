<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    public function admin(){
        return view('depts.admin');
    }
    public function agric(){
        return view('depts.agric');
    }
    public function audit(){
        return view('depts.audit');
    }
    public function corpcomms(){
        return view('depts.corp-comms');
    }
    public function ermicu(){
        return view('depts.erm-icu');
    }
    public function finaccts(){
        return view('depts.fin-accts');
    }
    public function HR(){
        return view('depts.HR');
    }
    public function investment(){
        return view('depts.investment');
    }
    public function IT(){
        return view('depts.IT');
    }
    public function legal(){
        return view('depts.legal');
    }
    public function mdoffice(){
        return view('depts.mdoffice');
    }
    public function oilgas(){
        return view('depts.oil&gas');
    }
    public function retail(){
        return view('depts.retail');
    }
    public function technical(){
        return view('depts.technical');
    }
}
