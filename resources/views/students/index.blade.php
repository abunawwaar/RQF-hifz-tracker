@extends('layouts.main')
@section('content')
<div class="container">
    <div class="card">
        <div class= "d-flex justify-content-between">
        <div class="card-header">
            <h3 class="card-title">Students List</h3>
        </div>
            <div class="row">
                <div class="col-lg-12 margin-tb>">

                    <div class="pull-right">
                    <a class="btn btn-success" href="{{route('students.create')}}">Create</a>
                    </div>
                </div>
            </div>
        </div>
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
@endif

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>contact</th>
                        <th>join</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                    {{-- <td> <a href="{{route('students.show', $student)}}">{{$student->name}}</a></td> --}}
                    <td>{{$student->name}}</td>
                    <td>{{$student->contact}}</td>
                    <td>{{$student->join}}</td>
                    <td>{{$student->created_at}}</td>


                    <td>
                       <!-- Example single danger button -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                                </button>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('students.edit',$student)}}">Edit</a>
                                <a class="dropdown-item" href="{{route('students.show',$student)}}">View</a>
                                        
                                <form action='{{route('students.destroy',$student)}}' method="POST"> 

                                    @method('Delete')
                                @csrf
                                <button class="dropdown-item" type="submit">Delete
                                </button>
                                </form>
                                </div>
                            </div>
                    </td>

                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
