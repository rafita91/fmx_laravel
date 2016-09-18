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
        dd('listo');
        //return redirect()->route('category.index');
    }
}
