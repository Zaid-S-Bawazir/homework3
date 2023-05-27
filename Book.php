<?php
class Book {
private $title;
private $author;
private $numberofpage;


public function __construct ($t,$a,$n)
{
    $this -> title = $t;
    $this-> author = $a;
    $this-> numberofpage = $n;
}

public function display(){

echo"\n Title:" . $this-> title;
echo"\n Author:" . $this-> author;
echo"\n number of page:" . $this-> numberofpage;

}





    
}



?>