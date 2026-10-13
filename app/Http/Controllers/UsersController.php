<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    public function store(Request $request){

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required|string|max:30',
            'password' => 'nullable|string|min:6',
        ]);

        $user = Users::create($data);

        return redirect('/account/' . $user->id);
    }

    public function index(){
        $users = Users::all();

        return view('users', compact('users'));
    }

    public function edit($id){
        $user = Users::findOrFail($id);
        return view('useraccount', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = Users::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required|string|max:30',
        ]);

        $user->update($data);

        return redirect('/account/' . $id);
    }

    public function destroy($id){
        $user = Users::findOrFail($id);
        $user->delete();

        return redirect('users');
    }
}