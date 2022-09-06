<?php

namespace App\Http\Controllers;

use App\Base\BusinessLogic\ISerieLogic;
use App\Base\Controller\APIController;
use App\Models\Response;
use Illuminate\Http\Request;

class SerieController extends APIController
{
    private ISerieLogic $serieLogic;
    
    function __construct(ISerieLogic $serieLogic)
    {
        $this->serieLogic = $serieLogic;
    }

    function get(Request $request)
    {
        try 
        {
            $result = $this->serieLogic->get($request->id);
            if ($result->data) 
            {
                return Response::success($result->data, $result->message);
            } 
            else
            {
                return Response::error($result->message);
            }               
        }
        catch(\Exception $ex)
        {
            return Response::serverException($ex);
        }
    }
}