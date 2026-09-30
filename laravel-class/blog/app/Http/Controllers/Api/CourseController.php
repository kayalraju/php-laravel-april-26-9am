<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCourseRequest;
use Illuminate\Http\Request;
use App\Models\Course;
use Throwable;
use Illuminate\Support\Facades\Log;

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
   public function store(StoreCourseRequest $request)
    {
        // php artisan make:request StoreCourseRequest
        try {

            $course = Course::create([
                'name' => $request->name,
                'description' => $request->description,
                'duration' => $request->duration,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Course created successfully',
                'data' => $course
            ], 201);

        } catch (Throwable $e) {

            Log::error('Course creation failed', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Unable to create course',
            ], 500);
        }
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
