<?php

class Job extends Conn {

    private $jobID = 1;
    private $table = "hss_job"; 
    
    public function getJob() { // Hakee työpaikan
        $sql = $this->connect()->query('SELECT * FROM '.$this->table.' WHERE jobID='.$this->jobID);
        while ($row = $sql->fetch()) {
            $link = $row['jobLink'];
            $bool = $row['showOnFrontPage'];
        }
        if ($bool == 1) {
            return utf8_encode($link);
        }
        else {
            return 0;
        }
    }

    public function getStatus() { // Hakee tietokannasta onko työpaikkahaku auki
        $sql = $this->connect()->query('SELECT * FROM '.$this->table.' WHERE jobID='.$this->jobID);
        while ($row = $sql->fetch()) {
            $bool = $row['showOnFrontPage'];
        }
        
        return $bool;
    }

    public function getLink() { // Hakee tietokannasta työpaikkahaun linkin
        $sql = $this->connect()->query('SELECT * FROM '.$this->table.' WHERE jobID='.$this->jobID);
        while ($row = $sql->fetch()) {
            $link = $row['jobLink'];
        }
        
        return $link;
    }

    public function changeStatus(int $bool) { // Vaihtaa työpaikkahaun näkyvyyden sivulla
        $sql = 'UPDATE '.$this->table.' SET showOnFrontPage = :bool WHERE jobID = :jobID';
        $sql = $this->connect()->prepare($sql);
        $sql->execute(['bool'=>$bool, 'jobID'=>1]);

        return "Vaihdettu";
    }

    public function changeLink(string $link) { // Vaihda linkki työhaku osoitteeseen
        $sql = 'UPDATE '.$this->table.' SET jobLink = :link WHERE jobID = :jobID';
        $sql = $this->connect()->prepare($sql);
        $sql->execute(['link'=>$link, 'jobID'=>1]);

        return "Vaihdettu";
    }
}
