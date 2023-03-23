<p>Halaman buat buku</p>
<br>

<form method="POST" action="{{ route('book.store') }}">
    @csrf
    <div>
        <label>Name</label><br>
        <input type="text" name="name" placeholder=" Name book" required>
    </div>

    <div>
        <label>Page</label><br>
        <input type="text" name="page" placeholder=" Page book" required>
    </div>

    <div>
        <label>Author</label><br>
        <input type="text" name="author" placeholder=" Author book" required>
    </div>

    <div>
        <label>Published data</label><br>
        <input type="date" name="published_at" placeholder=" Text book" required>
    </div>
    <br>
    <div>
        <button type="submit">Create Book</button>
    </div>
</form>
