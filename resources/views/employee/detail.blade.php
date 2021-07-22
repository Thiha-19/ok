@extends('layout.app')

@section('content')
    <h1>This is Candidate Detail for update and delete</h1>
    {!! Form::open(['url' => 'foo/bar']) !!}
    <h1>{{$candidate-> id}}</h1>
    <div class="container">
        <h1>Candidate Name: {{$candidate-> candidate_name}}</h1>
        <h1>Email Address: {{$candidate-> email}}</h1>
        <h1>Date of Birth: {{$candidate-> dob}}</h1>
        <h1>Postal Code: {{$candidate-> postal}}</h1>
        <h1>Phone Number: {{$candidate-> phone}}</h1>
        <h1>Prior Experience: {{$candidate-> prior_exp}}</h1>
        <h1>Degree: {{$candidate-> education}}</h1>
        <h1>Graduated From: {{$candidate-> gradfrom}}</h1>
        <h1>Graduated Year: {{$candidate-> graddate}}</h1>
        <h1>Expected Salary: {{$candidate-> expected_salary}}</h1>
        <h1>Additional Information: {{$candidate-> add_info}}</h1>
        <a href="/candidates/{{ $candidate->id }}/edit">Update</a>
        <a href="/candidates" class="btn btn-default">Back</a>
    </div>

        {!! Form::open(['action' => ['\App\Http\Controllers\CandidateController@destroy', $candidate->id], 'method' => 'POST', 'class' => 'float-right']) !!}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', ['class' => 'btn btn-damger']) }}
        {!! Form::close() !!}

    {!! Form::close() !!}
@endsection
