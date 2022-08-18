<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psr\Log\LoggerInterface;

class DatacenterController extends Controller
{
    public function __construct(private LoggerInterface $logger)
    {
    }

    public function all()
    {
        return DB::connection('pgsql')->table('datacenters')->get();
    }
}
