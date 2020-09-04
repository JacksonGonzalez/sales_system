<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table= "clients";

    protected $fillable = [
        'name', 'document_type', 'document_number', 'created_at', 'updated_at', 'address', 'phone', 'email'
    ];

    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
