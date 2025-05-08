<?php

namespace PHP\Observer\WithPattern;

class JobFinder implements  Subscriber{

    private $name = "";

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function notify($message)
    {
        echo $this->name . ": " . "Got a new job opening: " . $message . "\n";
    }
}