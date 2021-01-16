<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wish extends Model
{
    use HasFactory;

    public static function saveWish($status, $respondent_id)
    {
        foreach ($status as $i) {
            $wish = new Wish();
            $wish->status = $i;
            $wish->respondent_id = $respondent_id;
            $wish->save();
        }
    }

    public function respondent()
    {
        return $this->belongsTo('App\Models\Respondent');
    }
}
