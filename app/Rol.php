<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table= "rols";

    protected $fillable = [
        'name', 'description', 'module', 'created_at', 'updated_at',
    ];

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
