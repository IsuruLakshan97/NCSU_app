<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Exceptions\InvalidSignatureException;

class ProfileController extends Controller
{
    public function _construct(){

        $this->middleware('auth');
        
    }

    public function index()
    {
        $user = auth()->user();

        // $users = DB::table('users')->get();
        $users = User::all();
        $faculty = new \App\Models\faculty;
        $department = new \App\Models\Department;

        return view('home')->with('name',$users)->with('faculty', $faculty)->with('user',$user);
        
    }

    public function create(){

        $faculties = DB::table('faculties')->get();

        return view('profile.create') -> with('faculty', $faculties);
    }

    public function delete(User $user)
    {
        
        $deleted = DB::table('users')->where('id', '=', $user->id)->delete();

        return redirect('/profile');

    }

    public function store(){

        // dd(request()->all());
        $data = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'faculty_id' => ['required','int','exists:faculties,id'],
            'is_admin' =>['required','boolean'],
            'remark' => ['string', 'max:100'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'faculty_id' => $data['faculty_id'],
            'is_admin' => $data['is_admin'],
            'remark' => $data['remark'],
            'password' => Hash::make($data['password']),
        ]);

        return redirect('/profile');

    }
}
