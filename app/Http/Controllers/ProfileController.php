<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index($user)
    {
        if($user == 1){
            $users = DB::table('users')->get();
            $faculty = new \App\Models\faculty;
            return view('admin')->with('name',$users)->with('faculty', $faculty);
        }
        else{
            return view('home');
        }    
            
        
    }
}
