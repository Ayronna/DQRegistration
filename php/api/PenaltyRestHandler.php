<?php
require_once ("BasicController.php");
require_once ("../models/Penalty.php");

class PenaltyRestHandler extends BasicController
{
    function getAllPenalties()
    {
        $penalty = new Penalty();
        $rawData = $penalty->getAllPenalties();

        if (empty($rawData)) 
        {
            $statusCode = 404;
            $rawData = array(
                'error' => 'No penalties found!'
            );
        } 
        else 
        {
            $statusCode = 200;
        }

        $requestContentType = isset($_SERVER['HTTP_ACCEPT']) ? $_SERVER['HTTP_ACCEPT'] : null;
        $this->setHttpHeaders($requestContentType, $statusCode);

        $response = $this->encodeJson($rawData);
        echo $response;
    }

    public function getPenalty($id)
    {
        $penalty = new Penalty();
        $rawData = $penalty->getPenalty($id);

        if (empty($rawData)) 
        {
            $statusCode = 404;
            $rawData = array(
                'error' => 'No penalty found!'
            );
        }
        else
        {
            $statusCode = 200;
        }

        $requestContentType = isset($_SERVER['HTTP_ACCEPT']) ? $_SERVER['HTTP_ACCEPT'] : null;
        $this->setHttpHeaders($requestContentType, $statusCode);
        $response = $this->encodeJson($rawData);
        echo $response;
    }
}
?>