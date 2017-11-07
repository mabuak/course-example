<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;
use App\Http\Requests\Instructor as InstructorRequest;

class InstructorController extends Controller
{
    public function index(Request $request, Instructor $instructor)
    {
        $instructor = $instructor->newQuery();

        if ($request->has('gender'))
        {
            $instructor->where('gender', $request->gender);
        }

        $instructor->orderByDesc('created_at');
        
        $instructor = $instructor->get();

        return response()->json($instructor);
    }

    public function store(InstructorRequest $request)
    {
        $instructor = Instructor::create($request->only(['name', 'gender']));

        return response()->json($instructor, 201);
    }

    public function show(Instructor $instructor)
    {
        return response()->json($instructor);
    }

    public function update(InstructorRequest $request, Instructor $instructor)
    {
        $instructor->update($request->all());

        return response()->json($instructor);
    }

    public function destroy(Request $request, Instructor $instructor)
    {
        $instructor->delete();

        return response()->json([], 204);
    }
}
