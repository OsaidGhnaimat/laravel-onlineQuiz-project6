@extends('public.layout.master')
@section('content')


<!-- Result Pages -->
<section class="resultContainer">
    <img class="winnerImage" src="{{asset('img/factors-amico.png')}}" alt="" />
    <!-- <img class="loserImage" src="{{asset('img/looser.png')}}" alt="" /> -->
    <div class="textResult" style="background-color:hotpink;">
        <div class="resultDiscription" style="margin-left:300px;margin-top:80px; font-size:20px;color:greenyellow;">{{$win?? ''}} </div>
        <div class="resultQout" style="margin-left:180px; margin-top:80px;"> Your Correct answer: {{Session::get('correctans')}} and wrong is: {{Session::get('wrongans')}}</div>
        <div class="result"></div>
        <button class="viewAnswersBtn">View Answers </button>
        <div class="resultTable"></div>
    </div>

    <div class="finshBtnsContainer">
        <button class="BackToCourseBtn btn">
            <a href="#">Back to course</a>
        </button>
        <button class="logoutBtn btn"><a href="{{route('home')}}">Log out</a></button>
    </div>
</section>

@endsection