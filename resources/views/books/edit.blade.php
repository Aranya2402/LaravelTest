@extends('layout')

@section('content')
<h2>Edit Book</h2>

<form action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" value="{{ $book->title }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Author</label>
        <input type="text" name="author" value="{{ $book->author }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Genre</label>
        <input type="text" name="genre" value="{{ $book->genre }}" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Update Book</button>
    <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
