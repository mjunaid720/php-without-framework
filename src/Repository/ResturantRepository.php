<?php
/**
 * Created by PhpStorm.
 * User: Best
 * Date: 1/24/2019
 * Time: 4:59 AM
 */

namespace App\Repository;
use App\Factory\ResturantFactory;

/**
 * Class ResturantRepository
 * @package App\Repository
 */
class ResturantRepository implements Resturant
{
    private $jsonData;

    /**
     * @param $data
     * @param $check
     * @return mixed|void
     */
    public function setData($data, $check) {
        if($check) {
            $this->jsonData = json_decode(file_get_contents($data), true);

            //$this->jsonData = utf8_decode(json_decode($jsonContent, true));
        } else {
            $this->jsonData = $data;
        }
    }

    /**
     * @param $stringString
     * @return array|mixed
     */
    public function find($searchString)
    {
        $data = [];
        for ($i=0; $i<count($this->jsonData); $i++) {
            if (in_array($searchString, $this->jsonData[$i])) {
                array_push($data, $this->jsonData[$i]);
            }
        }
        return $data;
    }

    /**
     * @param $index
     * @param $stringString
     * @return array|mixed
     */
    public function findBy($index, $searchString) {
        $result = [];
        $restObj = ResturantFactory::create(json_encode($this->jsonData));
        foreach($restObj as $arrayInf) {
            if($arrayInf->{$index} == $searchString) {
                array_push($result, (array)$arrayInf);
            }
        }
        return $result;
    }

    /**
     * @param $clientId
     */
    public function findByClientId($clientId) {
        $result = [];
        $restObj = ResturantFactory::create(json_encode($this->jsonData));
        foreach($restObj as $arrayInf) {
            if($arrayInf->clientKey == $clientId) {
                array_push($result, (array)$arrayInf);
            }
        }
        return $result;
    }
}