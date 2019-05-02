<?php

namespace  Eddy\gusuarios\Models;

use Illuminate\Database\Eloquent\Model;

class Privilegio extends Model 
{
	protected $fillable = ['nombre', 'slug', 'descripcion'];

    protected $table = 'privilegios';

}
