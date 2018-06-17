@extends('layouts.app')

@section('content')
    <h1>Edit Asset</h1>
    {!! Form::open(['action' => ['AssetsController@update', $asset->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', $asset->description, ['class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        <div class="form-group">
            {{Form::label('asset_model', 'Model')}}
            {{Form::text('asset_model', $asset->asset_model, ['class' => 'form-control', 'placeholder' => 'Assest model'])}}
        </div>
        <div class="form-group">
            {{Form::label('rand_value', 'Value (R)')}}
            {{Form::text('rand_value', $asset->rand_value, ['class' => 'form-control', 'placeholder' => 'Rand value'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection