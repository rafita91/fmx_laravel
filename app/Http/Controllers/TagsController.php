<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Tag;

class TagsController extends Controller
{
    /*
     * Listado de tags con paginador
     */
    public function index()
    {
        $tags = Tag::orderBy('id', 'DESC')->paginate(5);
        
        return view('admin.tags.index')->with('tags', $tags);
    }
    
    /*
     * Direccionar a la vista de crear un tag
     */
    public function create()
    {
        return view('admin.tags.create');
    }
    
    /*
     * Guardar un tag en base de datos y redirigir al listado
     */
    public function store(Request $request)
    {
        $tag = new Tag($request->all());
        $tag->save();
        
        return redirect()->route('tags.index');
    }
    
    
}
