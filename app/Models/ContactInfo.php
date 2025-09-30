<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact_type', 'label', 'value', 'icon', 'is_active', 'sort_order'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];
}
