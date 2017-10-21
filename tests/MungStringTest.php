<?php

use MichaelDrennen\MungString;
use PHPUnit\Framework\TestCase;

class MungStringTest extends TestCase {

    public function testZeroFill() {
        $number           = 123;
        $zeroFilledNumber = MungString::zeroFill( $number, 5 );
        $this->assertEquals( "00123", $zeroFilledNumber );
    }

    public function testAndListEnglish() {
        $items  = [
            "One", "Two", "Three",
        ];
        $string = MungString::andListEnglish( $items );
        $this->assertEquals( "One, Two, and Three", $string );
    }

    public function testAndListEnglishWithoutArray() {
        $this->expectException( Exception::class );
        $items = "notAnArray";
        MungString::andListEnglish( $items );
    }

    public function testAndListEnglishWithNoItems() {
        $items  = [];
        $string = MungString::andListEnglish( $items );
        $this->assertEquals( "", $string );
    }

    public function testAndListEnglishWithOneItem() {
        $items  = [ "One" ];
        $string = MungString::andListEnglish( $items );
        $this->assertEquals( "One", $string );
    }

    public function testAndListEnglishWithTwoItems() {
        $items  = [ "One", "Two" ];
        $string = MungString::andListEnglish( $items );
        $this->assertEquals( "One and Two", $string );
    }


}