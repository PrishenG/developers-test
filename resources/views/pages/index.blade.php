@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">    
        <h1>{{$title}}</h1>
        <h5>Please Log In</h5>
        <br>
        <p><a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Login</a></p>
    </div>
@endsection