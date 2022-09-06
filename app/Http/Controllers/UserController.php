<?php

namespace App\Http\Controllers;

use App\Base\BusinessLogic\IUserLogic;
use App\Base\Controller\APIController;
use App\Models\User;
use App\Models\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends APIController
{
    private IUserLogic $userLogic;
    
    function __construct(IUserLogic $userLogic)
    {
        $this->userLogic = $userLogic;
    }

    function auth(Request $request)
    {
        try 
        {
            $validator = Validator::make($request->all(), [
                'email' => 'required',
                'password' => 'required',
            ]);
     
            if (!$validator->fails()) 
            {
                $credential = $request->only('email', 'password');
                $result = $this->userLogic->auth($credential);
                if ($result->data) 
                {
                    return Response::success($result->data, $result->message);
                } 
                else
                {
                    return Response::error($result->message);
                }
            } 
            else
            {
                return Response::unprocessableEntity();
            }
        }
        catch(\Exception $ex)
        {
            return Response::serverException($ex);
        }
    }

}