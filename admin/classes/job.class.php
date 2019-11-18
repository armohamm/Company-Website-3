<?php

class Job extends Conn {

    private $jobID = 1;
    private $table = "job"; 
    
    public function getJob() {
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

    public function getStatus() {
        $sql = $this->connect()->query('SELECT * FROM '.$this->table.' WHERE jobID='.$this->jobID);
        while ($row = $sql->fetch()) {
            $bool = $row['showOnFrontPage'];
        }
        
        return $bool;
    }

    public function changeStatus() {
        
    }

    public function changeLink() {
        
    }
}
