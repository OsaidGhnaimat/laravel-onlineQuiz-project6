@extends('public.layout.master')
@section('content')


<div class="quiz_box">
    <header>
        <div class="title fontSize" id="quizId">{{$exam->name}}</div>
        <div class="timer ">
            <div class="time_left_txt ">Time Left</div>
            <div class="timer_sec ">5</div>
        </div>
        <div class="time_line"></div>
    </header>



    <div class="briefText fontSize">
        " <span class="a2">{{$exam->description}} </span> – {{$question->description}}

    </div>

    <!--  Section of Q -->
    <section class="questions-section">

        <div class="container">
            <form method="post" action="{{route('question.submitAns',$exam->id)}}">
                @csrf
                @method('POST')
                <div class="row">
                    <h4> {{Session::get('nextq')}}: {{$question->question}}</h4>

                    <input value="a" name="ans" type="radio" required>A. {{$question->a}} </input>
                    <input value="b" name="ans" type="radio" required>B. {{$question->b}} </input>
                    <input value="c" name="ans" type="radio" required>C. {{$question->c}} </input>
                    <input value="d" name="ans" type="radio" required>D. {{$question->d}} </input>
                    <input value="{{$question->correct}}" name="dbans" type="hidden"> </input>

                    <div class="divNext">
                        <p class="textQues fontSize"> {{Session::get('nextq')}} of {{$i}} Question</p>

                        <button>Next </button>

                    </div>
                </div>
            </form>
        </div>

    </section>


    @endsection