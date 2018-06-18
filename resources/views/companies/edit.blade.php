@extends('layouts.app')

@section('content')
<a href="/companies/{{$company->id}}" class="btn btn-info">Go Back</a>
    <h1>Edit Company</h1>
    {!! Form::open(['action' => ['CompanyController@update', $company->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Company name')}}
            {{Form::text('name', $company->name, ['class' => 'form-control', 'placeholder' => 'Company name'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Email address')}}
            {{Form::text('email', $company->email, ['class' => 'form-control', 'placeholder' => 'Email Address'])}}
        </div>
        <div class="form-group">
            {{Form::file('logo')}}
        </div>
        <div class="form-group">
            {{Form::label('website', 'Company website')}}
            {{Form::text('website', $company->website, ['class' => 'form-control', 'placeholder' => 'Company website'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection