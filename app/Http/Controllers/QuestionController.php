<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Question;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


use function PHPUnit\Framework\countOf;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $questions = Question::all();

        return view('admin.question.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Question::create([
            "question"  => $request->question,
            "description"  => $request->description,
            "a" => $request->a,
            "b" => $request->b,
            "c" => $request->c,
            "d" => $request->d,
            "correct" => $request->correct,
            "exam_id" => $request->exam_id,



        ]);
        return redirect()->route('question.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        //
        Session::put('r', '0');
        Session::put('nextq', '1');
        Session::put('wrongans', '0');
        Session::put('correctans', '0');
        $exam = Exam::find($id);
        $question = Question::where('exam_id', $exam->id)->get()->first();
        // to get the number 
        $questions = Question::where('exam_id', $exam->id)->get();
        $questions = $questions->values();
        $i = $questions->count();


        return view('public.question', compact('question', 'exam', 'i'));
    }

    public function submitAns(Request $request, $id)
    {
        $data = $request->input();
        $nextq = Session::get('nextq');
        $wrongans = Session::get('wrongans');
        $correctans = Session::get('correctans');
        $r = Session::get('r');
        $validate = $request->validate([

            'ans' => 'required',
            'dbans' => 'required',

        ]);

        $nextq += 1; //2
        $r += 1; //1

        if ($request->dbans == $request->ans) {
            $correctans += 1;
        } else {
            $wrongans += 1;
        }
        Session::put('nextq', $nextq);
        Session::put('wrongans', $wrongans);
        Session::put('correctans', $correctans);
        Session::put('r', $r);

        $exam = Exam::find($id);
        $questions = Question::where('exam_id', $exam->id)->get();
        $questions = $questions->values();
        $question  = $questions->get($r);


        foreach ($questions as $ques) {
            $i = $ques->count();

            if ($r + 1 <= $i) {
                return view('public.question', compact('question', 'exam', 'i'));
            } else {
                $score = Session::get('correctans');
                $score2 = Session::get('wrongans');
                /* $winner = "{{asset('img/factors-amico.png')}}";
                $loser = "{{asset('img/looser.png')}}";
                $color = "background-color:hotpink"; */
                $win = " hey you winner!";




                if ($score >= $score2) {
                    return view('public.end', compact('win', 'data'));
                }
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $quesEdit = Question::find($id);
        return view('admin.question.edit', compact('quesEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $quesEdit = Question::find($id);
        $quesEdit->question = $request->question;
        $quesEdit->description = $request->description;
        $quesEdit->a = $request->a;
        $quesEdit->b = $request->b;
        $quesEdit->c = $request->c;
        $quesEdit->d = $request->d;
        $quesEdit->correct = $request->correct;
        $quesEdit->exam_id = $request->exam_id;

        // call update func
        $quesEdit->update();
        return redirect()->route('question.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $quesDestroy = Question::find($id);
        $quesDestroy->destroy($id);
        return redirect()->route('question.index');
    }
}
