<?php

require_once ("PenaltyRegistrationRestHandler.php");

$view = "";
if (isset($_GET["view"]))
    $view = $_GET["view"];

/*
 * controls the RESTful services
 * URL mapping
 */
switch ($view) {

    case "all":
        $penaltyRestHandler = new PenaltyRegistrationRestHandler();
        PenaltyRegistrationRestHandler::getAllPenaltyRegistrations();
        break;

    case "single":
        PenaltyRegistrationRestHandler::getPenaltyRegistration($_GET["id"]);
        break;

    case "add":
        PenaltyRegistrationRestHandler::addPenaltyRegistration(file_get_contents('php://input'));
        break;
}
?>