@extends('admin.layouts.master')

@section('title')
    Course
@stop

@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
@endpush

@section('content')
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
    @endforeach
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title">Courses
                </p>
                <div id="msg"></div>
                <div class="table-responsive">
                    <div class="container">
                        <table id="table-body" class="table table-striped table-bordered">
                            <tbody>
                                <th>Name</th>
                                <th>Number</th>
                                <th>Credit </th>
                                <th>Language </th>
                                <th>Description</th>
                                <th>Actions</th>
                                @foreach ($courses as $course)
                                    <tr>
                                        <td>{{ $course->name }}</td>
                                        <td>{{ $course->number }}</td>
                                        <td>{{ $course->credit }}</td>
                                        <td>{{ $course->language }}</td>
                                        <td>{{ substr($course->description, 0, 20) }}</td>
                                        <td>
                                            <div class="mt-stats">
                                                <div class="btn-group btn-group btn-group-justified">

                                                    <form method="GET"
                                                        action="{{ route('courses.edit', $course->id) }}">
                                                        @csrf
                                                        <button class="badge badge-success"><i>Edit</i>
                                                        </button>
                                                    </form>


                                                    <form method="POST"
                                                        action="{{ route('courses.destroy', $course->id) }}">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="badge badge-danger "
                                                            onclick="return confirm('Are you sure?')"><i>delete</i>
                                                        </button>
                                                    </form>


                                                </div>
                                            </div>
                                        </td>
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
