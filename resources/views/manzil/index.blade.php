@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="mt-5 mb-5">Manzil</h1>

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
                @foreach($manzils  as $manzil)
                    <tr>
                        <td>{{$manzil->id}}</td>
                        <td>{{ $manzil->name }}</td>
                        <td><a href="#" class="btn btn-danger">Delete</a></td>
                        <td><a href="#" class="btn btn-success">Update</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
