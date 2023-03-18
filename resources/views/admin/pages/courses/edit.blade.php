@extends('admin.layouts.master')

@section('title')
   Edit Courses
@stop
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div id="msg"></div>
                <h4 class="card-title">Register Course</h4>
                <form class="forms-sample" method="POST" action="{{ route('courses.update', $course->id) }}"
                      enctype="multipart/form-data" id="course-form">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label>Course ID</label>
                        <input type="text" class="form-control" name="number" value="{{ $course->number }}" placeholder="Number of Course">
                    </div>

                    <div class="form-group">
                        <label>Course Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $course->name }}" placeholder="Name">
                    </div>

                    <div class="form-group">
                        <label>Course credit</label>
                        <input type="text" class="form-control" name="credit"  value="{{ $course->credit }}" placeholder="Number of Hours">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Language</label>
                        <select class="form-control form-control-sm" name="language" id="exampleSelectGender">
                            <option value="">Choose...</option>
                            <option @if ($course->language === 'Arabic') selected @endif>Arabic</option>
                            <option @if ($course->language === 'English') selected @endif>English</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea class="form-control" name="description" id="exampleTextarea1" rows="4"
                                  placeholder="Description of Course">{{ $course->description }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    <button class="btn btn-light" type="reset">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@stop
