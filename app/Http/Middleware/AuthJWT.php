<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\Response;

class AuthJWT
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
        try 
        {
            $user = JWTAuth::parseToken()->authenticate();
            if (!$user) 
            {
                return Response::requestException('No autorizado para hacer solicitudes.', 401);
            }
        } 
        catch(TokenExpiredException $e)
        {
            JWTAuth::setToken(JWTAuth::refresh());
            $user = JWTAuth::authenticate();
            if (!$user) 
            {
                return Response::requestException('No autorizado para hacer solicitudes.', 401);
            }
        }
        catch (JWTException $e) 
        {
            return Response::requestException('No autorizado para hacer solicitudes.', 401);
        }
        return $next($request);
    }
}