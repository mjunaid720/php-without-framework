<?php
/**
 * Created by PhpStorm.
 * User: Best
 * Date: 1/26/2019
 * Time: 2:52 AM
 */

namespace App\Factory;
use App\Modal\Resturant;
use Karriere\JsonDecoder\JsonDecoder as JsonDecoder;

class ResturantFactory
{
    public static function create($arrData){
        $jsonDecoder = new JsonDecoder();
        $data = $jsonDecoder->decodeMultiple($arrData, Resturant::class);
        return $data;
    }
}