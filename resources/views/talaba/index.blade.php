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
                    <th>Gurux_id</th>
                    <th>Phone</th>
                    <th>Manzil_id</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                @foreach($talabas  as $talaba)
                    <tr>
                        <td>{{$talaba->id}}</td>
                        <td>{{ $talaba->name }}</td>
                        <td>{{ $talaba->gurux_id }}</td>
                        <td>{{ $talaba->phone }}</td>
                        <td>{{ $talaba->manzil_id }}</td>
                        <td><a href="#" class="btn btn-danger">Delete</a></td>
                        <td><a href="#" class="btn btn-success">Update</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
