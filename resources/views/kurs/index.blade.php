@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="mt-5 mb-5">Kurs</h1>

        <a href="#" class="btn btn-primary">Create</a>
        
        <table class="table table-striped table-bordered mt-4">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kurses  as $kurs)
                    <tr>
                        <td>{{$kurs->id}}</td>
                        <td>{{ $kurs->name }}</td>
                        <td><a href="#" class="btn btn-danger">Delete</a></td>
                        <td><a href="#" class="btn btn-success">Update</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
