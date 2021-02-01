@extends('layouts.main')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Students Editor</h3>
        </div>
        <div class="card-body">

<form method="post" action="{{route('students.store')}}">
    @method('POST')
    @csrf
    <div class="form-group">
        <label for="">name</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="">contact</label>
        <input type="text" name="contact" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="">join</label>
        <input type="date" name="join" class="form-control" required>
    </div>
    <a class="btn btn-info" href="{{ url()->previous() }}" >back</a>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
</div>
</div>
@endsection