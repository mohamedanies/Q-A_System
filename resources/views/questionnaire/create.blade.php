@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Question</div>

                <div class="card-body">
                    <form action="/questionnaires" method="post">
                    <div class="form-group">
                      <label for="title">Titles</label>
                      <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title" aria-describedby="help title">
                     <h4 class="text-danger"> @error('title') {{$message}} @enderror </h4>
                      <small id="helpId" class="text-muted">Give Your Question attractive title</small>
                    </div>

                    <div class="form-group">
                      <label for="purpose">Purpose</label>
                      <input type="text" name="purpose" id="purpose" class="form-control" placeholder="Enter purpose" aria-describedby="help purpose">
                      <h4 class="text-danger">@error('purpose') {{$message}} @enderror </h4>
                      <small id="helpId" class="text-muted">Give Your Question a purpose</small>
                    </div>

                    <button type="submit" class="btn btn-info">Save Question</button>
                
                @csrf
                </form>
                
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
