@extends('layout.app')

@section('content')
    <h1>This is Employee Update</h1>
    {!! Form::open(['action' => ['\App\Http\Controllers\EmployeeController@update', $employee->id], 'method' =>'POST']) !!}

    <div class="form-group">
        {{ Form::label('name','Employee Name') }}
        {{ Form::text('name',$employee->name,['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('email','Email Address') }}
        {{ Form::text('email',$employee->email,['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('password','Password') }}
        {{ Form::text('password',$employee->password,['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('address','Full Address') }}
        {{ Form::textarea('address',$employee->address,['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('ename','Emergency Contact Name') }}
        {{ Form::text('ename',$employee->ename,['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('eaddress','Emergency Address') }}
        {{ Form::textarea('eaddress',$employee->eaddress,['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('info','Additional Information') }}
        {{ Form::textarea('info',$employee->info,['class' => 'form-control']) }}
    </div>

        {{ Form::hidden('_method', 'PUT') }}
        {{ Form::submit('Update', ['class' => 'btn btn-primary']) }}

{!! Form::close() !!}
@endsection



