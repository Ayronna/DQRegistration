<?php

class DataManager 
{
    private $dataPath =  "/data/penaltydata.json";

    public function readPenalties()
    {
        $file = $this->openDataFile();
        $penaltiesContent = fread($file, filesize($_SERVER['DOCUMENT_ROOT'].$this->dataPath));
        fclose($file);

        $penalties = json_decode($penaltiesContent);
        return $penalties;
    }

    private function openDataFile()
    {
        if(!file_exists($_SERVER['DOCUMENT_ROOT'].$this->dataPath))
        {
            error_log("Creating file");
            $createFile = fopen($_SERVER['DOCUMENT_ROOT'].$this->dataPath, "w");
            fwrite($createFile, "{}");
            fclose($createFile);
        }
        return fopen($_SERVER['DOCUMENT_ROOT'].$this->dataPath, "r");
    }
}

?>