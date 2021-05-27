<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cast;

class Movie extends Model
{
    use HasFactory;
    protected $softDelete = true;
    protected $fillable = [
        'genre',
        'title',
        'descriptions',
        'release_date',
        'director',
        'production_company',
        'cast_ids',
    ];

    protected $casts = [
        'cast_ids' => 'array',
        'release_date' => 'date:M d, Y'
    ];

    protected $appends = [
        'casts',
    ];

    public function getCastsAttribute(){
        return Cast::whereIn('id',$this->cast_ids)->get();
    }
}
