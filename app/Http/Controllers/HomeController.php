<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Request::ajax()) {
            return [
                'title' => 'Главная',
                'content' => view('home.ajax.index')->render(),
            ];
        } else {
            return view('home.index', ['title' => 'Главная']);
        }
    }
}
