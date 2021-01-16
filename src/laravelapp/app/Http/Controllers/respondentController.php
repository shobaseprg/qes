<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Respondent;
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
}
