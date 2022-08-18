<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MachineController extends Controller
{
    public function create(Request $request)
    {
        $res = Http::post('http://188.72.162.97:8080/api/add-machine', $request->post());
    }
}
