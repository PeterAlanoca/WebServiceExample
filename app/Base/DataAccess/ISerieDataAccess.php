<?php

namespace App\Base\DataAccess;

use App\Models\Serie;

interface ISerieDataAccess
{
    function get($id);
    function getBySection($sectionId);
}