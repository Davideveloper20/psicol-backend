<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Teacher;

class TeacherController extends Controller
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
            'selectedIds' => 'required|json',
        ]);

        $teacher = Teacher::create($request->all());

        return response()->json(['message' => 'Maestro creado exitosamente', 'teacher' => $teacher], 201);
    }

    public function getTeachersByCourseIds($courseIds)
    {

        $teachers = Teacher::whereJsonContains('selectedIds', $courseIds)->get();

        return response()->json(['teachers' => $teachers]);
    }

    public function getTeachers()
    {
        $teachers = Teacher::all();

        return response()->json(['teachers' => $teachers]);
    }
}
