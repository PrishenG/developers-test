@extends('layouts.app')

@section('content')
    <h1>Add Company</h1>
    {!! Form::open(['action' => 'CompanyController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Company name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Company name'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Email address')}}
            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email address'])}}
        </div>
        <div class="form-group">
            {{Form::file('logo')}}
        </div>
        <div class="form-group">
            {{Form::label('website', 'Company Website')}}
            {{Form::text('website', '', ['class' => 'form-control', 'placeholder' => 'Company website'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection