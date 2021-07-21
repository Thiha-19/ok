@extends('layout.app')

@section('content')
    <h1>This is Recruitment Update</h1>
    {!! Form::open(['action' => ['\App\Http\Controllers\RecruitmentController@update', $recruitment->id], 'method' =>'POST']) !!}

    <div class="form-group">
        {{ Form::label('num_of_positions','Number of Positions') }}
        {{ Form::text('num_of_positions',$recruitment->num_of_positions,['class' => 'form-control']) }}
    </div>

    <div>
        {{ Form::label('role','Choose Role') }}
        <select name="role" class="form-control">
            <option value=""> Select Role </option>
            @foreach ($roles as $role)
                <option value="{{ $role->id }}"{{ $role->id == $recruitment->id ? 'selected' : ''}}>{{ ucfirst($role->role) }}</option>
            @endforeach
        </select>
    </div>

    <div>
        {{ Form::label('department','Choose Department') }}
        <select name="department" class="form-control">
            <option value=""> Select Department </option>
            @foreach ($departments as $department)
                <option value="{{ $department->id }}"{{ $department->id == $recruitment->id ? 'selected' : ''}}>{{ ucfirst($department->department_name) }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        {{ Form::label('start_date','Starting Date') }}
        {{ Form::text('start_date',$recruitment->start_date,['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('end_date','Ending Date') }}
        {{ Form::text('end_date',$recruitment->end_date,['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('description','Description') }}
        {{ Form::textarea('description',$recruitment->description, ['class' => 'form-control']) }}
    </div>
        {{ Form::hidden('_method', 'PUT') }}
        {{ Form::submit('Update', ['class' => 'btn btn-primary']) }}

{!! Form::close() !!}
@endsection
