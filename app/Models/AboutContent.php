<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_type',
        'title',
        'content',
        'button_text',
        'button_link',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];
}
