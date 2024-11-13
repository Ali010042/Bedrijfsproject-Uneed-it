<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class offerte extends Controller
{
    //
    function welcome(){
        return view('offerte.index');
    }

    function add(Request $request){
        $request->validate([
            'naam'=>'required',
            'email'=>'required|email|unique:offerte',
            'onderwerp'=>'required',
            'bericht'=>'required'
        ]);

        $query = DB::table('offerte')->insert([
            'naam'=>$request->input('naam'),
            'email'=>$request->input('email'),
            'onderwerp'=>$request->input('onderwerp'),
            'bericht'=>$request->input('bericht'),
        ]);

        if($query){
            return back ()->with ('success', 'Uw aanvraag is succesvol verzonden!');
        }else{
            return back ()->with ('fail', 'Asjemenou, er is iets fout gegaan!');
        }
    }
}
