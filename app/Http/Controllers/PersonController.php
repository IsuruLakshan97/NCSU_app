<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Person;
use \App\Models\Batch;
use \App\Models\verifiedData;

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

    public function profile(Batch $batch, Person $person){
        // dd($person->id);
        $user = auth()->user();

        return view('person.profile')->with('person',$person)->with('user',$user);
    }

    public function verify(Batch $batch, Person $person)
    {
        $data = $person->replicate();
        $data = $data->toArray();
        verifiedData::firstOrCreate($data);

        $person->delete();

        return redirect()->route('person.index',['batch'=>$batch->id])->with('message', 'Profile verified Succesfully!!');
    }
}
