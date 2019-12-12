<?php

namespace App\Http\Controllers;

//use http\Env\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(Request $request)
    {
        if ($request->has('page')) {
            $from = $request->get('page');
            if ($from != 1) {
                $from *= 20;
            } else {
                $from = 1;
            }
        } else {
            $from = 1;
        }

        if ($request->has('sort')) {
            $sort = $request->get('sort');
        } else {
            $sort = 'Наименование';
        }

        if ($request->has('sortdir')) {
            $sortdir = $request->get('sortdir');
        } else {
            $sortdir = 'asc';
        }

        $count = 20;
        $uri = "https://demo.tesonero.com/TEST/hs/test/gettestdata?count=$count&from=$from&sort=$sort&sortdir=$sortdir";
        $response = \Httpful\Request::get($uri)
            ->authenticateWith('test', 'test')
            ->send();

        $pagination = new \Illuminate\Pagination\LengthAwarePaginator(null, 980, 20, $request->get('page'), ['query' => $request->all()]);

        if($request->ajax()) {
            $view = 'content';
        } else {
            $view = 'index';
        }
        return view($view, ['citys' => $response->body->data, 'pagination' => $pagination]);
    }
}
