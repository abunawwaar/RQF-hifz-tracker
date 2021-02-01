@extends('layouts.main')

@section('content')
    <h1>{{$tracker->title}}</h1>
    <p>{{$tracker->body}}</p>

    <form action="{{ route('trackers.destroy', $tracker)}}" method="post">
        @csrf
        @method('DELETE')
        <a class="btn btn-info" href="{{ url()->previous() }}" >Back</a>
        <button class="btn btn-danger" type="submit">Delete</button>
    </form>
@endsection