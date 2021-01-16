<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Respondent;
use App\Models\Wish;
use App\Http\Controllers\modules\SplitClass;

class respondentController extends Controller
{
    public function index()
    {
        $respondents = Respondent::all();
        return view('respondent.v_index', compact('respondents'));
    }

    public function show(Request $request)
    {
        $targetRespondent = Respondent::find($request->user_id);
        $ageClass = SplitClass::checkAge($targetRespondent->age);
        $sexClass = SplitClass::checkSex($targetRespondent->sex);
        $wishClassArray = SplitClass::checkWish($targetRespondent->wishes()->get());
        return view('respondent.v_show', compact('targetRespondent', 'ageClass', 'sexClass', 'wishClassArray'));
    }

    public function create()
    {
        return view('respondent.v_create');
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            Respondent::$validate_rule,
            [
                "name.required" => "名前が未入力です",
                "age.required" => "年齢が未入力です",
                "sex.required" => "性別が未入力です",
                "status.required" => "希望物件が未入力です",
                "other.required" => "その他ご要望が未入力です"
            ]
        );

        $respondent = Respondent::saveRespondent($request);
        Wish::saveWish($request->status, $respondent->id);

        return view('respondent.v_responseMessage');
    }
}
