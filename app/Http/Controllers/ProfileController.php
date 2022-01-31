<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function _construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();

        if($user->id == 1){

            $users = DB::table('users')->get();
            $faculty = new \App\Models\faculty;
            return view('admin')->with('name',$users)->with('faculty', $faculty);

        }
        else{

            return view('home');

        }    
            
        
    }
}
