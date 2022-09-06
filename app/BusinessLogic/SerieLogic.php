<?php

namespace App\BusinessLogic;

use App\Base\BusinessLogic\ISerieLogic;
use App\Base\BusinessLogic\ISeasonLogic;
use App\Base\DataAccess\ISerieDataAccess;
use App\Models\Result;

class SerieLogic implements ISerieLogic
{
    private ISerieDataAccess $serieDataAccess;
    private ISeasonLogic $seasonLogic;

    function __construct(ISerieDataAccess $serieDataAccess, ISeasonLogic $seasonLogic)
    {
        $this->serieDataAccess = $serieDataAccess;
        $this->seasonLogic = $seasonLogic;
    }

    function get($id)
    {
        try
        {
            $serieResult = $this->serieDataAccess->get($id);
            if ($serieResult->data) 
            {
                $serie = $serieResult->data;
                $seasonsResult = $this->seasonLogic->getBySerie($serie->id);
                if ($seasonsResult->data) 
                {
                    $seasons = $seasonsResult->data;
                    $serie->seasons_count = ($seasons->count() > 1) ? $seasons->count().' temporadas' : '1 temporada';
                    $serie->seasons = $seasons;
                    $data = (object) array (
                        'serie' => $serie
                    );
                    return Result::success($data, $seasonsResult->message);
                }
                else
                {
                    return Result::error($seasonsResult->message);
                }
            }
            else
            {
                return Result::error($serieResult->message);
            }
        }                  
        catch(\Exception $ex)
        {
            return Result::exception($ex->getMessage());
        } 
    }
    
    function getBySection($sectionId)
    {
        try
        {
            $seriesResult = $this->serieDataAccess->getBySection($sectionId);
            if ($seriesResult->data) 
            {
                return Result::success($seriesResult->data, $seriesResult->message);
            }
            else
            {
                return Result::error($seriesResult->message);
            }
        }                  
        catch(\Exception $ex)
        {
            return Result::exception($ex->getMessage());
        } 
    }
}
