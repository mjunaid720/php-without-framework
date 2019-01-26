<?php
/**
 * Created by PhpStorm.
 * User: Best
 * Date: 1/24/2019
 * Time: 1:19 AM
 */
declare(strict_types = 1);

namespace App\Controllers;

use Http\Response;
use Http\Request;
use App\Repository\Resturant;

class ResturantController
{
    private $response;
    private $request;
    private $resturentRepo;

    public function __construct(Request $request, Response $response, Resturant $resturent)
    {
        $this->request = $request;
        $this->response = $response;
        $this->resturentRepo = $resturent;
        // load data from url (set second param to true), or directly set json than set false
        $this->resturentRepo->setData(__dir__.'/../../dataSource/backend-data.json', true);
    }

    public function index()
    {
//        ini_set('display_errors', '1');
//        ini_set('display_startup_errors', '1');
//        error_reporting(E_ALL);
        // $content = '<h1>Hello World</h1>';
        // $content .= 'Hello ' . $this->request->getParameter('name', 'stranger');


        // $resultData = $this->resturentRepo->find('Malmö');
        //print_r($this->resturentRepo->findBy('city', 'Lund'));
       //  print_r($resultData); exit;
        $this->response->addHeader('Content-Type','application/json');
        $this->response->setContent('<h1>Hello World</h1>');
        $this->response->setStatusCode('200');
        echo 'sdfsfdg'; exit;
       // print_r((array)$this->response);
//        return $this->response;
//        header('Content-Type: application/json');
//        echo json_encode($this->resturentRepo->findBy('city', 'Lund'));

    }
}