<?php
namespace App\Contacts\StateInterface;


interface StateInterface
{
    public function __construct($signal = null);

    public function setSignalType($signal);
}