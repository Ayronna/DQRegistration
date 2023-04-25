<?php

require_once ("../data/DataManager.php");

class Penalty
{
    public function getAllPenalties()
    {
        return $this->getDataManager()->readPenalties();
    }

    public function getPenalty($id)
    {
        $penalties = $this->getAllPenalties();
        
        foreach($penalties->penalties as $penalty)
        {
            if($penalty->penaltyId === $id)
            {
                return $penalty;
            }
        }
        return;
    }

    private function getDataManager()
    {
        return new DataManager();
    }
}

?>