<p>ini index</p>


<a href="{{ route('book.create') }}">Create book</a>


<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Page</th>
            <th>Author</th>
            <th>Published at</th>
            <th>Actiom</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($books as $item)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td> <a href="{{ route('book.detail', ['id_buku' => $item->id]) }}">{{ $item->name }}</a></td>
                <td>{{ $item->page }}</td>
                <td>{{ $item->author }}</td>
                <td>{{ $item->published_at }}</td>
                <td>
                    <form action="{{ route('book.destroy', ['id_buku' => $item->id]) }}" method="POST">
                        <a href="{{ route('book.edit', ['id_buku' => $item->id]) }}">Edit</a>
                        @csrf
                        @method('GET')
                        <button type="submit" onClick="return confirm('Go Delete?')">
                            Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
