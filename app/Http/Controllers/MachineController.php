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
            'datacenter' => $request->datacenter,
            'whmcs_id' => $request->whmcs_id
        ]);
    }

    public function start(Request $request)
    {
        $res = Http::post('http://188.72.162.97:8080/api/change-machine-state', [
            'whmcs_id' => $request->whmcs_id,
            'state' => 'powerOn'
        ]);
    }

    public function stop(Request $request)
    {
        $res = Http::post('http://188.72.162.97:8080/api/change-machine-state', [
            'whmcs_id' => $request->whmcs_id,
            'state' => 'powerOff'
        ]);
    }

    public function reset(Request $request)
    {
        $res = Http::post('http://188.72.162.97:8080/api/change-machine-state', [
            'whmcs_id' => $request->whmcs_id,
            'state' => 'reset'
        ]);
    }
}
