<?php

namespace App\Base\BusinessLogic;

use App\Models\Season;

interface ISeasonLogic
{
    function getBySerie($serieId);
}