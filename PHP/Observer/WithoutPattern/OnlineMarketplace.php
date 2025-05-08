<?php
class OnlineMarketplace
{

     /** @var User[] */
    private $users = [];

    /** @var Product[] */
    private $products = [];

    /** @var Offer[] */
    private $offers = [];

    public function __construct()
    {
        $this->users = [];
        $this->products = [];
        $this->offers = [];
    }
    
    public function addUser($user)
    {
        $this->users[] = $user;
    }
    
    public function addProduct($product)
    {
        $this->products[] = $product;
        $this->notifyUsersAboutProduct($product);
    }

    public function addOffer($offer){
        $this->offers[] = $offer;
        $this->notifyUsersAboutOffer($offer);
    }

    public function notifyUsersAboutProduct(Product $product)
    {
        foreach ($this->users as $user) {
            if($user->getIsSubscribedToProducts()) {
                $user->notifyUser($product);
            }
        }
    }

    public function notifyUsersAboutOffer(Offer $offer)
    {
        foreach ($this->users as $user) {
            if($user->getIsSubscribedToOffers()) {
                $user->notifyUser($offer);
            }
        }
    }
}

