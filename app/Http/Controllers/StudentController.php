<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $students = Student::all();

        return view('admin.pages.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Student::create($request->all());
        Toastr::success('Student added successfully :)', 'Success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return $student;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('admin.pages.students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $input = $request->all();
        $student->update($input);

        Toastr::success('Data updated successfully :)', 'Success');
        return redirect(route('students.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->back();

    }
}
