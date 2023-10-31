<?php

namespace Simovative\Learn;

interface CalcInterface
{
    public function getResult() : float;

    public function calculate () : void;
}