<?php

namespace Simovative\Kaboom;

interface CalcInterface
{
    public function getResult() : float;

    public function calculate () : void;
}