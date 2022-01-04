@extends('admin/includes/master')
@section('content')

<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>You can update exam here</h4>

                    <form method="post" action="{{route('exam.update',$examEdit->id)}}" class="dropzone dropzone-custom needsclick add-professors" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-lg-10 col-md-6 col-sm-6 col-xs-12 m-auto">

                                <div class="form-group">
                                    <label for="name" class="form-label">Name</label>
                                    <input name="name" type="text" class="form-control" value="{{$examEdit->name}}">
                                </div>


                                <div class="form-group">
                                    <label for="description" class="form-label">Description</label>
                                    <input name="description" type="text" class="form-control" value="{{$examEdit->description}}">
                                </div>
                                <div class="form-group">
                                    <label for="image" class="form-label">Image</label>
                                    <input name="image" type="file" class="form-control" value="{{$examEdit->image}}">
                                </div>

                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection