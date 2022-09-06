<?php

namespace App\DataAccess;

use App\Base\DataAccess\IUserDataAccess;
use App\Models\User;
use App\Models\Result;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserDataAccess implements IUserDataAccess
{

    function auth($credential)
    {
        try
        {
            //dd(Hash::make('123456'));
            $credential = (object) $credential;

            $user = User::where('state', '=', 'A')
                                    ->where('email', '=', $credential->email)
                                    ->first();   
  
            if ($user)
            {
                if (Hash::check($credential->password, $user->password))
                {
                    $token = JWTAuth::fromUser($user);
                    if ($token) 
                    {
                        $data = (object) array(
                            'token' => $token,
                            'user' => $user
                        );
                        return Result::success($data, 'success');
                    } 
                    else 
                    {
                        return Result::error('No se pudo validar el usuario.');
                    }
                }
                else
                {
                    return Result::error('La contraseña es incorrecta, verifique nuevamente.');
                }
            }
            else
            {
                return Result::error('El correo electrónico no es válido, verifique nuevamente.');
            }
        }
        catch(\Exception $ex)
        {
            return Result::exception($ex->getMessage());
        } 
    }
}