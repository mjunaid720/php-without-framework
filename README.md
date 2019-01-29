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
  
  <_What should the status code be on success and is there any returned data? This is useful when people need to to know what their callbacks should expect!_>

  * **Code:** 200 <br />array("data" => $resultData, "status" => self::STATUS_SUCCESS, "message" => "success")
    **Content:** `{ data : 12 }`

# to run tests
composer test
