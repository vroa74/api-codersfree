<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class IncludeScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     */
    public function apply(Builder $builder, Model $model): void
    {
        if (empty(request('include'))) {
            return;
        }   
        $include = str_replace(' ', '', request('include')); // Eliminar espacios en blanco
        $includesArray = explode(',', $include); // Separar por comas
        $builder->with($includesArray); // Aplicar relaciones

    }
}
