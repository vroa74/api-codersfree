<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class SelectScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     */
    public function apply(Builder $builder, Model $model): void
    {
        if (empty(request('select'))) {
            return;
        }
        $select = request('select');
        $select = str_replace(' ', '', $select); // Eliminar espacios en blanco            
        $selectArray = explode(',', $select); //separa todos los elemento sepárados por comas            
        $builder->select($selectArray); // Aplicar selección de campos
    }
}
