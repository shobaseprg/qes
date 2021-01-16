<?php

namespace App\Http\Controllers\modules;

use Illuminate\Http\Request;
use App\Models\Respondent;

class SplitClass
{
  public static function checkAge($age)
  {
    switch ($age) {
      case 1:
        return "20歳未満";
      case 2:
        return "20歳〜39歳";
      case 3:
        return "40歳〜59歳";
      case 4:
        return "60歳以上";
    }
  }

  public static function checkSex($sex)
  {
    switch ($sex) {
      case 1:
        return "男性";
      case 2:
        return "女性";
    }
  }
}
