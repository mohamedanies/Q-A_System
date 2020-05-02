@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Question</div>

                <div class="card-body">
                    <form action="/questionnaires/{{$questionnaire->id}}/questions" method="post">
                        <div class="form-group">
                            <label for="question">questions</label>

                            <input type="text" name="question[question]" id="question"
                             class="form-control" placeholder="Enter question"
                              aria-describedby="help question">

                            <h4 class="text-danger"> @error('question.question') {{$message}} @enderror </h4>
                            <small id="helpId" class="text-muted">ASK A Question</small>
                        </div>

                        <div class="form-group">
                            <fieldset>
                                <legend> Choices </legend>
                                <small id="choceshelpId" class="text-muted">Give valuable Chocies</small>

                                <div>

                                    <div class="form-group">
                                        <label for="ansewr2">Choice1</label>
                                        <input type="text" name="answers[][answer]" id="ansewr2" class="form-control" placeholder="Enter Choice1" aria-describedby="help ansewr2">
                                        <h4 class="text-danger">@error('answers.0.answer') {{$message}} @enderror </h4>
                                    </div>

                                </div>

                                <div>

                                    <div class="form-group">
                                        <label for="ansewr2">Choice2</label>
                                        <input type="text" name="answers[][answer]" id="ansewr2" class="form-control" placeholder="Enter Choice2" aria-describedby="help ansewr2">
                                        <h4 class="text-danger">@error('answers.1.answer') {{$message}} @enderror </h4>
                                    </div>

                                </div>


                                <div>

                                    <div class="form-group">
                                        <label for="answer3">Choice3</label>
                                        <input type="text" name="answers[][answer]" id="answer3" class="form-control" placeholder="Enter Choice3" aria-describedby="help answer3">
                                        <h4 class="text-danger">@error('answers.2.answer') {{$message}} @enderror </h4>
                                    </div>

                                </div>

                                <div>

                                    <div class="form-group">
                                        <label for="answer3">Choice4</label>
                                        <input type="text" name="answers[][answer]" id="answer3" class="form-control" placeholder="Enter Choice4" aria-describedby="help answer3">
                                        <h4 class="text-danger">@error('answers.2.answer') {{$message}} @enderror </h4>
                                    </div>

                                </div>
                            </fieldset>
                        </div>
                        <button type="submit" class="btn btn-info">Add Questions</button>

                        @csrf
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection