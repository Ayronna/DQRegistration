<?php
require_once ("PenaltyRestHandler.php");

$view = "";
if (isset($_GET["view"]))
    $view = $_GET["view"];

/*
 * controls the RESTful services
 * URL mapping
 */
switch ($view) {

    case "all":
        // to handle REST Url /penalty/list/
        $penaltyRestHandler = new PenaltyRestHandler();
        $penaltyRestHandler->getAllPenalties();
        break;

    case "single":
        // to handle REST Url /penalty/show/<id>/
        $penaltyRestHandler = new PenaltyRestHandler();
        $penaltyRestHandler->getPenalty($_GET["id"]);
        break;

    case "":
        // 404 - not found;
        break;
}
?>