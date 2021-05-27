<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    use HasFactory;
    protected $softDelete = true;
    protected $fillable = [
        'name',
        'img',
        'descriptions',
        'born',
        'height',
    ];
    protected $casts = [
        'born'   => 'date:M d, Y',
        'height' => 'double',
    ];
}
