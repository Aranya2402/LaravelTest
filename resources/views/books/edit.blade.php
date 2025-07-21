@extends('layout')

@section('content')
<h2 class="mb-4">✏️ Edit Book</h2>

<form action="{{ route('books.update', $book->id) }}" method="POST" class="card p-4 shadow-sm">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">📘 Title</label>
        <input type="text" name="title" value="{{ $book->title }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">✍️ Author</label>
        <input type="text" name="author" value="{{ $book->author }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">🏷️ Genre</label>
        <input type="text" name="genre" value="{{ $book->genre }}" class="form-control" required>
    </div>

    <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-primary">💾 Update Book</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">🔙 Back</a>
    </div>
</form>
@endsection
