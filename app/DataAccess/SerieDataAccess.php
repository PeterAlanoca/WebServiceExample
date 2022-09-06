<?php

namespace App\DataAccess;

use App\Base\DataAccess\ISerieDataAccess;
use App\Models\Serie;
use App\Models\Result;

class SerieDataAccess implements ISerieDataAccess
{

    function get($id)
    {
        try
        {
            $serie = Serie::where('state', '=', 'A')
                            ->where('id', '=', $id)
                            ->first();   

            if ($serie)
            {
                $serie->trailer_url = ($serie->logo_url) ? env('PATH_STORAGE').$serie->trailer_url : null;
                $serie->trailer_thumbnail_url = ($serie->trailer_thumbnail_url) ? env('PATH_STORAGE').$serie->trailer_thumbnail_url : null;
                $serie->logo_url = ($serie->logo_url) ? env('PATH_STORAGE').$serie->logo_url : null;
                $serie->cover_url = ($serie->cover_url) ? env('PATH_STORAGE').$serie->cover_url : null;
                $serie->cast = 'Elenco: '.$serie->cast;
                return Result::success($serie, 'success');
            }
            else
            {
                return Result::error('No se pudo encontraron serie.');
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
            $seriesResult = Serie::select(
                            'series.id as id',
                            'series.name as name',
                            'series.gender as gender',
                            'series.logo_url as logo_url',
                            'series.cover_url as cover_url',
                            )
                            ->join('seccion_series', 'seccion_series.serie_id', '=', 'series.id')
                            ->where('seccion_series.section_id', '=', $sectionId)
                            ->where('seccion_series.state', '=', 'A')
                            ->where('series.state', '=', 'A')
                            ->get(); 

            $series = $seriesResult->map(function($serie)
            {
                return (object)[
                    'id' => $serie->id,
                    'name' => $serie->name,
                    'gender' => $serie->gender,
                    'logo_url' => ($serie->logo_url) ? env('PATH_STORAGE').$serie->logo_url : null,
                    'cover_url' => env('PATH_STORAGE').$serie->cover_url,
                ];
            });                       
                            
            if ($series)
            {
                return Result::success($series, 'success');
            }
            else
            {
                return Result::error('No se pudo encontraron series registrados.');
            }
        }
        catch(\Exception $ex)
        {
            return Result::exception($ex->getMessage());
        } 
    }

}

