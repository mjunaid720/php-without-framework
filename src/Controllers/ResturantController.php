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
    const STATUS_SUCCESS = 200;

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
            if (!empty($this->request->getParameter('clientKey'))) {
                $searchText = $this->request->getParameter('search');
                $resultData = $this->resturentRepo->find($searchText);
                $response = array("data" => $resultData, "status" => self::STATUS_SUCCESS, "message" => "success");
            } else {
                $response = array("error" => "Request input mismatch", "status" => ResponseError::STATUS_REQUIED_FIELDS, "message" => "error");
            }
            echo json_encode($response);
            exit;
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
            if (!empty($this->request->getParameter('search')) && !empty($this->request->getParameter('field'))) {
                $searchText = $this->request->getParameter('search');
                $field = $this->request->getParameter('field');
                $resp = $this->resturentRepo->findBy($field, $searchText);
                $response = array("data" => $resp, "status" => self::STATUS_SUCCESS, "message" => "success");
            } else {
                $response = array("error" => "Request input mismatch", "status" => ResponseError::STATUS_REQUIED_FIELDS, "message" => "error");
            }
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
            if (!empty($this->request->getParameter('clientKey'))) {
                $clientId = $this->request->getParameter('clientKey');
                $result = $this->resturentRepo->findByClientId($clientId);
                $response = array("data" => $result, "status" => self::STATUS_SUCCESS, "message" => "success");
            } else {
                $response = array("error" => "Request input mismatch", "status" => ResponseError::STATUS_REQUIED_FIELDS, "message" => "error");
            }
            echo json_encode($response); exit;
        }
        catch (Exception $ex) {
            return new ResponseError(ResponseError::STATUS_INTERNAL_SERVER_ERROR, $ex->getMessage());
        }
    }
}