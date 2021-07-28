@extends('layout.app')

@section('content')
    <h1>This is Recruitment Creation</h1>
    {!! Form::open(['action' => '\App\Http\Controllers\RecruitmentController@store', 'method' =>'POST']) !!}

        <div class="form-group">
            {{ Form::label('num_of_positions','Number of Positions') }}
            {{ Form::number('num_of_positions','',['class' => 'form-control', 'placeholder' => 'Eg.2']) }}
        </div>

        <div>
            {{ Form::label('role','Choose Role') }}
            <select name="role" class="form-control">
                <option value=""> Select Role </option>
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}">{{ ucfirst($role->role) }}</option>
                @endforeach
            </select>
        </div>

        <div>
            {{ Form::label('department','Choose Department') }}
            <select name="department" class="form-control">
                <option value=""> Select Department </option>
                @foreach ($departments as $department)
                    <option value="{{ $department->id }}">{{ ucfirst($department->department_name) }}</option>
                    {{-- <option value="{{ $department->'departments'->id }}">{{ ucfirst($department->'departments'->department_name) }}</option> --}}
                @endforeach
            </select>
        </div>

        <div class="form-group">
            {{ Form::label('start_date','Starting Date') }}
            {{ Form::date('start_date','',['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('end_date','Ending Date') }}
            {{ Form::date('end_date','',['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('description','Description') }}
            {{ Form::textarea('description','',['class' => 'form-control']) }}
        </div>

            {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}

    {!! Form::close() !!}
@endsection
