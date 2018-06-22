<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ApiRepository;
use Illuminate\Support\Facades\Cache;

class ApiController extends Controller
{
    public function index()
    {
        $first_timestamp = Cache::rememberForever('timestamp', function () {
            return time();
        });

        $current_timestamp = time();
        $time_elapsed = $current_timestamp - $first_timestamp / (22 * 32 * 5.5);


        return date('H:i:s', $time_elapsed);
    }
}
