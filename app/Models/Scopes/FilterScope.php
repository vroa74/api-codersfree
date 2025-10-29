<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class FilterScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     */
    public function apply(Builder $builder, Model $model): void
    {
        if (empty(request('filters'))) {
            return;
        }   //if (request('filters')) {
            
        $filters = request('filters');
        foreach ($filters as $field => $conditions) {
            foreach ($conditions as $operator => $value) {
                
                if (in_array($operator, ['=', '!=', '>', '<', '>=', '<='])) {
                    $builder->where($field, $operator, $value); // Aplicar cada filtro
                }
                if (in_array($operator, ['like', 'not like'])) {
                    $builder->where($field, $operator, '%' . $value . '%'); // Aplicar cada filtro                        
                }

            } //foreach ($conditions as $operator => $value) 
        }  //foreach ($filters as $field => $conditions) {
    }
}
