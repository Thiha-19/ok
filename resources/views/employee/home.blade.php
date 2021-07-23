@extends('layout.app')

@section('content')
    <h1>This is Employee List</h1>
    @foreach ($employees as $employee)
        <div class="card p-3 mt-3 mb-3">
            <a href="/employees/{{$employee->id}}"><h3>{{$employee->name}}</h3></a>
            <a href="/employees/{{$employees->id}}"> <small>From {{$employee->address}}</small></a>
        </div>
        @endforeach
@endsection
