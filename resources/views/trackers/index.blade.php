@extends('layouts.main')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Hifz Trackers</h3>
        </div>
        <div class="row">
            <div class="col-lg-12 margin-tb>">
        
                <div class="pull-right">
                <a class="btn btn-success" href="{{route('trackers.create')}}"> Create </a>
                </div>
            </div>
        </div>

        <div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">student_id</th>
            <th scope="col">gareeba_from_hisbu</th>
            <th scope="col">gareeba_from_rubu</th>
            <th scope="col">gareeba_from_page</th>
            <th scope="col">gareeba_from_ayah</th>
            <th scope="col">gareeba_to_hisbu</th>
            <th scope="col">gareeba_to_rubu</th>
            <th scope="col">gareeba_to_page</th>
            <th scope="col">gareeba_to_ayah</th>
            <th scope="col">baeedha_from_hisbu</th>
            <th scope="col">baeedha_from_rubu</th>
            <th scope="col">baeedha_to_hisbu</th>
            <th scope="col">baeedha_to_rubu</th>
            <th scope="col">furusat</th>
            <th scope="col">jadheedh_from_hisbu</th>
            <th scope="col">jadheedh_from_rubu</th>
            <th scope="col">jadheedh_from_page</th>
            <th scope="col">jadheedh_from_ayah</th>
            <th scope="col">jadheedh_to_hisbu</th>
            <th scope="col">jadheedh_to_rubu</th>
            <th scope="col">jadheedh_to_page</th>
            <th scope="col">jadheedh_to_ayah</th>
            <th scope="col">date</th>
        </tr>
        </thead>
        <tbody>

        </div>
    </div>
</div>
    @foreach($trackers as $tracker)
        <tr>
            <th scope="row"></th>
            <td>{{$tracker->student_id}}</td>
            <td>{{$tracker->gareeba_from_hisbu}}</td>
            <td>{{$tracker->gareeba_from_rubu}}</td>
            <td>{{$tracker->gareeba_from_page}}</td>
            <td>{{$tracker->gareeba_from_ayah}}</td>
            <td>{{$tracker->gareeba_to_hisbu}}</td>
            <td>{{$tracker->gareeba_to_rubu}}</td>
            <td>{{$tracker->gareeba_to_page}}</td>
            <td>{{$tracker->gareeba_to_ayah}}</td>
            <td>{{$tracker->baeedha_from_hisbu}}</td>
            <td>{{$tracker->baeedha_from_rubu}}</td>
            <td>{{$tracker->baeedha_to_hisbu}}</td>
            <td>{{$tracker->baeedha_to_rubu}}</td>
            <td>{{$tracker->furusat}}</td>
            <td>{{$tracker->jadheedh_from_hisbu}}</td>
            <td>{{$tracker->jadheedh_from_rubu}}</td>
            <td>{{$tracker->jadheedh_from_page}}</td>
            <td>{{$tracker->jadheedh_from_ayah}}</td>
            <td>{{$tracker->jadheedh_to_hisbu}}</td>
            <td>{{$tracker->jadheedh_to_rubu}}</td>
            <td>{{$tracker->jadheedh_to_page}}</td>
            <td>{{$tracker->jadheedh_to_ayah}}</td>
            <td>{{$tracker->created_at}}</td>

            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{route('trackers.edit',$tracker)}}" type="button" class="btn btn-secondary">edit</a>
                    <a href="{{route('trackers.show',$tracker)}}" class="btn btn-secondary">view</a>
                </div>
            </td>
        </tr>
     @endforeach
        </tbody>
    </table>
@endsection