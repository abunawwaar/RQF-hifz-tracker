@extends('layouts.main')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Show Students List</h3>
        </div>

</div>
<div class="row">
    <div class="col-lg-12 margin-tb>">

    <h1>{{$student->title}}</h1>
    <p>{{$student->body}}</p>

    <form action="{{ route('students.destroy', $student)}}" method="post">
        @csrf
        @method('DELETE')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $student->name }}
                </div>
            </div>
        </div>   

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Contact:</strong>
                    {{ $student->contact }}
                </div>
            </div>
        </div> 
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>join:</strong>
                    {{ $student->join }}
                </div>
            </div>
        </div> 

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Created at</strong>
                    {{ $student->created_at }}
                </div>
            </div>
        </div> 

        <a class="btn btn-info" href="{{ url()->previous() }}" >back</a>
        <button class="btn btn-danger" type="submit">Delete</button>
    </form>
  
    <p>
        {{ count($student->trackers) }}
    </p>

</div>
@endsection