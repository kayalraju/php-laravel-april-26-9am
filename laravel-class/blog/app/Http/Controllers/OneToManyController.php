<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Employee;

class OneToManyController extends Controller
{
    public function department()
    {
        return view('onetomany.department');
    }
    public function departmentCreate(Request $request)
    {
        $department = new Department();
        $department->name = $request->name;
        $department->save();
        return redirect()->route('employee.view');
    }


    public function employee()
    {
        $deparments = Department::all();
        return view('onetomany.employee',compact('deparments'));
    }
    public function employeecreate(Request $request)
    {
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->department_id = $request->department_id;
        $employee->save();
        return redirect()->route('employee.department.view');
    }
    public function employeedepartment()
    {
         $employees = Employee::with('department')->get();


         //get all employee with department
         dd($employees);
         //dd($employees->toArray());
        
        return view('onetomany.index', compact('employees'));
       
    }

     public function depermentEmployeeList($id){
        $employees = Employee::where('department_id', $id)->get();
        dd($employees);
        return view('onetomany.index', compact('employees'));
    }
}
