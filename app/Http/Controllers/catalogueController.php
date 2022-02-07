<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use \App\Models\verifiedData;
use \App\Models\faculty;
use \App\Models\Department;
use \App\Models\Batch;

class catalogueController extends Controller
{
    //
    public function index()
    {
        $faculty = new faculty();
        $faculties = $faculty::all();
        // dd($faculties);
        return view('catalogue.catalogue')->with('fac', $faculties);
        
    }
    public function getBatches($facCode)
    {
        $faculty = new faculty();
        $fac_name = $faculty::where('facultyCode', $facCode)->firstorFail()->name;

        $batch = new Batch();
        $batches = $batch::all();
        return view('catalogue.batch')->with('facultyCode', $facCode)->with('facultyname', $fac_name)->with('batches', $batches);
        
    }
    public function getStudents($facCode, $batch)
    {
        //dd($fac);
        $faculty = new faculty();
        $fac_id = $faculty::where('facultyCode', $facCode)->firstorFail()->id;
        //dd($fac_id);

        $person = new verifiedData();
        $students = $person::where('faculty_id', $fac_id)->orderBy('regNo', 'asc')->get();
        // dd($students);
        return view('catalogue.student')->with('facultyCode', $facCode)->with('facultyID', $fac_id)->with('people', $students)->with('batch', $batch);
        
    }
    public function getDetails($facCode, $batch, $regno)
    {
        //dd($fac);
        $faculty = new faculty();
        $fac_name = $faculty::where('facultyCode', $facCode)->firstorFail()->name;
        $fac_id = $faculty::where('facultyCode', $facCode)->firstorFail()->id;
        //dd($fac_id);

        $no = "E/16/".Str::afterLast($regno,'/');
        //dd($no);
        $person = new verifiedData();
        $studentDetails = $person::where('faculty_id', $fac_id)->where('regNo','=', $no)->firstorFail();
        
        $department = new Department();
        //$depid = $studentDetails->department_id;
        $dep_name = $department::where('faculty_id', $fac_id)->where('id', $studentDetails->department_id)->firstorFail()->name;
        //dd($studentDetails);
        return view('catalogue.details')->with('details', $studentDetails)->with('facName', $fac_name)->with('depName', $dep_name)->with('facultyCode', $facCode)->with('batch', $batch);
        
    }

    public function getProfile($username)
    {

        // dd($username);
        $studentDetails = verifiedData::where('username', $username)->firstorFail();
        
        $dep_name = $studentDetails->department->name;
        $fac_name = $studentDetails->faculty->name;
        $facCode = $studentDetails->faculty->facultyCode;
        $batch = $studentDetails->batch->id;

        // dd($studentDetails);
        return view('catalogue.details')->with('details', $studentDetails)->with('facName', $fac_name)->with('depName', $dep_name)->with('facultyCode', $facCode)->with('batch', $batch);
        
    }
}
