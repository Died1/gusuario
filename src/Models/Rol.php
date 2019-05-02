<?php

namespace Eddy\gusuarios\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{

	protected $fillable = ['nombre', 'slug', 'descripcion', 'especial'];

    protected $table = 'roles';
    
}
