<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;


class UsersController extends Controller
{
    public function create()
    {
        return(view('admin.users.create'));
    }
    
    public function store(Request $request)
    {
        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
        
        return redirect()->route('users.index');
    }
    
    public function index()
    {
        $users = User::orderBy('id', 'ASC')->paginate(5);
        
        return view('admin.users.index')->with('users', $users);
    }
}
