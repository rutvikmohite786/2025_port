<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Portfolio extends Model
{
    use HasFactory;
    public function techport(): HasOne
    {
        return $this->hasOne(PortTech::class,'id','port_tech_id');
    }
    public function images(): HasMany
    {
        return $this->hasMany(PortfolioImage::class);
    }
    public function details(): HasOne
    {
        return $this->hasOne(PortfolioDetail::class,'portfolio_id','id');
    }
}
