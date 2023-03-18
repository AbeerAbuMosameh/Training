@extends('admin.layouts.master')

@section('title')
    Student
@stop
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div id="msg"></div>

                <h4 class="card-title">Register Student</h4>
                <p class="card-description"> Basic Information</p>
                <form class="forms-sample" method="post" action="{{route('students.store')}}"
                      enctype="multipart/form-data" id="std-form">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Email</label>
                        <input type="email" class="form-control" name="email" value="{{old('email')}}"
                               placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Address</label>
                        <input type="text" class="form-control" name="address" value="{{old('address')}}"
                               placeholder="Address">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Phone</label>
                        <input type="text" class="form-control" name="phone" value="{{old('phone')}}"
                               placeholder="123 456 7890">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Gender</label>
                        <select class="form-control form-control-sm" name="gender">
                            <option value="">Choose...</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-form-label">Date of Birth</label>
                        <input type="date" class="form-control" name="date_of_birth" value="{{old('date_of_birth')}}"
                        />

                    </div>

                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    <button class="btn btn-light" type="reset">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@stop

