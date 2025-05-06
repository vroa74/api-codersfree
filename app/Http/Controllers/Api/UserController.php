<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
        'MSG' => 'hola desde el api useres index listado de cursos'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        return response()->json([
            'MSG' => 'hola desde el api useres store'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json([
            'MSG' => 'hola desde el api useres show',
            'data' => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json([
            'MSG' => 'hola desde el api useres update',
            'data' => $request->all()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json([
            'MSG' => 'hola desde el api useres destroy',
            'data' => $id
        ]);
    }
}
