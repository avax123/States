<?php

namespace App\Contacts;

use Symfony\Component\Process\Exception\RuntimeException;

class FactoryMood
{
    public $signal;
    private $moodState;

    function __construct($moodState)
    {
        $this->moodState = $moodState;
    }

    public function setSignal($signal = null)
    {
        if ($signal == 1 || $signal == 0) {
            $this->signal = $signal;
            $this->moodState->setSignalType($signal);
        } else {
            throw new RuntimeException('Expected 1 or 0 into variable signalType from object ' . get_called_class() . ' class');
        }

    }

    public function transitionMoodState($moodState)
    {
        $newMoodState = new $moodState;
        if ($newMoodState->signalType != $this->signal) {
            if ($newMoodState->signalType == 1) {
                throw new RuntimeException('Cannot go to state HellMoodState when signal == 1');
            } elseif ($newMoodState->signalType == 0) {
                throw new RuntimeException('Cannot go to state FineMoodState when signal == 0');
            }
        } else {
            $this->moodState = $newMoodState;
            echo $this->moodState->moodName;
        }
    }
}