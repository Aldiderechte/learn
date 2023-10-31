<?php

namespace Monolog;


interface CalcInterface
{
    public function getResult() : float;

    public function calculate () : void;
}