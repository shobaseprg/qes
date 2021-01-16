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

  public static function checkWish($wishes)
  {
    $wishClassArray = [];
    foreach ($wishes as $wish) {
      switch ($wish->status) {
        case 1:
          array_push($wishClassArray, "新築一戸建て");
          break;
        case 2:
          array_push($wishClassArray, "中古一戸建て");
          break;
        case 3:
          array_push($wishClassArray, "マンション");
          break;
        case 4:
          array_push($wishClassArray, "土地");
          break;
      }
    }
    return $wishClassArray;
  }
}
