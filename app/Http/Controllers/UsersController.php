<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;


class UsersController extends Controller
{
    /*
     * Direccionar a la vista de crear un usuario
     */
    public function create()
    {
        return(view('admin.users.create'));
    }
    
    /*
     * Guardar un usuario en vase de datos y redirigir al listado
     */
    public function store(Request $request)
    {
        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
        
        return redirect()->route('users.index');
    }
    
    /*
     * Listado de usuarios con paginador
     */
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->paginate(5);
        
        return view('admin.users.index')->with('users', $users);
    }
    
    /*
     * Eliminar determinado usuario y redirigir al listado
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        
        return redirect()->route('users.index');
    }
    
    /*
     * Mandar los datos del usuario a la vista de editar
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit')->with('user', $user);
    }
    
    /*
     * Actualizar el usuario de la vista de edit y redirigir al listado
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();
        
        return redirect()->route('users.index');
    }
}
