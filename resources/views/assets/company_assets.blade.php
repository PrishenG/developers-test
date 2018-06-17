@extends('layouts.app')

@section('content')
    
    <h3>Assets</h3>
    <a href="/assets/create" class="btn btn-primary">Create Asset</a>

    @if(count($assets) > 0)
    <table class="table table-striped">
        <tr>
            <th>Description</th>
            <th>Model</th>
            <th>Value</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($assets as $asset)
        <tr>
                <td>{{$asset->description}}</td>
                <td>{{$asset->asset_model}}</td>
                <td>{{$asset->rand_value}}</td>
                <td><a href="/assets/{{$asset->id}}/edit" class="btn btn-default">Edit</a></td>
                <td>
                    {!!Form::open(['action' => ['AssetsController@destroy', $asset->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
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
</div>