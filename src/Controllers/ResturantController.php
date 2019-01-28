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
use App\ApiResponse\ResponseError;
use mysql_xdevapi\Exception;

/**
 * Class ResturantController
 * @package App\Controllers
 */
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

    }

    /**
     * @return JSON
     */
    public function getResturents() {
        try {
            $searchText = $this->request->getParameter('search');
            $resultData = $this->resturentRepo->find($searchText);
            $response = array("data" => $resultData, "status" => 200, "message" => "success");
            echo json_encode($response); exit;
        }
        catch (Exception $ex) {
            return new ResponseError(ResponseError::STATUS_INTERNAL_SERVER_ERROR, $ex->getMessage());
        }
    }

    /**
     * @return JSON
     */
    public function getResturentByfield() {
        try {
            $searchText = $this->request->getParameter('search');
            $field = $this->request->getParameter('field');
            $resp = $this->resturentRepo->findBy($field, $searchText);
            $response = array("data" => $resp, "status" => 200, "message" => "success");
            echo json_encode($response); exit;
        }
        catch (Exception $ex) {
            return new ResponseError(ResponseError::STATUS_INTERNAL_SERVER_ERROR, $ex->getMessage());
        }
    }

    /**
     * @return JSON
     */
    public function getResturentByClientId() {
        try {
            $clientId = $this->request->getParameter('clientKey');
            $result = $this->resturentRepo->findByClientId($clientId);
            $response = array("data" => $result, "status" => 200, "message" => "success");
            echo json_encode($response); exit;
        }
        catch (Exception $ex) {
            return new ResponseError(ResponseError::STATUS_INTERNAL_SERVER_ERROR, $ex->getMessage());
        }
    }
}