<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respondent extends Model
{
    use HasFactory;

    public static $validate_rule = [
        "name" => "required",
        "age" => "required",
        "sex" => "required",
        "status" => "required",
        "other" => "required",
    ];

    public static function saveRespondent($request)
    {
        $respondent = new Respondent();
        $respondent->name =  $request->name;
        $respondent->age = $request->age;
        $respondent->sex = $request->sex;
        $respondent->other = $request->other;
        $respondent->save();
        return $respondent;
    }

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
