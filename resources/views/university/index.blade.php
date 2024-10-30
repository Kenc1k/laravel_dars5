@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="mt-5 mb-5">University</h1>

        <a href="#" class="btn btn-primary">Create</a>
        
        <table class="table table-striped table-bordered mt-4">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                @foreach($universities as $university)
                    <tr>
                        <td>{{ $university->id }}</td>
                        <td>{{ $university->name }}</td>
                        <td>{{ $university->location }}</td>
                        <td><a href="#" class="btn btn-danger">Delete</a></td>
                        <td><a href="#" class="btn btn-success">Update</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
