@extends('layout.app')

@section('content')
    <h1>This is Candidate List</h1>
    @foreach ($candidates as $candidate)
        <div class="card p-3 mt-3 mb-3">
            <a href="/candidates/{{$candidate->id}}"><h3>{{$candidate->candidate_name}}</h3></a>
            <a href="/candidates/{{$candidate->id}}"> <small>From {{$candidate->prior_exp}}</small></a>
        </div>
        @endforeach
@endsection
