<?php
namespace PHP\Observer\OnlineMarketplaceProject\WithPattern;
class Offer{
    private $description = "";

    public function __construct($description){
        $this->description = $description;
    }

    public function getDescription(){
        return $this->description;
    }
}