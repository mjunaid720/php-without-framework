<?php
/**
 * Created by PhpStorm.
 * User: Best
 * Date: 1/24/2019
 * Time: 4:59 AM
 */
namespace App\Repository;

interface Resturant
{
    /**
     * @param $data
     * @param $check
     * @return mixed
     */
    public function setData($data, $check);
    /**
     * @return mixed
     */
    public function all();

    /**
     * @param $string
     * @return mixed
     */
    public function find($string);

    /**
     * @return mixed
     */
    public function findById();
    public function findBy($index, $stringString);
}