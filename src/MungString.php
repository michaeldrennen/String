<?php

namespace MichaelDrennen;

class MungString {

    /**
     * @param $number
     * @param $length
     *
     * @return string
     */
    public static function zeroFill( $number, $length ) {
        $sPrintfString = '%0' . (int)$length . 's';

        return sprintf( $sPrintfString, $number );
    }

    /**
     * Given an array of items, this method will return an English representation of that list ready to be used in a
     * sentence.
     *
     * @param array $items
     *
     * @return mixed|string
     * @throws \Exception
     */
    public static function andListEnglish( $items = [] ) {
        if ( false === is_array( $items ) ):
            throw new \Exception( "You must pass an array into andListEnglish()." );
        endif;

        if ( 0 == count( $items ) ):
            return '';
        endif;

        if ( 1 == count( $items ) ):
            return array_shift( $items );
        endif;

        if ( 2 == count( $items ) ):
            return array_shift( $items ) . " and " . array_shift( $items );
        endif;

        $lastItem          = array_pop( $items );
        $concatenatedItems = implode( ", ", $items );

        return $concatenatedItems . ", and " . $lastItem;
    }
}