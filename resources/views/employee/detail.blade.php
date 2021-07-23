@extends('layout.app')

@section('content')
    <h1>This is Employee Detail for update and delete</h1>
    {!! Form::open(['url' => 'foo/bar']) !!}
    <h1>{{$employee-> id}}</h1>
    <div class="container">
        <h1>Employee Name: {{$employee-> candidate_name}}</h1>
        <h1>Email Address: {{$employee-> email}}</h1>
        <h1>Password: {{$employee-> password}}</h1>
        <h1>address: {{$employee-> address}}</h1>
        <h1>Emergency Contact Name: {{$employee-> ename}}</h1>
        <h1>Emergency Contact Number: {{$employee-> eaddress}}</h1>
        <h1>Additional Information: {{$employee-> info}}</h1>
        <a href="/employees/{{ $employee->id }}/edit">Update</a>
        <a href="/employees" class="btn btn-default">Back</a>
    </div>

        {!! Form::open(['action' => ['\App\Http\Controllers\EmployeeController@destroy', $employee->id], 'method' => 'POST', 'class' => 'float-right']) !!}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', ['class' => 'btn btn-damger']) }}
        {!! Form::close() !!}

    {!! Form::close() !!}
@endsection
