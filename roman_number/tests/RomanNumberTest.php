<?php

namespace Tests;

use Ltbczpro\RomanNumber\RomanNumber;
use PHPUnit\Framework\TestCase;

require __DIR__.'/../vendor/autoload.php';

class RomanNumberTest extends TestCase
{
    /**
     * @dataProvider convertDataProvider
     */
    public function testConvert($arabic, $roman)
    {
        $amount = RomanNumber::convert($arabic);

        $romanNumber = ['I', 'V', 'X', 'D', 'L', 'C', 'M'];

        $this->assertTrue(is_string($amount));

        for ($i = 0; $i < strlen($amount); $i++) { 
            $this->assertTrue(in_array($amount[$i], $romanNumber), "Character denied");
        }

        $this->assertEquals($roman, $amount);
    }

    public function convertDataProvider()
    {
        return [
            "1 translates to I" => ["arabic" => 1, "roman" => "I"],
            "2 translates to I" => ["arabic" => 2, "roman" => "II"],
            "3 translates to I" => ["arabic" => 3, "roman" => "III"],
            "4 translates to I" => ["arabic" => 4, "roman" => "IV"],
            "5 translates to I" => ["arabic" => 5, "roman" => "V"],
            "6 translates to I" => ["arabic" => 6, "roman" => "VI"],
            "7 translates to I" => ["arabic" => 7, "roman" => "VII"],
            "8 translates to I" => ["arabic" => 8, "roman" => "VIII"],
            "9 translates to I" => ["arabic" => 9, "roman" => "IX"],
            "10 translates to X" => ["arabic" => 10, "roman" => "X"],
            "20 translates to XX" => ["arabic" => 20, "roman" => "XX"],
            "30 translates to XXX" => ["arabic" => 30, "roman" => "XXX"],
        ];
    }
}