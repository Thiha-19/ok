@extends('layout.app')

@section('content')
    <h1>This is Candidate Update</h1>
    {!! Form::open(['action' => ['\App\Http\Controllers\CandidateController@update', $candidate->id], 'method' =>'POST']) !!}

    <div class="form-group">
        {{ Form::label('candidate_name','Candidate Name') }}
        {{ Form::text('candidate_name',$candidate->candidate_name,['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('email','Email Address') }}
        {{ Form::text('email',$candidate->email,['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('dob','Date of Birth') }}
        {{ Form::text('dob',$candidate->dob,['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('postal','Postal Code') }}
        {{ Form::text('postal',$candidate->postal,['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('phone','Phone Number') }}
        {{ Form::text('phone',$candidate->phone,['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('prior_exp','Prior Experience') }}
        {{ Form::text('prior_exp',$candidate->prior_exp,['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('education','Degree') }}
        {{ Form::text('education',$candidate->education,['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('gradfrom','Graduated From') }}
        {{ Form::text('gradfrom',$candidate->gradfrom,['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('graddate','Graduated Year') }}
        {{ Form::text('graddate',$candidate->graddate,['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('expected_salary','Expected Salary') }}
        {{ Form::text('expected_salary',$candidate->expected_salary,['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('add_info','Additional Information') }}
        {{ Form::text('add_info',$candidate->add_info,['class' => 'form-control']) }}
    </div>

        {{ Form::hidden('_method', 'PUT') }}
        {{ Form::submit('Update', ['class' => 'btn btn-primary']) }}

{!! Form::close() !!}
@endsection



