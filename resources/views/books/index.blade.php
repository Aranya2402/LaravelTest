@extends('layout')

@section('content')
<h1>Books</h1>
<a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Add Book</a>

<table class="table table-bordered">
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Genre</th>
        <th>Actions</th>
    </tr>
    @foreach ($books as $book)
    <tr>
        <td>{{ $book->title }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->genre }}</td>
        <td>
            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
