@extends('layout')

@section('content')
<h2 class="mb-4">➕ Add a New Book</h2>

<form action="{{ route('books.store') }}" method="POST" class="card p-4 shadow-sm">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">📘 Title</label>
        <input type="text" name="title" class="form-control" id="title" required>
    </div>

    <div class="mb-3">
        <label for="author" class="form-label">✍️ Author</label>
        <input type="text" name="author" class="form-control" id="author" required>
    </div>

    <div class="mb-3">
        <label for="genre" class="form-label">🏷️ Genre</label>
        <input type="text" name="genre" class="form-control" id="genre" required>
    </div>

    <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-success">💾 Save Book</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">🔙 Back</a>
    </div>
</form>
@endsection
