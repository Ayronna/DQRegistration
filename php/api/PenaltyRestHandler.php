<?php
require_once ("BasicController.php");
require_once ("../models/Penalty.php");

class PenaltyRestHandler extends BasicController
{
    function getAllPenalties()
    {
        $penalty = new Penalty();
        $rawData = $penalty->getAllPenalties();

        $response = $this->encodeJson($rawData);
        echo $response;
    }

    public function getPenalty($id)
    {
        $penalty = new Penalty();
        $rawData = $penalty->getPenalty($id);

        $response = $this->encodeJson($rawData);
        echo $response;
    }
}
?>