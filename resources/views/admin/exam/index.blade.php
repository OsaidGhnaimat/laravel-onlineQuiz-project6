@extends('admin.includes.master')

@section('content')

<!-- dd($employee); -->
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Exam list</h4>
                    <div class="add-product">
                        <a href="/admin/exam/create">Add exam</a>
                    </div>
                    <table class="table table-striped m-auto">
                        <thead>
                            <tr>
                                <th>Exam ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                            </tr>
                        </thead>
                        @foreach ($exams as $exam)
                        <tr>
                            <td> {{$exam-> id}}</td>
                            <td> {{$exam-> name}}</td>
                            <td> {{$exam-> description}}</td>
                            <td> <img style="width:80px; height:80px;" src='{{asset($exam-> image)}}'></td>
                            <td>
                                <form action="{{route('exam.destroy',$exam->id)}}" method="post">
                                    <a href="{{route('exam.edit',$exam->id)}}" data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection