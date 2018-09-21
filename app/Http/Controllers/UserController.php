<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        $total = User::all()->count();
        return view('list-users', compact('users', 'total'));
    }

    public function create() {
        return view('include-user');
    }

    public function store(Request $request) {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('user.index')->with('message', 'User created successfully!');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $user = User::findOrFail($id);
        return view('alter-user', compact('user'));
    }

    public function update(Request $request, $id) {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('user.index')->with('message', 'User successfully changed!');
    }

    public function destroy($id) {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index')->with('message', 'User deleted successfully!');
    }
}
