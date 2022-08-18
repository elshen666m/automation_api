<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MachineController extends Controller
{
    public function create(Request $request)
    {
        Log::error($request->all());
    }
}
