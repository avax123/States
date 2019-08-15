<?php

use App\Contacts\Abstracts\AbstractMood;
use App\Contacts\EntityStates\FineMoodState;
use App\Contacts\FactoryMood;

class Entity
{
    private $mood;

    public function something()
    {
        $this->mood = new FactoryMood(new FineMoodState());
        $this->mood->setSignal(1);
        $this->mood->setSignal(0);
        $this->mood->setSignal(0);
        $this->mood->setSignal(1);
        $this->mood->setSignal(1);
        echo AbstractMood::getBadJuniorJob();
        echo AbstractMood::getGoodJuniorJob();
    }

}
