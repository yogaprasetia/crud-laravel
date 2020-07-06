<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use Session;

class AnswerController extends Controller
{
    public function index($id)
    {
        $answers = Answer::whereQuestionId($id)->get();

        return view('answers.index')->withAnswers($answers)->withId($id);
    }

    public function store(Request $request, $id)
    {
        $question = Question::find($id);

        $request->validate([
            'isi' => 'required|max:255',
        ]);

        $answer = new Answer([
            'isi' => $request->isi
        ]);

        $question->answers()->save($answer);

        Session::flash('success', 'Your answer has been added!');

        return back();
    }

    public function delete($id)
    {
        $answers = Answer::find($id);
        $answers->delete();

        Session::flash('success', 'Your answer with id ' . $id . ' has been deleted!');

        return back();
    }
}
