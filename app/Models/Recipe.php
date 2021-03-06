<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'userID',
        'recipeName',
        'ingredients',
        'instructions',
        'image',
        'tag'
    ];

    public function scopeTag($query, $tag, $userID)
    {
        return $query->where([['tag',$tag],['userID',$userID]]);
    }
}
