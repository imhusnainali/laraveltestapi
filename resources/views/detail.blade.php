@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>User: {{$user->name}}</h1> <br>
            <h1>Email: {{$user->email}}</h1> <br>
            <hr>
            <p>
                <img src="{{route('user.avatar', ['filename' => $user->avatar])}}"
                     class="img-fluid float-left mr-3 mb-3" alt="Responsive image">
                {{$user->description}}
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="{{route('users')}}" class="btn btn-info">
                Go Back
            </a>
        </div>
    </div>
</div>
@endsection