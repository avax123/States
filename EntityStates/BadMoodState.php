<?php
/**
 * Created by PhpStorm.
 * User: paleo
 * Date: 13.08.2019
 * Time: 22:29
 */

namespace App\Contacts\EntityStates;

use App\Contacts\Abstracts\AbstractMood;

class BadMoodState extends AbstractMood
{
    public $moodName = 'BadMood';
    public $signalType = 1;

    public function __construct($signal = null)
    {
        parent::__construct($signal);
        $this->name = 'BadMood';
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