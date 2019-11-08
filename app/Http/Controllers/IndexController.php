<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index(Request $request)
    {
        $asn = [
            'topology' => "/topology.png",
            'aut-num'  => "AS6939",
            'as-name'  => 'Hurricane Electric LLC',
            'website'  => "https://he.net",
            'as-set'   => "AS-HURRICANE",
            'noc'      => 'hostmaster@he.net',
        ];

        return view("index", ['asn' => $asn]);
    }
}
