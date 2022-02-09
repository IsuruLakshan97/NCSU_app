<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use DB;
use Illuminate\Filesystem\Filesystem;

class ForumController extends Controller
{
    public function create()
    {
        $faculty = new \App\Models\faculty();
        $department = new \App\Models\Department();

        $faculties = $faculty::all();
        $departments = $department::all();
        $batches = \App\Models\Batch::all();

        return view('forum.create')->with('fac', $faculties)->with('dep', $departments)->with('batch',$batches);
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
            'regNo' => ['required','string', 'max:10','unique:people'],
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
        $directory = 'uploads/' . $username;

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
}
