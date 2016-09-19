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
    
    /*
     * Eliminar determinado usuario y redirigir al listado
     */
    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        
        return redirect()->route('tags.index');
    }
    
    /*
     * Mandar los datos de tag a la vista de editar
     */
    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('admin.tags.edit')->with('tag', $tag);
    }
    
    /*
     * Actualizar tag de la vista de edit y redirigir al listado
     */
    public function update(Request $request, $id)
    {
        $tag = Tag::find($id);
        $tag->fill($request->all());
        $tag->save();
        
        return redirect()->route('tags.index');
    }
}
