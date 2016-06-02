<?php

namespace Geohash;

use Geohash\Geohash;

/**
 * GeohashTest
 *
 * @package marcellocai/geohash
 * @subpackage Test
 * @author marcellocai <mllong0925@gmail.com>
 */
class GeohashTest extends \PHPUnit_Framework_TestCase
{
    public function test()
    {
        $geohash = new Geohash();
        $lat = 39.98123848;
        $long = 116.30683690;
        $hash = $geohash->encode($lat, $long);
        list($newLat, $newLong) = $geohash->decode($hash);
        echo "{$lat}\t{$long}\r\n";
        echo "{$newLat}\t{$newLong}\r\n";

        $prefix = substr($hash, 0, 6);
        $neighbors = $geohash->neighbors($prefix);
        //array_push($neighbors, $prefix);
        print_r($neighbors);
    }
}
