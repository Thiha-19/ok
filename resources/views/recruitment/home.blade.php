@extends('layout.app')

@section('content')
    <h1>This is Role List</h1>
    @foreach ($roles as $role)
        <div class="card p-3 mt-3 mb-3">
            <a href="/roles/{{$role->id}}"><h3>{{$role->role}}</h3></a>
            <a href="/roles/{{$role->id}}"> <small>From {{$role->description}}</small></a>
        </div>
        @endforeach

        @foreach ($roles as $role)
        <div class="card p-3 mt-3 mb-3">
            <a href="/roles/{{$role->id}}"><h3>{{$role->role}}</h3></a>
            <a href="/roles/{{$role->id}}"> <small>From {{$role->description}}</small></a>
        </div>
        @endforeach
@endsection


