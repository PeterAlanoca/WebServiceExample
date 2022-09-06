<?php

namespace App\BusinessLogic;

use App\Base\BusinessLogic\ISectionLogic;
use App\Base\DataAccess\ISectionDataAccess;
use App\Base\BusinessLogic\ISerieLogic;
use App\Models\Result;

class SectionLogic implements ISectionLogic
{
    private ISectionDataAccess $sectionDataAccess;
    private ISerieLogic $serieLogic;

    function __construct(ISectionDataAccess $sectionDataAccess, ISerieLogic $serieLogic)
    {
        $this->sectionDataAccess = $sectionDataAccess;
        $this->serieLogic = $serieLogic;
    }
    
    function getAll()
    {
        try
        {
            $sectionsResult = $this->sectionDataAccess->getAll();
            if ($sectionsResult->data) 
            {
                $sections = $sectionsResult->data;
                $sections->each(function ($section) 
                {
                    $seriesResult = $this->serieLogic->getBySection($section->id);
                    if ($seriesResult->data) 
                    {
                        $series = $seriesResult->data;
                        $section->series = $series;
                    }
                });
                $cover = $sections[0]->series[rand(4, 7)];
                $data = array(
                    'cover' => $cover,
                    'sections' => $sections
                );
                return Result::success($data, $sectionsResult->message);
            }
            else
            {
                return Result::error($sectionsResult->message);
            }
        }                  
        catch(\Exception $ex)
        {
            return Result::exception($ex->getMessage());
        } 
    }
}
