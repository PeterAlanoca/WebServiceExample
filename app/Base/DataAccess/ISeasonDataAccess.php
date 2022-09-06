<?php

namespace App\Base\DataAccess;

use App\Models\Season;

interface ISeasonDataAccess
{
    function getBySerie($serieId);
}