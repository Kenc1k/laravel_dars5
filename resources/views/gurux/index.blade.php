@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="mt-5 mb-5">Gurux</h1>

        <a href="#" class="btn btn-primary">Create</a>
        
        <table class="table table-striped table-bordered mt-4">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Yunalish id</th>
                    <th>Name</th>
                    <th>Kurs id</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                @foreach($guruxes  as $gurux)
                    <tr>
                        <td>{{$gurux->id}}</td>
                        <td>{{$gurux->yunalish_id}}</td>
                        <td>{{ $gurux->name }}</td>
                        <td>{{$gurux->kurs_id}}</td>
                        <td><a href="#" class="btn btn-danger">Delete</a></td>
                        <td><a href="#" class="btn btn-success">Update</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
