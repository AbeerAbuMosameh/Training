@extends('admin.layouts.master')

@section('title')
    Courses
@stop
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div id="msg"></div>
                <h4 class="card-title">Register Course</h4>
                <p class="card-description"> Basic Information</p>
                <form class="forms-sample" method="post" action="{{route('courses.store')}}"
                      enctype="multipart/form-data" id="course-form">
                    @csrf
                    <div class="form-group">
                        <label>Course ID</label>
                        <input type="text" class="form-control" name="number" placeholder="Number of Course">
                    </div>

                    <div class="form-group">
                        <label>Course Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>

                    <div class="form-group">
                        <label>Course credit</label>
                        <input type="text" class="form-control" name="credit" placeholder="Number of Hours">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Language</label>
                        <select class="form-control form-control-sm" name="language" id="exampleSelectGender">
                            <option value="">Choose...</option>
                            <option>Arabic</option>
                            <option>English</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea class="form-control" name="description" id="exampleTextarea1" rows="4"
                                  placeholder="Description of Course"></textarea>
                    </div>

                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    <button class="btn btn-light" type="reset">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@stop
