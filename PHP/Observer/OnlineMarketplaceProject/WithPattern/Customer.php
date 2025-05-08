<?php

namespace PHP\Observer\OnlineMarketplaceProject\WithPattern;

class Customer implements Subscriber {
    private $name = "";

    public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function notify($message){
        echo $this->name . " received notification: " . $message . "\n";
    }


}