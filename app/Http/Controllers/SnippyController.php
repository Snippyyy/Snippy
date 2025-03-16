<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SnippyController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('snippy');
    }
}
