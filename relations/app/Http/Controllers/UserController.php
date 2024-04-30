<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();
        return $users;
    }

    public function save(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        return $user;
    }

    public function findOne(Request $request)
    {
        $user = User::find($request->id);
        $user['address'] = $user->address;
        return $user;
    }
}
