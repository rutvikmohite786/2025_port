<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'description', 'color', 'is_active', 'sort_order'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
