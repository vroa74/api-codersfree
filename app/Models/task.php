<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'earring',
        'user_id'
    ];

    public function user()     {

        return $this->belongsTo(User::class);

    }



}
