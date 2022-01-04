@extends('admin/includes/master')
@section('content')

<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>You can update question here</h4>

                    <form method="post" action="{{route('question.update',$quesEdit->id)}}" class="dropzone dropzone-custom needsclick add-professors">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-lg-10 col-md-6 col-sm-6 col-xs-12 m-auto">

                                <div class="form-group">
                                    <label for="question" class="form-label">Question</label>
                                    <input name="question" type="text" class="form-control" value="{{$quesEdit->question}}">
                                </div>


                                <div class="form-group">
                                    <label for="description" class="form-label">Description</label>
                                    <input name="description" type="text" class="form-control" value="{{$quesEdit->description}}">
                                </div>
                                <div class="form-group">
                                    <label for="a" class="form-label">A </label>
                                    <input name="a" type="text" class="form-control" value="{{$quesEdit->a}}">
                                </div>
                                <div class="form-group">
                                    <label for="b" class="form-label">B</label>
                                    <input name="b" type="text" class="form-control" value="{{$quesEdit->b}}">
                                </div>
                                <div class="form-group">
                                    <label for="c" class="form-label">C</label>
                                    <input name="c" type="text" class="form-control" value="{{$quesEdit->c}}">
                                </div>
                                <div class="form-group">
                                    <label for="d" class="form-label">D</label>
                                    <input name="d" type="text" class="form-control" value="{{$quesEdit->d}}">
                                </div>
                                <div class="form-group">
                                    <label for="correct" class="form-label">CORRECT</label>
                                    <input name="correct" type="text" class="form-control" value="{{$quesEdit->correct}}">
                                </div>
                                <div class="form-group">
                                    <label for="exam_id" class="form-label">Exam ID</label>
                                    <input name="exam_id" type="text" class="form-control" value="{{$quesEdit->exam_id}}">
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