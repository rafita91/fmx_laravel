<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = "categories";

	protected $fillable = ['name'];
        
        /*
         * Relación uno a muchos, una categoría puede tener muchos artículos
         */
	public function articles()
	{
            return $this->hasMany('App\Article');
	}
}
