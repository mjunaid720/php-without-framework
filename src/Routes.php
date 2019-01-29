<?php
/**
 * Created by PhpStorm.
 * User: Best
 * Date: 1/24/2019
 * Time: 1:13 AM
 */
declare(strict_types = 1);

return [
    ['POST', '/resturents', ['App\Controllers\ResturantController', 'getResturents']],
    ['POST', '/searchByField', ['App\Controllers\ResturantController', 'getResturentByfield']],
    ['POST', '/getByClientId', ['App\Controllers\ResturantController', 'getResturentByClientId']]
];