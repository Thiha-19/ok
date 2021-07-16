@extends('layout.app')

@section('content')
    <h1>This is Department Update</h1>
    {!! Form::open(['action' => '\App\Http\Controllers\DepartmentController@update', 'method' =>'POST']) !!}

    <div class="form-group">
        {{ Form::label('department_name','Department Name') }}
        {{ Form::text('name',$department->department_name,['class' => 'form-control', 'placeholder' => 'Eg.Food']) }}
    </div>

    <div class="form-group">
        {{ Form::label('email','Email') }}
        {{ Form::text('name',$department->email,['class' => 'form-control', 'placeholder' => 'Eg.@mail.com']) }}
    </div>

    <div class="form-group">
        {{ Form::label('location','Location') }}
        {{ Form::text('name',$department->location,['class' => 'form-control', 'placeholder' => 'Eg.City']) }}
    </div>

    <div class="form-group">
        {{ Form::label('description','Description') }}
        {{ Form::textarea('name',$department->description, ['class' => 'form-control', 'placeholder' => 'Eg.yes']) }}
    </div>
        {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}

{!! Form::close() !!}
@endsection
