@extends('layouts.app')

@section('content')

    <a href="/companies" class="btn btn-info">Go Back</a> <a href="/companies/{{$company->id}}/edit" class="btn btn-info">Edit Company</a>
    <h1>{{$company->name}}</h1>
    <p>Email Address: {{$company->email}}</p>
    <p>Company Website: <a href= "{{$company->website}}">{{$company->website}}</a></p>
    <img style="width: 300px" src="/storage/logos/{{$company->logo}}">
    <br><br>
    <hr>
    <small>Written on {{$company->created_at}} and updated on {{$company->updated_at}}</small>
    <hr>
    @if(!Auth::guest())
        
        <a href="/companies/{{$company->id}}/company_assets" class="btn btn-info">Manage Assets</a>

        <!--Code for deleting-->
        {!!Form::open(['action' => ['CompanyController@destroy', $company->id], 'method' => 'POST', 'class' => 'float-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
        
    @endif

@endsection