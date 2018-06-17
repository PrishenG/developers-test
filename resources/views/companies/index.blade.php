@extends('layouts.app')

@section('content')
    <h1>Companies</h1>
    <a href="/companies/create" class="btn btn-primary">Add Company</a>
    <hr>
    @if(count($companies) > 0)
        @foreach($companies as $company)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                            <img style="width: 100%" src="/storage/logos/{{$company->logo}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                            <h3><a href="/companies/{{$company->id}}">{{$company->name}}</a></h3>
                            <small>Added on {{$company->created_at}}</small>
                    </div>
                </div>
            </div>
            <hr>
        @endforeach
        {{$companies->links()}}
    @else
        <h3>No companies being managed</h3>
    @endif
@endsection