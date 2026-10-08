<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    public function store(Request $request){
        Users::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'number' => $request->number,
        ]);

        return redirect()->route('users.index');
    }

    public function index(){
        $users = Users::all();

        return view('users', compact('users'));
    }
}
