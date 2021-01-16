<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respondent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'sex',
        'kind',
        'other'
    ];

    public function wishes()
    {
        return $this->hasMany('App\Models\Wish');
    }
}
