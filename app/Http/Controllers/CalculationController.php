<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculationController extends Controller
{
    //

    public function index()
    {
       return view('calculations');
    }


    public function calc(Request $request, $id){
       if(!$request->get('freelancer')){
        return view('404');
       }
       return view('freelancer');
    }

    public function roles(Request $request){
        $value = $request->all();
        return view('result', compact('value'));
    }

    public function ai(){
       return view('ai');
    }
}
