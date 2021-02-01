@extends('layouts.main')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Hifz Trackers Editor</h3>
        </div>

        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('trackers.index') }}"> Back</a>
        </div>
        <div class="card-body">

<form method="post" action="{{route('trackers.update',$tracker)}}">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="exampleInputPassword1">student_id</label>
        <input name="title" type="text" class="form-control" value="{{$tracker->title}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">entry_type</label>
        <input name="title" type="text" class="form-control" value="{{$tracker->title}}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">from_hisbu</label>
        <textarea name="body" class="form-control" rows="3">{{$tracker->body}}</textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">from_rubu</label>
        <textarea name="body" class="form-control" rows="3">{{$tracker->body}}</textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">from_page</label>
        <textarea name="body" class="form-control" rows="3">{{$tracker->body}}</textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">from_ayah</label>
        <textarea name="body" class="form-control" rows="3">{{$tracker->body}}</textarea>
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">to_hisbu</label>
        <textarea name="body" class="form-control" rows="3">{{$tracker->body}}</textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">to_rubu</label>
        <textarea name="body" class="form-control" rows="3">{{$tracker->body}}</textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">to_page</label>
        <textarea name="body" class="form-control" rows="3">{{$tracker->body}}</textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">to_ayah</label>
        <textarea name="body" class="form-control" rows="3">{{$tracker->body}}</textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">date</label>
        <textarea name="body" class="form-control" rows="3">{{$tracker->body}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
@endsection