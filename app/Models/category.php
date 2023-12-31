<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'slug',
        'is_active'
    ];

    public function subcategory(){

        return $this->hasMany(subcategory::class);
    }
}
