<?php

namespace App\Base\BusinessLogic;

use App\Models\Serie;

interface ISerieLogic
{
    function get($id);
    function getBySection($sectionId);
}