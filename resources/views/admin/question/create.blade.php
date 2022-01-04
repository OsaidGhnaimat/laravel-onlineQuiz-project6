@extends('admin/includes/master')
@section('content')


<div class="product-status mg-b-15">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>You can add questions here</h4>
                    <div class="add-product">
                        <a href="/admin/question">Show questions</a>
                    </div>

                    <form method="post" style="padding: 50px 0 !important;" action="{{route('question.store')}}" class="dropzone dropzone-custom needsclick add-professors">
                        @csrf
                        <div class="row">
                            <div class="col-lg-10 col-md-6 col-sm-6 col-xs-12 m-auto">
                                <div class="form-group">
                                    <label for="question" class="form-label">Question </label>
                                    <input name="question" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="description" class="form-label">Description </label>
                                    <input name="description" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="a" class="form-label">A</label>
                                    <input name="a" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="b" class="form-label">B</label>
                                    <input name="b" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="c" class="form-label">C</label>
                                    <input name="c" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="d" class="form-label">D</label>
                                    <input name="d" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="correct" class="form-label">CORRECT</label>
                                    <input name="correct" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exam_id" class="form-label">Exam ID</label>
                                    <input name="exam_id" type="text" class="form-control">
                                </div>

                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary waves-effect waves-light">Add</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection