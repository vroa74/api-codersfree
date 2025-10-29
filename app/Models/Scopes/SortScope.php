<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class SortScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     */
    public function apply(Builder $builder, Model $model): void
    {
        if (empty( request('sort'))) {
            return;
        } // fin de sort
        
        $sortFields = explode(',', request('sort'));
        foreach ($sortFields as $sortField){
            $direction = 'asc'; // Valor por defecto
            $sortField = str_replace(' ', '', $sortField); // Eliminar espacios en blanco
            if (substr($sortField, 0,1) === '-') {
                $direction = 'desc'; // Cambiar a descendente si el primer carácter es '-'
                $sortField =(substr($sortField , 1)); // Eliminar el primer carácter '-'
            }
            $builder->orderBy($sortField, $direction); // Ordenar por el campo y la dirección
        }
    }
}
