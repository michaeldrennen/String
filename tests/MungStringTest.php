<?php

use MichaelDrennen\MungString;
use PHPUnit\Framework\TestCase;

class MungStringTest extends TestCase {

    public function testAndListEnglish() {
        $items  = [
            "One", "Two", "Three",
        ];
        $string = MungString::andListEnglish( $items );
        $this->assertEquals( "One, Two, and Three", $string );
    }


}