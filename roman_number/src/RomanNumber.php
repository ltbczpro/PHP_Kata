<?php

namespace Ltbczpro\RomanNumber;

class RomanNumber
{
    public function convert(int $int): string
    {
        $romanNumber = "";

        if ($int >= 1 && $int <= 3) {
            for ($i=0; $i < $int; $i++) { 
                $romanNumber .= "I";
            }
        }

        if ($int == 4) {
            $romanNumber = "IV";
        }

        if ($int == 5) {
            $romanNumber = "V";
        }

        if ($int >= 6 && $int <= 8) {
            $romanNumber = "V";
            for ($i=5; $i < $int; $i++) { 
                $romanNumber .= "I";
            }
        }

        if ($int == 9) {
            $romanNumber = "IX";
        }

        /*if ($int >= 10 && $int <= 30) {
            $modulo = $int%10;
            if ($modulo == 0) {
                for ($i=0; $i < $modulo ; $i++) { 
                    $romanNumber .= "X";
                }
            }
        }*/

        return $romanNumber;
    }
}
