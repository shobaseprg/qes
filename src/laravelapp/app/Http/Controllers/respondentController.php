<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class respondentController extends Controller
{
    public function index()
    {
        return view('respondent.v_index');
    }
}
