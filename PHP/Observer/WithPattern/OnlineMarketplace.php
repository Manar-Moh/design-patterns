<?php

namespace PHP\Observer\WithPattern;

class OnlineMarketplace
{

     /** @var array<EventType, Subscriber[]> */
    private $subscribers = [];

    /** @var Product[] */
    private $products = [];

    /** @var Offer[] */
    private $offers = [];

    public function __construct()
    {
        $this->initSubscribers();
    }

    public function initSubscribers(): void
    {
        foreach (EventType::getAll() as $eventType) {
            $this->subscribers[$eventType->value] = [];
        }
    }

    public function subscribe(EventType $eventType, Subscriber $subscriber): void
    {
       $this->subscribers[$eventType->value][] = $subscriber;
    }

    public function unSubscribe(EventType $eventType, Subscriber $subscriber): void
    {
        array_splice($this->subscribers[$eventType->value], array_search($subscriber, $this->subscribers[$eventType->value]));
    }

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
        $this->notifySubscribers(EventType::NEW_PRODUCT, "New product added: " . $product->getName());
    }

    public function addOffer(Offer $offer): void
    {
        $this->offers[] = $offer;
        $this->notifySubscribers(EventType::NEW_OFFER, "New offer added: " . $offer->getDescription());
    }

    public function addJobOpening(string $jobOpening): void
    {
        $this->notifySubscribers(EventType::JOB_OPENING, "New job opening: " . $jobOpening);
    }

    public function notifySubscribers(EventType $eventType, string $message): void
    {
       foreach ($this->subscribers[$eventType->value] as $subscriber) {
            $subscriber->notify($message);
        }
    }
}

