<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Person;
use \App\Models\Batch;

class PersonController extends Controller
{
    //

    public function _construct(){

        $this->middleware('auth');
        
    }

    public function index(Batch $batch)
    {
        $user = auth()->user();

        $people = Person::where(['batch_id'=>$batch->id,'faculty_id'=>$user->faculty_id])->orderBy('regNo', 'desc')->get();
                
        return view('person.view')->with('people',$people)->with('user',$user);
    }
}
