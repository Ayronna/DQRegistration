<?php
require_once ("SimpleRest.php");

class BasicController extends SimpleRest
{
    public function encodeJson($responseData)
    {
        return json_encode($responseData);
    }
}
?>