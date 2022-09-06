<?php

namespace App\Http\Controllers;

use App\Base\BusinessLogic\ISectionLogic;
use App\Base\Controller\APIController;
use App\Models\Response;
use Illuminate\Http\Request;

class SectionController extends APIController
{
    private ISectionLogic $sectionLogic;
    
    function __construct(ISectionLogic $sectionLogic)
    {
        $this->sectionLogic = $sectionLogic;
    }

    function getAll()
    {
        try 
        {
            $result = $this->sectionLogic->getAll();
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