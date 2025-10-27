<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\task;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = task::paginate(15);
        $tasks->orderBy('id', 'desc');
        // $tasks->orderBy('id', 'desc');  // para ordenar los registros por id de forma descendente

        //=====================================================
        // filter
        if (request('filters')) {
            $filters = request('filters');
            foreach ($filters as $field => $conditions) {
                foreach ($conditions as $operator => $value) {
                    if (in_array($operator, ['=', '!=', '>', '<', '>=', '<='])) {
                        $tasks->where($field, $operator, $value); // Aplicar cada filtro
                    }
                    if (in_array($operator, ['like', 'not like'])) {
                        $tasks->where($field, $operator, '%' . $value . '%'); // Aplicar cada filtro
                    }
                }
            }
        }

        //=====================================================
        //select
        if (request('select')) {
            $select = request('select');
            $select = str_replace(' ', '', $select); // Eliminar espacios en blanco
            $selectArray = explode(',', $select); //separa todos los elemento sepárados por comas
            $tasks->select($selectArray); // Aplicar selección de campos
        }
        //=====================================================
        //sort
        if (request('sort')) {
            $sortFields = explode(',', request('sort'));
            foreach ($sortFields as $sortField){
                $direction = 'asc'; // Valor por defecto
                $sortField = str_replace(' ', '', $sortField); // Eliminar espacios en blanco
                if (substr($sortField, 0,1) === '-') {
                    $direction = 'desc'; // Cambiar a descendente si el primer carácter es '-'
                    $sortField =(substr($sortField , 1)); // Eliminar el primer carácter '-'
                }
                $tasks->orderBy($sortField, $direction); // Ordenar por el campo y la dirección
            }
        } // fin de sort
        //=====================================================
        //relaciones
        if (request('include')) {
            $include = str_replace(' ', '', request('include')); // Eliminar espacios en blanco
            $includesArray = explode(',', $include); // Separar por comas
            $tasks = $tasks->with($includesArray); // Aplicar relaciones
        }
        //=====================================================
        
        if (request('perPage')){
            $tasks = $tasks->paginate(request('perPage'));
        } else{
            $tasks = $tasks->get();
        }

        return response()->json([$tasks]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
//    las validaciones vienen el StoreTaskRequest  

        $task = task::create($request->validated());
        return response()->json($task, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(task $task) //esta implementado el
    {
        return response()->json($task);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request,  $task)
    {

        $task = task::find($task);
        $task->update($request->validated());
        return $task;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $task)  // se puede usar el model binding o el id del registro
    {
        
        $task = task::find($task);
        $task->delete();
        return response()->json(null, 204);
    }
}
