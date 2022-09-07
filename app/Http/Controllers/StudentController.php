<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    
    public function index()
    {
        $students =student::all();
         return view('students.index')->with('students', $students);
    }

    public function create()
    {
        return view('students.create');
    }

    
    public function store(Request $request)
    {
        $input= $request->all();
        Student::create($input);
        return redirect('students')->with('flash_message','student Added');
    }

   
    public function show($id)
    {
         $students = student::find($id);
         return view('students.show')->with('students',$students);
    }

    
    public function edit($id)
    {
        $students = student::find($id);
        return view('students.edit')->with('students', $students);
    }

    
    public function update(Request $request, $id)
    {
        $students =student::find($id);
        $input =$request->all();
        $students->update($input);
        return redirect('students')->with('flash_massage','student updated!!');
    }

    
    public function destroy($id)
    {
        student::destroy($id);
        return redirect('students')->with('flash_massage','Student Deleted');
    }
}
