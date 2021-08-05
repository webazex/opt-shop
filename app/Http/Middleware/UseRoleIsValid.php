<?php

namespace App\Http\Middleware;

use App\Http\Controllers\LoginController;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UseRoleIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $userRole = Auth::user()->role_id;
        $reqUri = $request->path();
        switch ($userRole){
            case 1:
               if($reqUri === 'admin'){
                   return $next($request);
               }else{
                   return response()->redirectTo('/admin');
               }
                break;
            case 2:
                if($reqUri === 'manager'){
                    return $next($request);
                }else{
                    return redirect()->intended('/manager');
                }
                break;
            case 3:
                if($reqUri === 'dashboard'){
                    return $next($request);
                }else{
                    return redirect()->intended('/dashboard');
                }
                break;
            case 4:
                if($reqUri === 'shop'){
                    return $next($request);
                }else{
                    return redirect()->intended('/shop');
                }
            default:
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect('/');
        }
    }
}
