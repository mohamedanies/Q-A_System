<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Questionnaire;

use \App\User;

class QuestionnaireController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(){
        return view('questionnaire.create');
    }

    public function store(){
        $data= request()->validate([
            'title'=>'required',
            'purpose'=>'required',
        ]);

        // $date['user_id']= auth()->user()->id;
        // $questionaire= \App\Questionnaire::create($data);

        $questionaire=auth()->user()->questionaires()->create($data);

        return redirect('/questionnaires/'.$questionaire->id);
    }

    public function show(\App\Questionnaire $questionnaire){

        $questionnaire->load('questions.answers');

        return view('questionnaire.show', compact('questionnaire'));

    }
    
    
}
