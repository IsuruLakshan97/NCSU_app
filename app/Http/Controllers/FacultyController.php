<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacultyController extends Controller
{

    public function create()
    {
        return view('faculty.create');
    }

    public function store()
    {

        // dd(request()->all());

        $data = request()->validate([
            'name' => ['required', 'string', 'max:255', 'unique:faculties'],
        ]);

        \App\Models\faculty::create($data);

        return redirect('/profile');
    }
}
