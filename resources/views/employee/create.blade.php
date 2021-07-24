@extends('layout.app')

@section('content')
    <h1>This is Employee Information Form</h1>
    {!! Form::open(['action' => '\App\Http\Controllers\EmployeeController@store', 'method' =>'POST']) !!}
        {{ Form::text('candidate_id',$id ) }}
        <div class="form-group">
            {{ Form::label('name','Employee Name') }}
            {{ Form::text('name','',['class' => 'form-control', 'placeholder' => 'Eg. Verstappen']) }}
        </div>

        <div class="form-group">
            {{ Form::label('email','Email Address') }}
            {{ Form::text('email','',['class' => 'form-control', 'placeholder' => 'Example@mail.com']) }}
        </div>

        <div class="form-group">
            {{ Form::label('password','Password') }}
            {{ Form::text('password','',['class' => 'form-control', 'placeholder' => '********']) }}
        </div>

        <div class="form-group">
            {{ Form::label('address','Full Address') }}
            {{ Form::textarea('address','',['class' => 'form-control',]) }}
        </div>

        <div class="form-group">
            {{ Form::label('ename','Emergency Contact Name') }}
            {{ Form::text('ename','',['class' => 'form-control', 'placeholder' => 'Eg.Carlos']) }}
        </div>

        <div class="form-group">
            {{ Form::label('eaddress','Emergency Address') }}
            {{ Form::textarea('eaddress','',['class' => 'form-control', 'placeholder' => 'Eg. *** *** ***']) }}
        </div>

        <div class="form-group">
            {{ Form::label('info','Additional Information') }}
            {{ Form::textarea('info','',['class' => 'form-control', 'placeholder' => 'Eg. yes']) }}
        </div>

            {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}

    {!! Form::close() !!}
@endsection
