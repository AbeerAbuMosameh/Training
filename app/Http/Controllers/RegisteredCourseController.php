<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\RegisteredCourse;
use App\Models\Student;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;


class RegisteredCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $students = Student::all();
        $courses = Course::all();

        return view('admin.pages.register_courses.create', compact(['students', 'courses']));

    }

    public function select()
    {

        // SELECT Students.name,courses.name as course_name FROM students
        // JOIN registered_courses ON students.ID = registered_courses.Student_id
        // JOIN courses ON registered_courses.course_id = courese.id

        $student_courses = DB::table('students')
        ->Join('registered_courses', 'students.id', '=', 'registered_courses.student_id')
        ->Join('courses', 'courses.id', '=', 'registered_courses.course_id')
        ->select('Students.name' ,'courses.name as course_name')
         ->get();

        return view('admin.pages.register_courses.index', compact('student_courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $IsExiste = RegisteredCourse::where('student_id', $request['student_id'])
            ->where('course_id', $request['course_id'])
            ->exists();

        RegisteredCourse::firstOrCreate(['student_id' => $request['student_id']],
            ['course_id' => $request['course_id']]);

        if ($IsExiste) {
            Toastr::info('Course Previously Registered  :)', 'Info');

        } else {
            Toastr::success('Course Registered successfully :)', 'Success');
        }

        return redirect()->back();
    }
}
