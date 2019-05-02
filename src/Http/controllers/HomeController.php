<?php

namespace Eddy\gusuarios\http\controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        return view('gusuarios::dashboard');
    }
}
