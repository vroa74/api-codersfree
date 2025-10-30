<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class task extends Api
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'earring',
        'user_id'
    ];
    
    // protected $with = ['user'];  // Cargar siempre la relación user automáticamente


    

    public function user()     {

        return $this->belongsTo(User::class);

    }

}
