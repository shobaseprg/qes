<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Respondent;


class respondentController extends Controller
{
    public function index()
    {
        $respondents = Respondent::all();
        return view('respondent.v_index', compact('respondents'));
    }
}
