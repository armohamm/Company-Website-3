<?php

class TextFrontpage extends Conn {

    private $textID;
    private $table = "text_frontpage"; 
    
    public function getTextFrontpage(string $type) { // Hakee etusivun tekstit tietokannasta

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
                array_push($contents, utf8_encode($row["text"]));
                array_push($contents, utf8_encode($row["subtext"]));
                return $contents;
            }
        }

    }

    public function editTextFrontpage(string $type, string $text) { // Muokkaa etusivun tekstejä

        $text = utf8_decode($text);

        if ($type == "title") {
            
            $this->textID = 1;

            $sql = 'UPDATE '.$this->table.' SET text = :text WHERE textID = :textID';
            $sql = $this->connect()->prepare($sql);
            $sql->execute(['text'=>$text, 'textID'=>$this->textID]);

            $return = "Uusi sivun otsikko on ". $text;
            return utf8_decode($return);

        }
        elseif ($type == "about") {

            $this->textID = 2;

            $sql = 'UPDATE '.$this->table.' SET subtext = :text WHERE textID = :textID';
            $sql = $this->connect()->prepare($sql);
            $sql->execute(['text'=>$text, 'textID'=>$this->textID]);

            $return = "Uusi keitä olemme teksti on ". $text;
            return utf8_decode($return);
        
        }
    }
}
