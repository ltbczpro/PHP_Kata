<?php

namespace Tests;

use Ltbczpro\RomanNumber\RomanNumber;
use PHPUnit\Framework\TestCase;

require __DIR__.'/../vendor/autoload.php';

class RomanNumberTest extends TestCase
{

    public function testConvert()
    {
        $amount = RomanNumber::convert(5);

        $this->assertTrue(is_string($amount));
        $this->assertRegExp("/[IVXLDCM]/", $amount);
        //doit revoir le package (nom etc)
        //doit vérifier que convert() ne sort QUE des chaines avec IVXLDCM
    }

}