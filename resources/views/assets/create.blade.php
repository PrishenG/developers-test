@extends('layouts.app')

@section('content')
    <h1>Add Asset</h1>
    {!! Form::open(['action' => 'AssetsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('description', 'Asset description')}}
            {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        <div class="form-group">
            {{Form::label('asset_model', 'Model')}}
            {{Form::text('asset_model', '', ['class' => 'form-control', 'placeholder' => 'Asset model'])}}
        </div>
        <div class="form-group">
            {{Form::label('rand_value', 'Value (R)')}}
            {{Form::text('rand_value', '', ['class' => 'form-control', 'placeholder' => 'Rand value'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection