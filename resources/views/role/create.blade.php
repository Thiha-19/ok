@extends('layout.app')

@section('content')
    <h1>This is Role Creation</h1>
    {!! Form::open(['action' => '\App\Http\Controllers\RoleController@store', 'method' =>'POST']) !!}

        <div class="form-group">
            {{ Form::label('role','Role Name',['for' => 'floatingPassword']) }}
            {{ Form::text('role','',['class' => 'form-control', 'placeholder' => 'Eg.Marketing Staff']) }}
        </div>

        <div class="form-group">
            {{ Form::label('approx_salary','Approxiamte Salary') }}
            {{ Form::text('approx_salary','',['class' => 'form-control', 'placeholder' => 'Eg.$5000']) }}
        </div>

        <div class="form-group">
            {{ Form::label('description','Description') }}
            {{ Form::textarea('description','',['class' => 'form-control', 'placeholder' => 'Eg.yes']) }}
        </div>

            {{ Form::submit('Save', ['class' => 'btn btn-dark']) }}

    {!! Form::close() !!}
@endsection
