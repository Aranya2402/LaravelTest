@extends('layout')

@section('content')
<h2>Add New Book</h2>

<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Author</label>
        <input type="text" name="author" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Genre</label>
        <input type="text" name="genre" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Add Book</button>
    <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
