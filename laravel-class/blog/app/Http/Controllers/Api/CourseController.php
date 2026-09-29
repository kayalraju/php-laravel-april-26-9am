<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
 public function index(){
    $courses = Course::all();
    return response()->json([
        'success' => true,
        'total' => $courses->count(),
        'data' => $courses
    ], 200);
 }
    public function store(Request $request)
    {
        $course = new Course();
        $course->name = $request->name;
        $course->description = $request->description;
        $course->duration = $request->duration;
        $course->save();
        return response()->json([
            'success'=> true,
            'message' => 'Course Created Successfully',
            'data' => $course
        ], 201);
    }

    public function show($id){
        $course = Course::find($id);
        return response()->json([
            'success' => true,
            'data' => $course
        ], 200);
    }

    public function update(Request $request, $id){
        $course = Course::find($id);
        $course->name = $request->name;
        $course->description = $request->description;
        $course->duration = $request->duration;
        $course->save();
        return response()->json([
            'success' => true,
            'message' => 'Course Updated Successfully',
        ], 201);
    }

    public function destroy($id){
        $course = Course::find($id);
        $course->delete();
        return response()->json([
            'success' => true,
            'message' => 'Course Deleted Successfully',
        ], 200);
    }
}
