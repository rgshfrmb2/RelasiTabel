<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookTransaction extends Model
{
    use HasFactory;
    // nama table
    protected $table = 'book_transactions';

    // table yg ada di database
    protected $fillable = [
        'book_id',
        'username',
        'phone',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
