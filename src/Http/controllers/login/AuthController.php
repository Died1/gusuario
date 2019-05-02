<?php

namespace Eddy\gusuarios\Http\controllers\login;

use Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;


class AuthController extends Controller
{


    public function showLogin()
    {
        //verificamos si hay sesion activa
        if(Auth::check())
        {
            //si tenemos sesion activa mostramos la pagina de inicio
            return Redirect::to('/');

        }
        //si no hay sesion activa mostramos el formulario
        return view('gusuarios::login.login');
    }

    public function postLogin()
    {
        //obtenemos los datos del formulario
        $data = [
            'username' => Input::get('username'),
            'password' => Input::get('password')
        ];

        //Verificamos los datos
        if(Auth::attempt($data,Input::get('remember')))//como segundo parametro pasamos el checkock para saber si queremos recordar la contraseña
        {            

            return Redirect::intended('/');
        }

        //si los datos no son los correcctos volvemos al login y mostramos un error

        return Redirect::back()->with('error_message','Invalid data')->withInput();
    }

    public function logOut()
    {
        //Cerramos la Sesion
        Auth::logout();
        //volvemos al login y mostramos un mensaje indicando que se a cerrado la sesion
        return Redirect::to('login')->with('error_message','logged out correctly');
    }
}
