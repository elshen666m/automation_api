<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MachineController extends Controller
{
    public function create(Request $request)
    {
        $res = Http::post('http://188.72.162.97:8080/api/add-machine', [
            'memory' => $request->memory,
            'disk' => $request->disk,
            'cpu' => $request->cpu,
            'datacenter' => $request->datacenter
        ]);
    }

    public function start(Request $request)
    {
        $res = Http::post('http://188.72.162.97:8080/api/start-machine', [
            'whmcs_id' => $request->whmcs_id,
            'state' => 'powerOn'
        ]);
    }
}
