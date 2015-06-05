<?php
require_once('Money.php');

class Dollar extends Money
{    
    function __construct($val) {
        $this->amount = $val;
    }
    
    function times($multiplier) {
        // Return a new Dollar with the correct amount
        return new Dollar($this->amount * $multiplier);
    }
    
}

class Franc extends Money
{
     //This really shouldn't be public, but it's consistent with Beck's example
    protected $amount;
    
    function __construct($val) {
        $this->amount = $val;
    }
    
    function times($multiplier) {
        // Return a new Dollar with the correct amount
        return new Franc($this->amount * $multiplier);
    }
}

?>
