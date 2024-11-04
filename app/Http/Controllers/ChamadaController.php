<?php

namespace App\Http\Controllers;

use App\Models\Chamada;
use Illuminate\Http\Request;

class ChamadaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Chamada::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // O request tem que vir com um vetor de objetos com os campos
        // {
        // "materia": "PDM",
        // "student_id": 3
        // }
        $item = Chamada::create($request->all());
        return response()->json($item, 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
