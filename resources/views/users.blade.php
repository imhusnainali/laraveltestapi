@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Users:</h1>
    <hr>
    <div class="row">
        @foreach ($users as $user)
            <div class="col-12 col-md-4 p-3">
                <div class="card">
                    <img class="card-img-top" src="{{route('user.avatar', ['filename' => $user->avatar])}}" alt="{{$user->name}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$user->name}}</h5>
                        <p class="card-text">{{str_limit($user->description, 40)}}</p>
                        <a href="{{route('user.detail', [$user->id])}}" class="btn btn-primary">Go Detail View</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $users->links() }}
</div>
@endsection
