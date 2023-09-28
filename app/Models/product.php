<?php

namespace App\Models;

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
}


