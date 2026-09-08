<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('card.list', compact('students'));
    }

    public function create()
    {
        return view('card.add');
    }
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required |min:3|max:50|string',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'phone' => 'required|numeric|digits:10',
            'address' => 'required|string|max:100',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }
        //Student::create($request->all());
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->address = $request->address;

        if ($request->hasFile('image')) {
            //unlink(public_path('uploads/site_logo/'.$row->site_logo));
            $files = $request->file('image');
            $image = $files->getClientOriginalName();
            $name = time() . '.' . $files->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            $imagePath = $destinationPath . "/" .  $name;
            $files->move($destinationPath, $name);
            $student->image = $name;
        }

        $student->save();
        if ($student) {
            return redirect()->route('student.view')->with('success', 'Student created successfully');
        }
    }

    public function view($id)
    {
        $student = Student::find($id);
        return view('card.view', compact('student'));
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('card.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required |min:3|max:50|string',
            'email' => 'required|email:rfc,dns|unique:users,email,' . $id,
            'phone' => 'required|numeric|digits:10',
            'address' => 'required|string|max:100',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        $student = Student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->address = $request->address;

        if ($request->hasFile('image')) {
            //unlink(public_path('uploads/site_logo/'.$row->site_logo));
            $files = $request->file('image');
            $image = $files->getClientOriginalName();
            $name = time() . '.' . $files->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            $imagePath = $destinationPath . "/" .  $name;
            $files->move($destinationPath, $name);
            $student->image = $name;
        }

        $student->save();
        if ($student) {
            return redirect()->route('student.view')->with('success', 'Student updated successfully');
        }
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        if ($student) {
           $student->delete() ;
            return redirect()->route('student.view')->with('success', 'Student deleted successfully');
        } else {
            return redirect()->route('student.view')->with('error', 'Student not found');
        }
    }
}
