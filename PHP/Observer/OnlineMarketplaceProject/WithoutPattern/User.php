<?php
class User{
    private $name = "";
    private $isSubscribedToProducts;
    private $isSubscribedToOffers;

    public function __construct($name, $isSubscribedToProducts = false, $isSubscribedToOffers = false){
        $this->name = $name;
        $this->isSubscribedToProducts = $isSubscribedToProducts;
        $this->isSubscribedToOffers = $isSubscribedToOffers;
    }

    public function getName(){
        return $this->name;
    }
    public function getIsSubscribedToProducts(){
        return $this->isSubscribedToProducts;
    }

    public function getIsSubscribedToOffers(){
        return $this->isSubscribedToOffers;
    }


    public function notifyUser(Product|Offer $item){
        if ($item instanceof Product && $this->isSubscribedToProducts) {
            echo "{$this->name} notified about product: {$item->getName()}\n";
        }

        if ($item instanceof Offer && $this->isSubscribedToOffers) {
            echo "{$this->name} notified about offer: {$item->getDescription()}\n";
        }
    }


}