<?php

namespace App\Http\Controllers;

use  App\Models\student;
use  App\Models\department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class studentControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = student::all();
        return view('admin.student.index',['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = department::all();
        return view('admin.student.create',['departments'=>$departments]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:students',
            'phone_number' => 'required|numeric',
            'department_number' => 'required|numeric',
            'password' => 'required|min:8',
            'gender' => 'required|in:m,f'
        ]);

        student::create($validatedData);

        return redirect('/admin/student/create')->with('success', 'student added successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = student::find($id); 
        
        $departmentName = $student->department->name;
        return view('admin.student.show',['student'=>$student, 'departmentName'=>$departmentName ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = student::find($id); 
        $departments = department::all();
        $departmentName = $student->department->name;
        return view('admin.student.edit',['student'=>$student, 'departmentName'=>$departmentName , 'departments'=>$departments]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|numeric',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'department_number' => 'required|numeric',
            'gender' => 'required|in:m,f',
        ]);

        $student = student::find($id);
        $student->name = $request->input('name');
        $student->phone_number = $request->input('phone_number');
        $student->email = $request->input('email');
        $student->password = bcrypt($request->input('password'));
        $student->gender = $request->input('gender');
        $student->department_number = $request->input('department_number');
        $student->save();

        return redirect()->route('student.index')->with('success', 'Student data has been updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
