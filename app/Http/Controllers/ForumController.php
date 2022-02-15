<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Department;
use App\Models\Batch;
use App\Models\Faculty;

use Image;
use DB;
use Illuminate\Filesystem\Filesystem;

use Adldap\Laravel\Facades\Adldap;
// use Adldap\AdldapInterface;

class ForumController extends Controller
{
    public function create()
    {

        $faculties = Faculty::all();
        $batches = Batch::all();

        return view('forum.create')->with('fac', $faculties)->with('batch',$batches);
    }

    public function store(){
        //dd(request()->all());
        
        $data = request()->validate([
            'fname' => ['required','string', 'max:20'],
            'lname' => ['required','string', 'max:20'],
            'username' => ['required','string', 'max:20', 'unique:people', 'unique:verified_data'],
            'fullname' => ['required','string', 'max:100'],
            'initial' => ['required','string', 'max:50'],
            'address' => ['required','string', 'max:100'],
            'city' => ['required','string', 'max:100'],
            'date' => ['required','string'],
            'regNo' => ['required','string', 'max:10','unique:people','regex:/^([A-Z]{1,2}\/{1}+\d{2}\/{1}+\d{3})/'],
            'image' => ['required','image'],
            'faculty_id' => ['required','int','exists:faculties,id'],
            'batch_id' => ['required','int','exists:batches,id'],
            'department_id' => ['required','int', 'exists:departments,id'],
        ]);

        //rename
        $image1 = request('image');
        $name = $data['username'].'.'.$image1->getClientOriginalExtension();

        $file = new Filesystem();
        $users = DB::table('faculties')->select('name')->where('id', '=', $data['faculty_id'])->first();
        $username = $users->name;
        $directory = 'public/uploads/' . $username;

        if ( $file->isDirectory(storage_path($directory)) )
        {
            
        }
        else
        {
            $file->makeDirectory(storage_path($directory), 755, true, true);
        }

        $imagePath = request('image')->storeAs($directory,$name);
       
            \App\Models\Person::create([
                'fname' => $data['fname'],
                'lname' => $data['lname'],
                'username' => $data['username'],
                'fullname' => $data['fullname'], 
                'initial' => $data['initial'],
                'address' => $data['address'],
                'city' => $data['city'],
                'date' => $data['date'],
                'regNo' => $data['regNo'],
                'image' => $imagePath,
                'faculty_id' => $data['faculty_id'],
                'batch_id' => $data['batch_id'],
                'department_id' => $data['department_id'],
            ]);

        return redirect('/forum/create')->with('message', 'Forum data entered Succesfully!!');
    }

    public function findDepartment($id)
    {
        $dep = Department::where('faculty_id',$id)->get();
        return response()->json($dep);
    }

    public function adldap()
    {
        $ad = new Adldap();
        $connectionName = 'ad.pdn.ac.lk';

        try {
            $provider = $ad::connect($connectionName);
            $search = $provider->search();
            $results = $search->find('Chandula M');

            dd($results);
        } catch (\Adldap\Auth\BindException $e) {
            echo 'Error: '.$e->getMessage()."\r\n";
        }
        // dd($adldap);
    }
}
