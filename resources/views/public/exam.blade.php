@extends('public.layout.master')
@section('content')

<!-----------------------------choice quis start------------------------------>
<div class="choice">
    <div class="title">
        <h2>
            "Welcome <span class="user-N"> Ahmed</span> the exam page"<img class="imgLable" src="../img/img-removebg-preview.png" alt="" />
        </h2>
    </div>

    <!-- start card  -->

    <div class="box">
        @foreach($exams as $exam)
        <div class="card">
            <i class="fa fa-rocket" aria-hidden="true"></i> <!-- put img here -->
            <h3 class="question">{{$exam->name}}</h3>
            <p> {{$exam->description}}</p>
            <p>
                If you want to learn This course, go
                <a class="link" href="https://www.duolingo.com/" target="blank">here</a>.
            </p>
            <a class="button" href="{{route('question.show',$exam->id)}}">Start quiz</a>

        </div>
        @endforeach
    </div>


    @endsection


    <!-----------------------choice quis end------------------------------>