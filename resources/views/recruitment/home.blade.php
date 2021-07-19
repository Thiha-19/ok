@extends('layout.app')

@section('content')
    <h1>This is Recruitments List</h1>
    @foreach ($recruitments as $recruitment)
        <div class="card p-3 mt-3 mb-3">
            <a href="/recruitments/{{$recruitment->id}}"><h3>{{$recruitment->num_of_positions}}</h3></a>
            <a href="/recruitments/{{$recruitment->id}}"> <small>{{$recruitment->description}}</small></a>
            <a href="/recruitments/{{$recruitment->id}}"> <small>{{$recruitment->start_date}}</small></a>
            <a href="/recruitments/{{$recruitment->id}}"> <small>{{$recruitment->roles['role']}}</small></a>
        </div>
        @endforeach


@endsection



