<?php

namespace App\Models;

use App\Models\product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class category extends Model
{
    use HasFactory;
    protected $fillable = [

        'name',
        'status',
    ];

    public function isActive()
    {
        return $this->status === 1;
    }
    
    public function products()
    {
        return $this->hasMany(product::class);
    }
}
