<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function create()
    {
        $faculty = new \App\Models\faculty();
        $department = new \App\Models\Department();

        $faculties = $faculty::all();
        $departments = $department::all();

        return view('forum.create')->with('fac', $faculties)->with('dep', $departments);
    }
}
