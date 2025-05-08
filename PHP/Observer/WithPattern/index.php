<?php
require_once  '../../../vendor/autoload.php';


use PHP\Observer\WithPattern\Customer;
use PHP\Observer\WithPattern\EventType;
use PHP\Observer\WithPattern\JobFinder;
use PHP\Observer\WithPattern\OnlineMarketplace;
use PHP\Observer\WithPattern\Product;
use PHP\Observer\WithPattern\Offer;

$marketplace = new OnlineMarketplace();

$user1 = new Customer("user1");
$user2 = new Customer("user2");
$user3 = new Customer("user3");
$user4 = new Customer("user4");

$user5 = new JobFinder("JobFinder1");

$marketplace->subscribe(EventType::NEW_PRODUCT, $user1);
$marketplace->subscribe(EventType::NEW_OFFER, $user1);

$marketplace->subscribe(EventType::NEW_PRODUCT, $user3);
$marketplace->subscribe(EventType::NEW_OFFER, $user4);

$marketplace->subscribe(EventType::JOB_OPENING , $user5);




$marketplace->addProduct(new Product("prod1", 100));

$marketplace->addOffer(new Offer("off 1"));

$marketplace->addJobOpening("job opening 1");





