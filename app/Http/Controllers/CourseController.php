<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;
use App\Http\Requests\Course as CourseRequest;

class CourseController extends Controller
{
    public function index(Course $course)
    {
        $course = $course->newQuery();

        $course->orderByDesc('created_at');
        return response()->json($course->get());
    }

    public function store(CourseRequest $request)
    {
        $course = Course::create($request->all());

        return response()->json($course);
    }

    public function show(Request $request, Course $course)
    {
        return response()->json($course);
    }

    public function update(CourseRequest $request, Course $course)
    {
        $course->update($request->all());

        return response()->json($course);
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return response()->json([], 204);
    }
}
