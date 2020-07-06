<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use Session;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::orderBy('updated_at', 'desc')->paginate(3);
        // return $questions;
        return view('questions.index')->withQuestions($questions);
    }

    public function create()
    {
        return view('questions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:questions|max:255',
            'body' => 'required',
        ]);

        $question = new Question;
        $question->title = $request->title;
        $question->body = $request->body;

        $question->save();

        Session::flash('success', 'Your question has been saved!');

        return redirect()->route('questions.index');
    }

    public function show($id)
    {
        $question = Question::find($id);
        $answers = $question->answers()->orderBy('created_at', 'desc')->get();
        return view('questions.show')->withQuestion($question)->withAnswers($answers);
    }

    public function edit($id)
    {
        $question = Question::find($id);
        return view('questions.edit')->withQuestion($question);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        $question = Question::find($id);
        $question->title = $request->input('title');
        $question->body = $request->input('body');

        $question->save();

        Session::flash('success', 'Your question has been updated!');

        return redirect()->route('questions.index');
    }

    public function delete($id)
    {
        $question = Question::find($id);
        $question->delete();

        Session::flash('success', 'Your question has been deleted!');

        return redirect()->route('questions.index');
    }
}
