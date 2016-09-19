<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;

class CategoriesController extends Controller
{
    /*
     * Direccionar a la vista de crear una categoría
     */
    public function create()
    {
        return(view('admin.categories.create'));
    }
    
    /*
     * Guardar un usuario en vase de datos y redirigir al listado
     */
    public function store(Request $request)
    {
        $category = new Category($request->all());
        $category->save();
        
        return redirect()->route('categories.index');
    }
    
    /*
     * Listado de categorías con paginador
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'DESC')->paginate(5);
        
        return view('admin.categories.index')->with('categories', $categories);
    }
    
    /*
     * Eliminar determinado usuario y redirigir al listado
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        
        return redirect()->route('categories.index');
    }
}
