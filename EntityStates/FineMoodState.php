<?php
/**
 * Created by PhpStorm.
 * User: paleo
 * Date: 13.08.2019
 * Time: 22:29
 */

namespace App\Contacts\EntityStates;

use App\Contacts\Abstracts\AbstractMood;

class FineMoodState extends AbstractMood
{
    public $moodName = 'FineMood';
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