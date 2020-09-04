<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table= "suppliers";

    protected $fillable = [
        'name', 'document_type', 'document_number', 'created_at', 'updated_at', 'address', 'phone', 'email', 'contact',
    ];

    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function buys()
    {
        return $this->hasMany('App\Buy');
    }
}
