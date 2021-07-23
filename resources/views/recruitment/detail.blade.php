@extends('layout.app')

@section('content')
    <h1>This is Recruitment Detail for update and delete</h1>
    {!! Form::open(['recruitment' => 'foo/bar']) !!}
    <h1>{{$recruitment-> id}}</h1>
    <div class="container">
        <h1>{{$recruitment-> num_of_positions}}</h1>
        <h1>{{$recruitment-> description}}</h1>
        <h1>{{$recruitment-> start_date}}</h1>
        <h1>{{$recruitment-> end_date}}</h1>
        <h1>{{$recruitment-> role_id}}</h1>
        <h1>{{$recruitment-> department_id}}</h1>

        <a href="/recruitments/{{ $recruitment->id }}/edit">Update</a>
        <a href="/recruitments" class="btn btn-default">Back</a>
        <a href="/candidates/create", {{ $recruitment->id }}>Apply</a>
    </div>


        {!! Form::open(['action' => ['\App\Http\Controllers\RecruitmentController@destroy', $recruitment->id], 'method' => 'POST', 'class' => 'float-right']) !!}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', ['class' => 'btn btn-damger']) }}
        {!! Form::close() !!}

    {!! Form::close() !!}
@endsection
