@extends('admin.layouts.master')

@section('title')
    Student
@stop
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Register Student</h4>
                <p class="card-description"> Basic Information</p>
                <form class="forms-sample" method="Post" action="{{ route('students.update', $student->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $student->name }}"
                            placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" name="email" value="{{ $student->email }}"
                            placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Address</label>
                        <input type="text" class="form-control" name="address" value="{{ $student->address }}"
                            placeholder="Address">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Phone</label>
                        <input type="text" class="form-control" name="phone" value="{{ $student->phone }}"
                            placeholder="123 456 7890">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Gender</label>
                        <select class="form-control form-control-sm" name="gender">
                            <option value="">Choose...</option>
                            <option @if ($student->gender === 'Male') selected @endif>Male</option>
                            <option @if ($student->gender === 'Female') selected @endif>Female</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-form-label">Date of Birth</label>
                        <input class="form-control" name="date_of_birth" value="{{ $student->date_of_birth }}"
                            placeholder="dd/mm/yyyy" />
                    </div>

                    <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
                    <button class="btn btn-light" type="reset">Cancel</button>
                </form>
            </div>

        </div>
    </div>
@stop
