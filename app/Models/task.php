<?php

namespace App\Models;

use App\Models\Scopes\FilterScope;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ScopedBy([
    FilterScope::class
])]
class task extends Model
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
