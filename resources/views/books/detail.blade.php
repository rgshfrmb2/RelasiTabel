<p> Detail {{ $book->name }}</p>

<p>data transaksi</p>
<table>
    <tr>
        <td>Username</td>
        <td>No.Telp</td>
    </tr>
    @foreach ($book->book_transactions as $item)
        <tr>
            <td>{{ $item->username }}</td>
            <td>{{ $item->phone }}</td>
        </tr>
    @endforeach
</table>
