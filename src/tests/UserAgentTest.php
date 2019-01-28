<?php
/**
 * Created by PhpStorm.
 * User: Best
 * Date: 1/27/2019
 * Time: 6:04 AM
 */
require __DIR__ . '/../../vendor/autoload.php';

/**
 * @codeCoverageIgnore
 */
class UserAgentTest extends \PHPUnit\Framework\TestCase
{
    private $http;
   // private $prophet;

    public function setUp()
    {
        $this->http = new GuzzleHttp\Client(['base_uri' => 'http://localhost/php_without_framework/']);
    }

    public function tearDown() {
        $this->http = null;
    }

    public function testResturentByClientIdCall()
    {
        $response = $this->http->request(
            'POST',
            'getByClientId',
            array(
                'form_params' => array(
                    'clientKey' => 'It4wAOvvIhEb5365Lv'
                )
            )
        );

        $this->assertEquals(200, $response->getStatusCode());
        // test data structure and testing output json is valid or invalid
        $this->assertArrayHasKey('data', (array)json_decode($response->getBody()->getContents()));
    }

    public function testResturentByfieldCall()
    {
        $response = $this->http->request(
            'POST',
            'searchByField',
            array(
                'form_params' => array(
                    'field' => 'restaurantName',
                    'search' => 'Nonni Sushi'
                )
            )
        );

        $this->assertEquals(200, $response->getStatusCode());
        // test data structure and testing output json is valid or invalid
        $this->assertArrayHasKey('data', (array)json_decode($response->getBody()->getContents()));
    }

    public function testResturentSearchCall()
    {
        $response = $this->http->request(
            'POST',
            'resturents',
            array(
                'form_params' => array(
                    'search' => 'Nonni Sushi'
                )
            )
        );
        $this->assertEquals(200, $response->getStatusCode());
    }
}
