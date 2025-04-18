<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SnippyController extends Controller
{
    public function snippyv1 (Request $request)
    {
        return view('snippy');
    }
    public function snippyv2 (Request $request)
    {
        return view('snippyv2');
    }
}
