<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Обработка попыток аутентификации.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(){
        if(Auth::check()){
            $roleId = Auth::user()->role_id;
            switch ($roleId){
                case 1:
                    return response()->redirectTo('/admin');
                    break;
                case 2:
                    return redirect()->intended('/manager');
                    break;
                case 3:
                    return redirect()->intended('/dashboard');
                    break;
                case 4:
                    return redirect()->intended('/shop');
                    break;
                default:
                    return view('home');
            }
        }else{
            return view('home');
        }
    }

    public function auth(Request $request){
        $credentials = $request->only('login', 'password');
        $rememberValue = $request->only('rememberMe');
        if($rememberValue === "on"){
            $remember = true;
        } else {
            $remember = false;
        }
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            $roleId = Auth::user()->role_id;

            switch ($roleId){
                case 1:
                    return response()->redirectTo('/admin');
                    break;
                case 2:
                    return redirect()->intended('/manager');
                    break;
                case 3:
                    return redirect()->intended('/dashboard');
                    break;
                case 4:
                    return redirect()->intended('/shop');
                    break;
                default:
                    return redirect('/');
            }
        }
        return back()->withErrors([
            'login' => 'Ошибка авторизации',
        ]);
    }
    /**
     * Выход пользователя из приложения.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
