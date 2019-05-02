<?php

namespace Eddy\gusuarios\Http\controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

   
class ContactFormController extends Controller {

        public function index()
        {
            return view('gusuarios::contact');
        }

}    
