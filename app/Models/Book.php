<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    // nama table
    protected $table = 'books';

    // table yg ada di database
    protected $fillable = [
        'name',
        'page',
        'author',
        'published_at'
    ];

    //has many transaksi
    public function book_transactions()
    {
        return $this->hasMany(BookTransaction::class);
    }
    
}
