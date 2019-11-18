<?php

class TextFrontpage extends Conn {

    private $textID;
    private $table = "text_frontpage"; 
    
    public function getTextFrontpage(string $type) {

        if ($type == "title") {
            
            $this->textID = 1;
            
            $sql = $this->connect()->query('SELECT * FROM '.$this->table.' WHERE textID='.$this->textID);
            while ($row = $sql->fetch()) {
                $text = $row['text'];
                return utf8_encode($text);
            }
        }
        elseif ($type == "about") {

            $this->textID = 2;

            $contents = array();
            
            $sql = $this->connect()->query('SELECT * FROM '.$this->table.' WHERE textID='.$this->textID);
            while ($row = $sql->fetch()) {
                array_push($contents, $row["text"]);
                array_push($contents, $row["subtext"]);
                return utf8_encode($contents);
            }
        }

    }
}
