<?php
/**
 * Created by PhpStorm.
 * User: Best
 * Date: 1/24/2019
 * Time: 5:00 AM
 */

namespace App\Modal;


class Resturant
{
    public $clientKey;
    public $restaurantName;
    public $cuisine;
    public $city;
    public $latitude;
    public $longitude;
    /**
     * @return mixed
     */
    public function getClientKey()
    {
        return $this->clientKey;
    }

    /**
     * @param mixed $clientKey
     */
    public function setClientKey($clientKey)
    {
        $this->clientKey = $clientKey;
    }

    /**
     * @return mixed
     */
    public function getRestaurantName()
    {
        return $this->restaurantName;
    }

    /**
     * @param mixed $restaurantName
     */
    public function setRestaurantName($restaurantName)
    {
        $this->restaurantName = $restaurantName;
    }

    /**
     * @return mixed
     */
    public function getCuisine()
    {
        return $this->cuisine;
    }

    /**
     * @param mixed $cuisine
     */
    public function setCuisine($cuisine)
    {
        $this->cuisine = $cuisine;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    public function getClassVars() {
        return get_class_vars(get_class($this));
    }

    public function setValueByKey($key, $value) {
        $this->{$key} = $value;
    }


}