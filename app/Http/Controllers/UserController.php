<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->simplePaginate(20);

        return view('users',compact('users'));
    }

    public function filter(Request $request)
    {
        $users = User::query();

        $name = $request->name;
        $email = $request->email;
        $username = $request->username;
        $age = $request->age;

        if ($name) {
            $users->where('name','LIKE','%'.$name.'%');
        }
        if ($email) {
            $users->where('email','LIKE','%'.$email.'%');
        }

        if ($username) {
            $users->where('username','LIKE','%'.$username.'%');
        }

        if ($age) {
            $users->where('age',$age);
        }

        $data = [
            'age' => $age,
            'email' => $email,
            'name' => $name,
            'username' => $username,
            'users' => $users->latest()->simplePaginate(20),
        ];

        return view('users',$data);
    }
}
