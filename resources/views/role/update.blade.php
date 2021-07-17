@extends('layout.app')

@section('content')
    <h1>This is Role Update</h1>
    {!! Form::open(['action' => ['\App\Http\Controllers\RoleController@update', $role->id], 'method' =>'POST']) !!}

    <div class="form-group">
        {{ Form::label('role','Role Name') }}
        {{ Form::text('role',$role->role,['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('approx_salary','Approxiamte Salary') }}
        {{ Form::text('approx_salary',$role->approx_salary,['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('description','Description') }}
        {{ Form::textarea('description',$role->description, ['class' => 'form-control']) }}
    </div>

        {{ Form::hidden('_method', 'PUT') }}
        {{ Form::submit('Update', ['class' => 'btn btn-primary']) }}

{!! Form::close() !!}
@endsection



