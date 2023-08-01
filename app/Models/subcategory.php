<?php

namespace App\Models;

use App\Models\category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class subcategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [

        'categorie_id',
        'name',
        'slug',
        'is_active'
    ];


    public function category_rel()
    {

        return $this->belongsTo(category::class);
    }


}
