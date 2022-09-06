<?php

namespace App\Base\DataAccess;

use App\Models\User;

interface IUserDataAccess
{
    function auth($credential);
}