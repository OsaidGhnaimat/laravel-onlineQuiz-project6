@extends('admin.includes.master')

@section('content')

<!-- dd($employee); -->
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Question list</h4>
                    <div class="add-product">
                        <a href="/admin/question/create">Add question</a>
                    </div>
                    <table class="table table-striped m-auto">
                        <thead>
                            <tr>
                                <th>Question ID</th>
                                <th>Question </th>
                                <th>Description</th>
                                <th>A</th>
                                <th>B</th>
                                <th>C</th>
                                <th>D</th>
                                <th>Correct</th>
                                <th>Exam ID</th>

                            </tr>
                        </thead>
                        @foreach ($questions as $question)
                        <tr>
                            <td> {{$question-> id}}</td>
                            <td> {{$question-> question}}</td>
                            <td> {{$question-> description}}</td>
                            <td> {{$question-> a}}</td>
                            <td> {{$question-> b}}</td>
                            <td> {{$question-> c}}</td>
                            <td> {{$question-> d}}</td>
                            <td> {{$question-> correct}}</td>
                            <td> {{$question-> exam_id}}</td>
                            <td>
                                <form action="{{route('question.destroy',$question->id)}}" method="post">
                                    <a href="{{route('question.edit',$question->id)}}" data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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