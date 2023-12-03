<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'credits' => 'required|string',
            'course' => 'required|string',
            'status' => 'required|string',
        ]);

        $course = Course::create($request->all());

        return response()->json(['message' => 'Curso creado exitosamente', 'course' => $course], 201);
    }

    public function getCourses()
    {
        $courses = Course::all();

        return response()->json(['courses' => $courses]);
    }
}
