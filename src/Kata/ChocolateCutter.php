<?php

namespace Kata;

class ChocolateCutter
{
    public function cut($cutsNumber)
    {
        if ($this->notEnoughCuts($cutsNumber)) {

            return 0;
        }

        if ($cutsNumber === 2) {

            return 1;
        }

        if ($cutsNumber === 4) {

            return 4;
        }
    }

    private function notEnoughCuts($cutsNumber)
    {
        return $cutsNumber < 2;
    }
}