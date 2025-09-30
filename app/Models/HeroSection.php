<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'subtitle', 'hero_image', 'button_text', 'button_link',
        'for_use', 'is_active', 'sort_order'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];
}
