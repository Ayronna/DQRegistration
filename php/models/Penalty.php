<?php

class Penalty
{
    private $penalties = array(
        1 => "Warning",
        2 => "DQ"
    );

    public function getAllPenalties()
    {
        return $this->penalties;
    }

    public function getPenalty($id)
    {
        $penalty = array(
            $id => ($this->penalties[$id]) ? $this->penalties[$id] : $this->penalties[1]
        );

        return $penalty;
    }
}

?>