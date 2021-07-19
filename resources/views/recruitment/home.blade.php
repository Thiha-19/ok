@extends('layout.app')

@section('content')
    <h1>This is Recruitments List</h1>
    @foreach ($recruitments as $recruitment)
        <div class="card p-3 mt-3 mb-3">
            <a href="/recruitments/{{$recruitment->id}}"><h3>Number of hiring position: {{$recruitment->num_of_positions}}</h3></a>
            <a href="/recruitments/{{$recruitment->id}}"> <small>Description: {{$recruitment->description}}</small></a>
            <a href="/recruitments/{{$recruitment->id}}"> <small>Starting Date: {{$recruitment->start_date}}</small></a>
            <a href="/recruitments/{{$recruitment->id}}"> <small>Ending Date: {{$recruitment->end_date}}</small></a>
            {{-- <a href="/recruitments/{{$recruitment->id}}"> <small>Role ID: {{$recruitment->role_id($role->role)}}</small></a> --}}
        </div>
        @endforeach


@endsection



