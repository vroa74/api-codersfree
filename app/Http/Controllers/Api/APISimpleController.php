<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class APISimpleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'MSG' => 'Hola desde el API simple index - listado de recursos',
            'data' => []
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json([
            'MSG' => 'Hola desde el API simple store',
            'data' => $request->all()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json([
            'MSG' => 'Hola desde el API simple show',
            'id' => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json([
            'MSG' => 'Hola desde el API simple update',
            'id' => $id,
            'data' => $request->all()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json([
            'MSG' => 'Hola desde el API simple destroy',
            'id' => $id
        ]);
    }
}
