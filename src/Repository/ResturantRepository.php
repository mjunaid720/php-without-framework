<?php
/**
 * Created by PhpStorm.
 * User: Best
 * Date: 1/24/2019
 * Time: 4:59 AM
 */

namespace App\Repository;
use App\Factory\ResturantFactory;

class ResturantRepository implements Resturant
{
    private $jsonData;

    public function setData($data, $check) {
        //echo $data; exit;
        if($check) {
            $this->jsonData = json_decode(file_get_contents($data), true);

            //$this->jsonData = utf8_decode(json_decode($jsonContent, true));
        } else {
            $this->jsonData = $data;
        }
    }

    public function all()
    {
        // TODO: Implement all() method.
    }

    public function find($stringString)
    {
//        $res = new ResturantModel();
//        $res->setValuesToSearchAllFields($stringString);
//        $toSearch = $res->getSearchingfields();
//        print_r((array)$toSearch);
//        return array_filter($this->jsonData, function ($item) use ($toSearch) {
//            return array_intersect_assoc($toSearch, $item) === $toSearch;
//        });
        $data = [];
        for ($i=0; $i<count($this->jsonData); $i++) {
            if (in_array($stringString, $this->jsonData[$i])) {
                array_push($data, $this->jsonData[$i]);
            }
        }
        return $data;
    }

    public function findBy($index, $stringString) {
        $result = [];
        $restObj = ResturantFactory::create(json_encode($this->jsonData));
        foreach($restObj as $arrayInf) {
            if($arrayInf->{$index} == $stringString) {
                array_push($result, (array)$arrayInf);
            }
        }
        return $result;
    }

    public function findById()
    {
        // TODO: Implement findById() method.
    }

    private function array_find_deep()
    {

    }
}