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
    
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        
        return redirect()->route('users.index');
    }
    
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit')->with('user', $user);
    }
    
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = $request->type;
        $user->save();
        
        return redirect()->route('users.index');
    }
}
