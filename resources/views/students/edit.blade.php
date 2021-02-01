@extends('layouts.main')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Student Editor</h3>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <div class="card-body">

<form action="{{route('students.update',$student->id)}}" method="post">
    @method('PUT')
    @csrf

    <div class="form-group">
        <label for="">name</label>
        <input type="text" name="name" class="form-control" value="{{$student->name}}" placeholder="Name">
    </div>

    <div class="form-group">
        <label for="">contact</label>
        <input type="number" name="contact" class="form-control" value="{{$student->contact}}" placeholder="{{$student->contact}}">
    </div>

    <div class="form-group">
        <label for="">join</label>
        <input type="date" name="join" class="form-control" value="{{$student->join}}" placeholder="{{$student->join}">
    </div>

         <button type="submit" class="btn btn-primary"> Submit </button>

</form>

        </div>
    </div>
</div>
@endsection