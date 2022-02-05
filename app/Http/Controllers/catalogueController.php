<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\verifiedData;
use \App\Models\faculty;

class catalogueController extends Controller
{
    //
    public function index()
    {
        $faculty = new \App\Models\faculty();
        $faculties = $faculty::all();
        // dd($faculties);
        return view('catalogue.catalogue')->with('fac', $faculties);
        
    }
    public function getBatches($facCode)
    {
        //dd($fac);
        $faculty = new faculty();
        $fac_name = $faculty::where('facultyCode', $facCode)->first()->name;
        return view('catalogue.batch')->with('facultyCode', $facCode)->with('facultyname', $fac_name);
        
    }
    public function getStudents($facCode, $batch)
    {
        //dd($fac);
        $faculty = new faculty();
        $fac_id = $faculty::where('facultyCode', $facCode)->first()->id;
        //dd($fac_id);

        $person = new verifiedData();
        $students = $person::where('faculty_id', $fac_id)->get();
        // dd($students);
        return view('catalogue.student')->with('facultyCode', $facCode)->with('facultyID', $fac_id)->with('people', $students)->with('batch', $batch);
        
    }
}
