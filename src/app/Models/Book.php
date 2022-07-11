<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'author_id',
        'name',
        'slug',
        'short_description',
        'description',
        'quantity',
        'price',
        'discount_price',
        'publish_date',
        'publishing_house',
        'avatar'
    ];

    public function bookImages()
    {
        return $this->hasMany(BookImage::class, 'book_id', 'id');
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetails::class, 'order_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public  function author()
    {
        return $this->belongsTo(Author::class, 'author_id', 'id');
    }
}
