@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="mt-5 mb-5">Yunalish</h1>

        <a href="#" class="btn btn-primary">Create</a>
        
        <table class="table table-striped table-bordered mt-4">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Faculty_id</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                @foreach($yunalishes  as $yunalish)
                    <tr>
                        <td>{{$yunalish->id}}</td>
                        <td>{{ $yunalish->name }}</td>
                        <td>{{ $yunalish->faculty_id }}</td>
                        <td><a href="#" class="btn btn-danger">Delete</a></td>
                        <td><a href="#" class="btn btn-success">Update</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
