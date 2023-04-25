<?php
require_once ("BasicController.php");
require_once ("../models/PenaltyRegistration.php");

class PenaltyRegistrationRestHandler extends BasicController
{
    public static function getAllPenaltyRegistrations()
    {
        $penaltyRegistrations = PenaltyRegistration::getAllPenaltyRegistrations();
        echo self::encodeJson($penaltyRegistrations);
    }

    public static function getPenaltyRegistration($penaltyRegistrationId)
    {
        $rawData = PenaltyRegistration::getPenaltyRegistration($penaltyRegistrationId);
        echo self::encodeJson($rawData);
    }

    public static function addPenaltyRegistration($penaltyRegistrationPostData)
    {
        $penaltyRegistration = PenaltyRegistration::createFromPostData(json_decode($penaltyRegistrationPostData));
        echo self::encodeJson($penaltyRegistration);

    }
}
?>