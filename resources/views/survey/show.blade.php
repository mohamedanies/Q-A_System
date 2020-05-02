@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1>{{ $questionnaire->name}}</h1>
            <form action="/surveys/{{ $questionnaire->id}}-{{Str::slug($questionnaire->title)}}" method="POST">
                @csrf

                @foreach($questionnaire->questions as $key => $question)

                <div class="card mt-4">
                    <div class="card-header"><strong>{{ $key +1 }}</strong> {{ $question->question }}</div>
                    <div class="card-body">
                        @error('responses.' .$key. '.answer_id')
                        <h4 class="text-danger">{{$message}}</h4>
                        @enderror


                        <ul class="list-group">
                            @foreach($question->answers as $answer)
                            <label for="answer{{$answer->id}}">

                                <li class="list-group-item">
                                    <input type="radio" name="responses[{{$key}}][answer_id]" value="{{$answer->id}}" id=" answer{{$answer->id}}" class="mr-2">
                                    {{ $answer->answer}}

                                    <input type="hidden" name="responses[{{$key}}][question_id]" value="{{$question->id}}">

                                </li>
                            </label>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endforeach

            


            <div class="card mt-4" >
                <div class="card-header">Your Information</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" name="survey[name]" id="name" class="form-control" placeholder="Enter name" aria-describedby="help name">
                        <h4 class="text-danger"> @error('name') {{$message}} @enderror </h4>
                        <small id="helpId" class="text-muted">Hello whats ur name?</small>
                    </div>

                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" name="survey[email]" id="email" class="form-control" placeholder="Enter email" aria-describedby="help email">
                        <h4 class="text-danger">@error('email') {{$message}} @enderror </h4>
                        <small id="helpId" class="text-muted">ur email please</small>
                    </div>

                </div>
                <button class="btn btn-dark " type="submit">Complete Survey</button>

            </div>

        </div>
    </div>
    </form>
</div>
@endsection