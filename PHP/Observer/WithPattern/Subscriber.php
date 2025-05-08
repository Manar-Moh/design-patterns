<?php
namespace PHP\Observer\WithPattern;
interface Subscriber{

    public function notify($message);

}