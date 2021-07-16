@extends('layout.app')

@section('content')
    <h1>This is Department List</h1>
    @foreach ($departments as $department)
        <div class="card p-3 mt-3 mb-3">
            <a href="/departments/{{$department->id}}"><h3>{{$department->department_name}}</h3></a>
            <a href="/departments/{{$department->id}}"> <small>{{$department->description}}</small></a>
        </div>
        @endforeach
@endsection
