<?php
class Money
{
    protected $amount;
    
    function equals($object) {
        return $this->amount == $object->amount;       
    }
}
?>