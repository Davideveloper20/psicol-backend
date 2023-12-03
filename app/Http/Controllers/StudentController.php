<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StudentController extends Controller
{    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'document' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'semester' => 'required|string',
            'selectedIds' => 'required|json',            
        ]);

        $student = Student::create($request->all());

        return response()->json(['message' => 'Estudiante creado exitosamente', 'student' => $student], 201);
    }
}
