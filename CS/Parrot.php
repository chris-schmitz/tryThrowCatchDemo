<?php namespace CS;

class Parrot {

    public $vocabulary = array();
    
    public function __construct(){

    }

    public function speak(){
        
        if (empty($this->vocabulary)){
            throw new \Exception ("You haven't taught the parrot any words!");
        }

        foreach($this->vocabulary as $word){
            echo "$word \n";
        }
        echo "Now give me a cracker!\n";
    }

    public function learn($word){

        if (in_array($word, $this->vocabulary)){
            throw new \Exception ("The parrot already knows the word $word");
        }

        $this->vocabulary[] = $word;
    }
}
