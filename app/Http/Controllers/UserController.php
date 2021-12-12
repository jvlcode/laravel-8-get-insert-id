<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function userForm(){
        return view('user_form');
    }

    public function createUser(Request $request){
       $insert_id =  DB::table('users')->insertGetId(['name'=>$request->input('name')]);
        return back()->withInsertId($insert_id);
    }
}
