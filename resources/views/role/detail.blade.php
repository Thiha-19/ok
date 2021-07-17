@extends('layout.app')

@section('content')
    <h1>This is Role Detail for update and delete</h1>
    {!! Form::open(['url' => 'foo/bar']) !!}
    <h1>{{$role-> id}}</h1>
    <div class="container">
        <h1>{{$role-> role}}</h1>
        <h1>{{$role-> approx_salary}}</h1>
        <h1>{{$role-> description}}</h1>
        <a href="/roles/{{ $role->id }}/edit">Update</a>
        <a href="/roles" class="btn btn-default">Back</a>
    </div>

        {!! Form::open(['action' => ['\App\Http\Controllers\RoleController@destroy', $role->id], 'method' => 'POST', 'class' => 'float-right']) !!}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', ['class' => 'btn btn-damger']) }}
        {!! Form::close() !!}

    {!! Form::close() !!}
@endsection
