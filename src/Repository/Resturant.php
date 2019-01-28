<?php
/**
 * Created by PhpStorm.
 * User: Best
 * Date: 1/24/2019
 * Time: 4:59 AM
 */
namespace App\Repository;

/**
 * Interface Resturant
 * @package App\Repository
 */
interface Resturant
{
    /**
     * @param $data
     * @param $check
     * @return mixed
     */
    public function setData($data, $check);

    /**
     * @param $string
     * @return mixed
     */
    public function find($string);

    /**
     * @param $index
     * @param $stringString
     * @return mixed
     */
    public function findBy($index, $stringString);

    /**
     * @param $clientId
     * @return mixed
     */
    public function findByClientId($clientId);
}