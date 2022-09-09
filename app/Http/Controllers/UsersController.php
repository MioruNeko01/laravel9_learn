<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\view;

class UsersController extends Controller
{
    //
    function getView()
    {
        // return view("users", ['name' => $name]); //data parsing


        //---------------> Sending data 
        // $data = ['Cao Cao', 'Issei', 'Lucifer', 'Beelzebeez'];
        // return view("users",['users'=>$data]);
    }

    function getData(Request $req)
    {
        //------------------>Submit HTML Form
        dd($req); //die and dump //-> display all information
        return $req->input();

    }
}
