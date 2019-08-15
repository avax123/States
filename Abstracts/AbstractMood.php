<?php

namespace App\Contacts\Abstracts;
use App\Contacts\StateInterface\StateInterface;

class AbstractMood implements StateInterface
{

    private static $instance = 0;
    private static $goodJuniorJobCount = 0;
    private static $badJuniorJobCount = 0;
    public $signalType = null;


    private $moodState;

    public function __construct($signal = null)
    {
        self::$instance++;
    }

    public function setSignalType($signal)
    {
        if ($signal == 1) {
            self::$goodJuniorJobCount++;
        } elseif ($signal == 0) {
            self::$badJuniorJobCount++;
        } else {
            throw new RuntimeException('Expected 1 or 0 into variable signalType from object ' . get_called_class() . ' class');
        }
    }

    public static function getInstance()
    {
        return self::$instance;
    }

    public static function getGoodJuniorJob()
    {
        return self::$goodJuniorJobCount;
    }

    public static function getBadJuniorJob()
    {
        return self::$badJuniorJobCount;
    }
}