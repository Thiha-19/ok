@extends('layout.app')

@section('content')
    <h1>This is Department Creation</h1>
    {!! Form::open(['action' => '\App\Http\Controllers\DepartmentController@store', 'method' =>'POST']) !!}

    <div class="form-group">
        {{ Form::label('department_name','Department Name') }}
        {{ Form::text('department_name','',['class' => 'form-control', 'placeholder' => 'Eg.Food']) }}
    </div>

    <div class="form-group">
        {{ Form::label('email','Email') }}
        {{ Form::text('email','',['class' => 'form-control', 'placeholder' => 'Eg.ok@mail.com']) }}
    </div>

    <div class="form-group">
        {{ Form::label('location','Location') }}
        {{ Form::text('location','',['class' => 'form-control', 'placeholder' => 'Eg.City']) }}
    </div>

    <div class="form-group">
        {{ Form::label('description','Description') }}
        {{ Form::textarea('description','', ['class' => 'form-control', 'placeholder' => 'Eg.yes']) }}
    </div>
            {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}

    {!! Form::close() !!}
@endsection
