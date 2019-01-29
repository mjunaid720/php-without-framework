# php-without-framework

you have to change its baseurl in src/config.php

# Api Calls
**Search By Resturents available fields**
----
  <_this call uses all fields to search from json._>

* **URL**

  <_/resturents_>

* **Method:**
  
  <_`POST`_>

   **Required:**
 
   `search=[string]`

* **Data Params**

  <_what should the body payload look like._>
   
   `array(`
      `'form_params' => array(`
          `'search' => 'Nonni Sushi'`
      `)`
  `)`

* **Success Response:**
  
  <_What should the status code be on success !_>

  * **Code:** 200 <br />
    **Content:** `{"data":[{"clientKey":"0ybZzjo4357J4lzUAT","restaurantName":"Nonni Sushi","cuisine":"Japanskt","city":"Stockholm","latitude":"59.331707","longitude":"18.062334"}],"status":200,"message":"success"}`
    

**Get Resturent By ClientKey**
----
  <_define ClientKey to search from json._>

* **URL**

  <_/getByClientId_>

* **Method:**
  
  <_`POST`_>

   **Required:**
 
   `clientKey=[string]`

* **Data Params**

  <_what should the body payload look like._>
   
   `array(`
      `'form_params' => array(`
          `'clientKey' => '0ybZzjo4357J4lzUAT'`
      `)`
  `)`

* **Success Response:**
  
  <_What should the status code be on success !_>

  * **Code:** 200 <br />
    **Content:** `{"data":[{"clientKey":"0ybZzjo4357J4lzUAT","restaurantName":"Nonni Sushi","cuisine":"Japanskt","city":"Stockholm","latitude":"59.331707","longitude":"18.062334"}],"status":200,"message":"success"}`
    
    
**Get Resturent By Specfic Field**
----
  <_define field and search string to search from json._>

* **URL**

  <_/searchByField_>

* **Method:**
  
  <_`POST`_>

   **Required:**
 
   `field=[string]`
   `search=[string]`

* **Data Params**

  <_what should the body payload look like._>
   
   `array(`
      `'form_params' => array(`
          `'field' => 'restaurantName'`
          `'search' => 'Nonni Sushi'`
      `)`
  `)`

* **Success Response:**
  
  <_What should the status code be on success !_>

  * **Code:** 200 <br />
    **Content:** `{"data":[{"clientKey":"0ybZzjo4357J4lzUAT","restaurantName":"Nonni Sushi","cuisine":"Japanskt","city":"Stockholm","latitude":"59.331707","longitude":"18.062334"}],"status":200,"message":"success"}`

# to run tests
composer test
