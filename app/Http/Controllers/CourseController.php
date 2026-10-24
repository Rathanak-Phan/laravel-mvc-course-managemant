<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        $courses = Course::all();

        return view('courses.index', compact('courses'));
    }

    public function create() {

        return view('courses.create');
    }

    public function store(Request $request) {
        $validation = $request->validate([
            "title" => "string|required|max:255",
            "description" => "string|nullable",
            "price" => "required|numeric|min:0"
        ]);

        Course::create($validation);

        return redirect()
            ->route('course.index');
    }
}
