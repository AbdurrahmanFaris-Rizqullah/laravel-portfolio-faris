<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul', 'image', 'klasifikasi', 'desc',
    ];

    protected $primaryKey = 'portfolio_id';
}
