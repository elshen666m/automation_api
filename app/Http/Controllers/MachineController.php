<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MachineController extends Controller
{
    public function create(Request $request)
    {
        Http::post('http://127.0.0.1:8080/api/add-machine', $request->post());
    }
}
