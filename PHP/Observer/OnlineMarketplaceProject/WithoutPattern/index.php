<?php 

require_once 'OnlineMarketplace.php';
require_once 'User.php';
require_once 'Product.php';
require_once 'Offer.php';

$marketplace = new OnlineMarketplace();
$marketplace->addUser(new User("user1", true, true));
$marketplace->addUser(new User("user2", false, false));
$marketplace->addUser(new User("user3", true, false));
$marketplace->addUser(new User("user4", false, true));

$marketplace->addProduct(new Product("product1", 100));

$marketplace->addOffer(new Offer("offer1"));



