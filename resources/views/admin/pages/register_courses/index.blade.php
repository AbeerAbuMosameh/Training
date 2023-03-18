@extends('admin.layouts.master')

@section('title')
    Register Course
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@stop
@section('content')
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
    @endforeach
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div id="msg"></div>

                <div class="table-responsive">
                    <div class="container">
                        <table id="table-body" class="table table-striped table-bordered">
                            <tbody>
                                <th>Student name</th>
                                <th>Courses name</th>

                                @foreach ($student_courses as $student_course)
                                    <tr>
                                        <td>{{ $student_course->name }}</td>
                                        <td>{{ $student_course->course_name }}</td>
                                    </tr>
                                @endforeach

                                </thead>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@stop
