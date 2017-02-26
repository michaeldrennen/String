<?php
namespace MichaelDrennen;

class MungString{

    public static function zeroFill($number, $length){
        $sPrintfString = '%0' . (int)$length . 's';
        return sprintf($sPrintfString, $number);
    }
}