<?php

namespace App\Http\Controllers;

use App\Models\Chamada;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        return Student::all();
    }

    public function show($id)
    {
        // Pega um estudante do banco de dados pelo id
        $student = Student::findOrFail($id);

        // Pega todas as chamadas com o id do estudante
        $presencasEstudante = Chamada::where('student_id', $id)->get();

        // Retorna as chamadas do aluno e o aluno
        return response()->json([
            "student" => $student,
            "presencas" => $presencasEstudante
        ], 200);
    }

    public function store(Request $request)
    {
        $item = Student::create($request->all());
        return response()->json($item, 201);
    }

    public function update(Request $request, $id)
    {
        $item = Student::findOrFail(id: $id);
        $item->update($request->all());
        return response()->json($item, 200);
    }

    public function destroy($id)
    {
        Student::destroy($id);
        return response()->json(null, 204);
    }
}
