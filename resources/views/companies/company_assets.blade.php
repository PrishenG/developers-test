@extends('layouts.app')

@section('content')
    
    <h3>{{$companies->name}} Assets</h3>
    <a href="create_asset" class="btn btn-primary">Create Asset</a> <a href="/companies" class="btn btn-info">Go Back</a>

    @if(count($companies->assets) > 0)

    <table class="table table-striped">
        <tr>
            <th>Description</th>
            <th>Model</th>
            <th>Value</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($companies->assets as $company)
        <tr>
                <td>{{$company->description}}</td>
                <td>{{$company->asset_model}}</td>
                <td>R{{$company->rand_value}}</td>
                <td><a href="/assets/{{$company->id}}/edit" class="btn btn-warning">Edit</a></td>
                <td>
                    {!!Form::open(['action' => ['AssetsController@destroy', $company->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                </td>
            </tr>
        @endforeach
    </table>
    @else
        <p>This company currently has no assets</p>
    @endif
@endsection