<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class PortfolioDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'portfolio_id',
        'details',
        'link_1',
        'link_2',
        'duration',
    ];
    public function detail(): HasOne
    {
        return $this->hasOne(Portfolio::class,'id','portfolio_id');
    }
}
