<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\task;
// Los scopes ahora se aplican globalmente desde el modelo base Api


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //  return request(['filters','select','sort']);
        $tasks = task::query()->getOrPaginate();
        return response()->json($tasks);
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
