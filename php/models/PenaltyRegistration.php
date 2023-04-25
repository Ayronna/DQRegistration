<?php
require_once ("../data/DataManager.php");
require_once ("../enums/TournamentFormat.php");
require_once ("../enums/Infraction.php");
require_once ("../enums/Penalty.php");

class PenaltyRegistration
{
    public string $penaltyId;
    public DateTime $timestamp;
    public TournamentFormat $format;
    public string $round;
    public string $table;
    public string $playerName;
    public Infraction $infraction;
    public Penalty $penalty;
    public string $description;
    public string $judge;

    public static function getAllPenaltyRegistrations()
    {
        $dataManager = self::getDataManager();
        return $dataManager->readPenalties();
    }

    public static function getPenaltyRegistration($penaltyRegistrationId)
    {
        $penaltyRegistrations = self::getAllPenaltyRegistrations();
        
        foreach($penaltyRegistrations->penaltyRegistrations as $penaltyRegistration)
        {
            if($penaltyRegistration->penaltyId === $penaltyRegistrationId)
            {
                return $penaltyRegistration;
            }
        }
        return;
    }

    public static function createFromPostData($postData)
    {
        $newPenaltyRegistration = new PenaltyRegistration;
        //$newPenaltyRegistration->penaltyId = $postData->penaltyId; // TODO: Genereren op basis van bestaande data
        $newPenaltyRegistration->playerName = $postData->playerName;

        // TODO: Alle velden vullen

        // TODO: Opslaan
        return $newPenaltyRegistration;
    }

    private static function getDataManager()
    {
        return new DataManager();
    }
}

?>