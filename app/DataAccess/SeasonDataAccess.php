<?php

namespace App\DataAccess;

use App\Base\DataAccess\ISeasonDataAccess;
use App\Models\Season;
use App\Models\Result;

class SeasonDataAccess implements ISeasonDataAccess
{

    function getBySerie($serieId)
    {
        try
        {

            $seasonsResult = Season::select(
                                'seasons.id as season_id',
                                'seasons.name as season_name',
                                'episodes.id as episode_id',
                                'episodes.season_id as episode_season_id',
                                'episodes.name as episode_name',
                                'episodes.thumbnail_url as episode_thumbnail_url',
                                'episodes.video_url as episode_video_url',
                                'episodes.description as episode_description',
                                'episodes.duration as episode_duration',
                                )
                                ->join('episodes', 'episodes.season_id', '=', 'seasons.id')
                                ->where('seasons.serie_id', '=', $serieId)
                                ->where('seasons.state', '=', 'A')
                                ->where('episodes.state', '=', 'A')
                                ->get();              

            $seasons = $seasonsResult->map(function($season)
            {
                return (object) [
                    'id' => $season->season_id,
                    'name' => $season->season_name,
                ];
            })->unique()->values();    

            $episodes = $seasonsResult->map(function($episode)
            {
                return (object) [
                    'id' => $episode->episode_id,
                    'season_id' => $episode->episode_season_id,
                    'name' => $episode->episode_name,
                    'thumbnail_url' => ($episode->episode_thumbnail_url) ? env('PATH_STORAGE').$episode->episode_thumbnail_url : null,
                    'video_url' => ($episode->episode_video_url) ? env('PATH_STORAGE').$episode->episode_video_url : null,
                    'description' => $episode->episode_description,
                    'duration' => $episode->episode_duration,
                ];
            }); 

            $seasons->each(function ($season) use ($episodes) 
            {
                $episodesResult = $episodes->where('season_id', '=', $season->id)->values();
               
                $episodes = $episodesResult->map(function($episode)
                {
                    return (object) [
                        'id' => $episode->id,
                        'name' => $episode->name,
                        'thumbnail_url' => $episode->thumbnail_url,
                        'video_url' => $episode->video_url,
                        'description' => $episode->description,
                        'duration' => $episode->duration,
                    ];
                });

                $season->episodes = $episodes; 
            });
           
            if ($seasons->count() > 0)
            {
                return Result::success($seasons, 'success');
            }
            else
            {
                return Result::error('No se pudo encontraron temporadas registradas.');
            }
        }
        catch(\Exception $ex)
        {
            return Result::exception($ex->getMessage());
        } 
    }
}