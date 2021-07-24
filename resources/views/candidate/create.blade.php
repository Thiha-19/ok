@extends('layout.app')

@section('content')
    <h1>This is Candidate Information Form</h1>
    {!! Form::open(['action' => '\App\Http\Controllers\CandidateController@store', 'method' =>'POST']) !!}

        {{ Form::hidden('recruitment_id',$id ) }}
        <div class="form-group">
            {{ Form::label('candidate_name','Candidate Name') }}
            {{ Form::text('candidate_name','',['class' => 'form-control', 'placeholder' => 'Eg.Tony']) }}
        </div>

        <div class="form-group">
            {{ Form::label('email','Email Address') }}
            {{ Form::text('email','',['class' => 'form-control', 'placeholder' => 'Example@mail.com']) }}
        </div>

        <div class="form-group">
            {{ Form::label('dob','Date of Birth') }}
            {{ Form::date('dob','',['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('postal','Postal Code') }}
            {{ Form::text('postal','',['class' => 'form-control', 'placeholder' => 'Eg.11101']) }}
        </div>

        <div class="form-group">
            {{ Form::label('phone','Phone Number') }}
            {{ Form::text('phone','',['class' => 'form-control', 'placeholder' => 'Eg.*** *** ***']) }}
        </div>

        <div class="form-group">
            {{ Form::label('prior_exp','Prior Experience') }}
            {{ Form::text('prior_exp','',['class' => 'form-control', 'placeholder' => 'Eg. 5 years (In Numbers Only)']) }}
        </div>

        <div class="form-group">
            {{ Form::label('education','Degree') }}
            {{ Form::text('education','',['class' => 'form-control', 'placeholder' => 'Eg. Bachelor in example']) }}
        </div>

        <div class="form-group">
            {{ Form::label('gradfrom','Graduated From') }}
            {{ Form::text('gradfrom','',['class' => 'form-control', 'placeholder' => 'Example University']) }}
        </div>

        <div class="form-group">
            {{ Form::label('graddate','Graduated Year') }}
            {{ Form::text('graddate','',['class' => 'form-control', 'placeholder' => 'Eg. 2001 (In Numbers Only)']) }}
        </div>

        <div class="form-group">
            {{ Form::label('expected_salary','Expected Salary') }}
            {{ Form::text('expected_salary','',['class' => 'form-control', 'placeholder' => 'Eg. $5000 (In Numbers Only)']) }}
        </div>

        <div class="form-group">
            {{ Form::label('add_info','Additional Information') }}
            {{ Form::textarea('add_info','',['class' => 'form-control', 'placeholder' => 'Eg.yes']) }}
        </div>

            {{ Form::submit('Apply', ['class' => 'btn btn-primary']) }}

    {!! Form::close() !!}
@endsection
