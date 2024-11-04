<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facts;
use Response;

// import de erros
use \Illuminate\Validation\ValidationException;

class CatFactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Facts::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $valid = $request->validate([
                'created_by' => 'max:20',
                'fact' => 'max:50'
            ]);
        } catch (ValidationException $e) {
            return Response::json(['errors' => $e], 422);
        }

        $register = Facts::create($valid);

        return Response::json(['register' => $register], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
        $fact = Facts::find($id);
        return Response::json($fact, 200);
    }
}
