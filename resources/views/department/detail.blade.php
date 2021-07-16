@extends('layout.app')

@section('content')
    <h1>This is Department Detail for update and delete</h1>
    {!! Form::open(['url' => 'foo/bar']) !!}
    <h1>{{$role-> id}}</h1>
    <div class="container">
        <h1>{{$department-> department_name}}</h1>
        <h1>{{$department-> email}}</h1>
        <h1>{{$department-> location}}</h1>
        <h1>{{$department-> description}}</h1>
        <a href="/departments/{{ $department->id }}/edit">Edit</a>
        <a href="/department" class="btn btn-default">Back</a>
    </div>

        {!! Form::open(['action' => ['\App\Http\Controllers\DepartmentController@destroy', $department->id], 'method' => 'POST', 'class' => 'float-right']) !!}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', ['class' => 'btn btn-damger']) }}
        {!! Form::close() !!}

    {!! Form::close() !!}
@endsection
