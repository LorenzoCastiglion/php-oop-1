<?php   

class Movie{

public $title;

public $genre = array();

public $rating;

public $minutes;

public $lenght;


function __construct(String $_title, $_genre , Int $_rating, Int $_minutes ){

        $this->title = $_title;
        $this->genre = $_genre;
        $this->rating = $_rating;
        $this->minutes = $_minutes;

        $this->setLenght();

}


public function setLenght(){

    if($this->minutes > 120){
        $this->lenght = "long";
    } else {
        $this->lenght = "short";
    }
}







}


?>