<?php

namespace App\BusinessLogic;

use App\Base\BusinessLogic\IUserLogic;
use App\Base\DataAccess\IUserDataAccess;
use App\Models\Result;

class UserLogic implements IUserLogic
{
    private IUserDataAccess $userDataAccess;

    function __construct(IUserDataAccess $userDataAccess)
    {
        $this->userDataAccess = $userDataAccess;
    }
    
    function auth($credential)
    {
        try
        {
            $userResult = $this->userDataAccess->auth($credential);
            if ($userResult->data) 
            {
                return Result::success($userResult->data, $userResult->message);
            }
            else
            {
                return Result::error($userResult->message);
            }
        }                  
        catch(\Exception $ex)
        {
            return Result::exception($ex->getMessage());
        } 
    }
}
