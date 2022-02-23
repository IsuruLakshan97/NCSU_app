<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Person;
use \App\Models\Batch;
use \App\Models\verifiedData;
use LdapRecord\Models\ActiveDirectory\User;
use SebastianBergmann\Environment\Console;

class PersonController extends Controller
{
    //

    public function _construct(){

        $this->middleware('auth');
        
    }

    public function index(Batch $batch)
    {
        $user = auth()->user();

        $people = Person::where(['batch_id'=>$batch->id,'faculty_id'=>$user->faculty_id])->orderBy('regNo', 'asc')->get();
                
        return view('person.view')->with('people',$people)->with('user',$user);
    }

    public function profile(Batch $batch, Person $person){
        // dd($person->id);
        $user = auth()->user();

        return view('person.profile')->with('person',$person)->with('user',$user);
    }

    public function verify(Batch $batch, Person $person)
    {
        //passing data from people table to verified data table
        $data = $person->replicate();
        $data = $data->toArray();
        verifiedData::firstOrCreate($data);

        //create a new user in AD
        try {
            $user = new User();

            $user->cn = $person->regNo;
            $user->displayName = $person->fullname;
            $user->givenName = $person->fname;
            // $user->initials = $person->initial;
            $user->sn = $person->lname;
            $user->sAMAccountName = $person->username;
            $user->streetAddress = $person->address;
            $user->l = $person->city;
            $user->department = $person->department->name;

            $user->save();

        } catch (\Throwable $th) {
            abort(500, 'Error{$th}');
        }

        $person->delete();

        return redirect()->route('person.index',['batch'=>$batch->id])->with('message', 'Profile verified Succesfully!!');
    }
}
