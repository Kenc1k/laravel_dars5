@extends('layouts.main')

@section('content')
    <div class="container">
        <h2>Add New Faculty</h2>

        <!-- Display success message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Faculty creation form -->
        <form action="{{ route('faculties.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Faculty Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group mt-3">
                <label for="university_id">University</label>
                <select name="university_id" id="university_id" class="form-control" required>
                    <option value="">Select University</option>
                    @foreach ($universities as $university)
                        <option value="{{ $university->id }}">{{ $university->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-4">Add Faculty</button>
        </form>
    </div>
@endsection
