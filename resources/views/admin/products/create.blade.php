@extends('admin.layouts.master')

@section('title')
    create Product
@endsection

@section('css')
@endsection

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('products.store')}}" method="Post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputName">Product Name</label>
                    <input type="email" name="name" class="form-control">
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="exampleInputPrice">Price</label>
                            <input type="text" name="price" class="form-control">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="exampleInputQuantity">Quantity</label>
                            <input type="number" name="number"
                                   min="0" max="100" step="1" value="0" class="form-control">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="exampleInputQuantity">Active <small>is product active</small></label>
                            <input type="number" name="number"
                                   min="0" max="100" step="1" value="0" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputDescription">Description</label>
                    <textarea type="password" name="description" class="form-control"></textarea>
                </div>


                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection

@section('js')
@endsection
