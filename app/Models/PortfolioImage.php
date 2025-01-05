<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PortfolioImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'portfolio_id ',
        'image'
    ];
    public function portfolio(): HasOne
    {
        return $this->hasOne(Portfolio::class,'id','portfolio_id');
    }
}
