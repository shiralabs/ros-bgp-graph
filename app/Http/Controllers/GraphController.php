<?php

namespace App\Http\Controllers;

use App\Model\Ix;
use App\Model\Router;
use App\Util;
use Illuminate\Http\Request;

class GraphController extends Controller
{
    public function route(Request $request, $id)
    {
        $route = Router::find($id);
        if (empty($route)) {
            abort(404);
        }
        $data = Util::getGraphsData($route, 'route');
        // var_dump($data);exit;
        return view('graph.index', [
            'data'       => $data,
            'point_name' => $route->name,
        ]);
    }
    public function ix(Request $request, $id)
    {
        $ix = Ix::find($id);
        if (empty($ix)) {
            abort(404);
        }
        $data = Util::getGraphsData($ix, 'ix');
        return view('graph.index', [
            'data'       => $data,
            'point_name' => $ix->name,
        ]);
    }

    public function img(Request $request, $type, $id, $name)
    {
        $allow_name = [
            'daily',
            'weekly',
            'monthly',
            'yearly',
        ];
        if (!in_array($name, $allow_name)) {
            abort(404);
        }

        if ($type == "route") {
            $point = Router::find($id);
        } elseif ($type = "ix") {
            $point = Ix::find($id);
        }

        if (empty($point)) {
            abort(404);
        }

        $url = "http://{$point->host}:{$point->port}/graphs/iface/{$point->iface}/{$name}.gif";
        $gif = file_get_contents($url);

        return response()->streamDownload(function () use ($gif) {
            echo $gif;
        }, "{$name}.gif");

    }
}
