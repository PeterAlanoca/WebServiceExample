<?php

namespace App\DataAccess;

use App\Base\DataAccess\ISectionDataAccess;
use App\Models\Section;
use App\Models\Result;

class SectionDataAccess implements ISectionDataAccess
{

    function getAll()
    {
        try
        {
            $sections = Section::where('state', '=', 'A')
                                ->get();
                                        
            if ($sections)
            {
                return Result::success($sections, 'success');
            }
            else
            {
                return Result::error('No se pudo encontraron secciones registrados.');
            }
        }
        catch(\Exception $ex)
        {
            return Result::exception($ex->getMessage());
        } 
    }
}