<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_type', 'setting_key', 'setting_value', 'setting_type',
        'description', 'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];
}
