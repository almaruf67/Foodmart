<?php

namespace App\Models;

use App\Models\User;
use App\Models\category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class product extends Model
{
    use HasFactory;

    protected $fillable = [

        'Title',
        'Poster',
        'Description',
        'Price',
        "Short_Description",
        "Old_Price"

    ];

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function favoritedBy()
    {
        return $this->belongsToMany(User::class, 'fav_products', 'product_id', 'user_id');
    }
}
