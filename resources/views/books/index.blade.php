@extends('layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>All Books</h2>
    <a href="{{ route('books.create') }}" class="btn btn-primary">➕ Add Book</a>
</div>

@if ($books->count())
    <div class="row">
        @foreach ($books as $book)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text">
                            <strong>Author:</strong> {{ $book->author }}<br>
                            <strong>Genre:</strong> {{ $book->genre }}
                        </p>
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-sm btn-outline-warning">✏️ Edit</a>

                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger">🗑 Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@else
    <div class="alert alert-info">No books available. Click "Add Book" to get started.</div>
@endif
@endsection
