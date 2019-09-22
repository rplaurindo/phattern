<?php

require 'autoload.php';

use Phattern\AbstractSingleton;

class Mammal extends AbstractSingleton {
    
    function __construct() {
        
    }
    
    function suckles($mammalName) {
        return "mammalName suckling...";
    }
    
}

$mammal = Mammal::getInstance();
echo $mammal->suckles('Felipinga');
