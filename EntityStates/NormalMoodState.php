<?php
/**
 * Created by PhpStorm.
 * User: paleo
 * Date: 13.08.2019
 * Time: 22:35
 */

namespace App\Contacts\EntityStates;

use App\Contacts\Abstracts\AbstractMood;

class NormalMoodState extends AbstractMood
{
    public $moodName = 'NormalMood';
    public $signalType = 1;

    public function __construct($signal = null)
    {
        parent::__construct($signal);
        $this->name = 'FineMoodState';
    }

    public function getSignal($signal = null)
    {
        // TODO: Implement getSignal() method.
    }

    public function setSignal($signal = null)
    {
        // TODO: Implement setSignal() method.
    }
}