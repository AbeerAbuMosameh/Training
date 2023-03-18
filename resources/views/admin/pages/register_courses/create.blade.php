@extends('admin.layouts.master')

@section('title')
    Register Course
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@stop
@section('content')
    @foreach ( $errors->all() as  $error)
        <div class="alert alert-danger">{{ $error }}</div>
    @endforeach
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div id="msg"></div>

                <h4 class="card-title">Register Course To Student</h4>
                <p class="card-description"> Basic Information</p>
                <form class="forms-sample" method="post" action="{{route('register_course.store')}}"
                      enctype="multipart/form-data" id="register-form">
                    @csrf
                    <div class="form-group">
                        <label for="exampleSelectGender">Student</label>
                        <select class="form-control form-control-sm" name="student_id" id="exampleSelectGender">
                            <option value="">Choose...</option>
                            @foreach ($students as $student)
                                <option value="{{$student->id}}">{{$student->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Course</label>
                        <select class="form-control form-control-sm" name="course_id" id="exampleSelectGender">
                            <option value="">Choose...</option>
                            @foreach ($courses as $course)
                                <option value="{{$course->id}}">{{$course->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    <button class="btn btn-light" type="reset">Cancel</button>
                </form>
            </div>
        </div>
    </div>
 @stop
@section('js')
    <script>

        $('#register-form').on('submit', function (event) {
            const url = $(this).attr('action');
            const data = $(this).serialize();
            event.preventDefault();
            $.ajax({
                url: url,
                method: 'post',
                data: data,
                success: function (response) {
                    $('#msg').html("Student-Course Registered successfully").fadeIn('slow') //also show a success
                    $("#msg").addClass("alert alert-success");
                    $('#msg').delay(5000).fadeOut('slow');
                    $("#register-form")[0].reset();
                }

            })
        })
    </script>
@endsection
