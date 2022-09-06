<?php

namespace App\Base\BusinessLogic;

use App\Models\User;

interface IUserLogic
{
    function auth($credential);
}