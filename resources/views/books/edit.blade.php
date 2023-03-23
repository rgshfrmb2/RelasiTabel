<p>Halaman edit buku</p>
<br>

<form method="POST" action="{{ route('book.update', ['id_buku' =>$book->id]) }}">
    @csrf
    @method('PATCH')

    <div>
        <label>Name</label><br>
        <input type="text" name="name" placeholder=" Name book" value="{{ $book->name }}" required>
    </div>

    <div>
        <label>Page</label><br>
        <input type="text" name="page" placeholder=" Page book"  value="{{ $book->page }}"required>
    </div>

    <div>
        <label>Author</label><br>
        <input type="text" name="author" placeholder=" Author book" value="{{ $book->author }}" required>
    </div>

    <div>
        <label>Published data</label><br>
        <input type="date" name="published_at" placeholder=" Text book" value="{{ $book->published_at }}" required>
    </div>
    <br>
    <div>
        <button type="submit">Update Book</button>
    </div>
</form>
