<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wish extends Model
{
    use HasFactory;

    public function respondent()
    {
        return $this->belongsTo('App\Models\Respondent');
    }
}
