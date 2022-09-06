<?php

namespace App\BusinessLogic;

use App\Base\BusinessLogic\ISeasonLogic;
use App\Base\DataAccess\ISeasonDataAccess;
use App\Models\Result;

class SeasonLogic implements ISeasonLogic
{
    private ISeasonDataAccess $seasonDataAccess;

    function __construct(ISeasonDataAccess $seasonDataAccess)
    {
        $this->seasonDataAccess = $seasonDataAccess;
    }
    
    function getBySerie($serieId)
    {
        try
        {
            $seasonsResult = $this->seasonDataAccess->getBySerie($serieId);
            if ($seasonsResult->data) 
            {
                return Result::success($seasonsResult->data, $seasonsResult->message);
            }
            else
            {
                return Result::error($seasonsResult->message);
            }
        }                  
        catch(\Exception $ex)
        {
            return Result::exception($ex->getMessage());
        } 
    }
}
