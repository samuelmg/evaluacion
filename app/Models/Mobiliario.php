<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mobiliario extends Model
{
    protected $table = 'mobiliario';
    public $timestamps = false;
    
    public function aulas()
    {
        return $this->belongsToMany(Aula::class);
    }
}
