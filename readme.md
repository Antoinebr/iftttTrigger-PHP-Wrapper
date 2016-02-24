## How to trigger events to IFTT in PHP ?



```php
<?php

// Require the class !
require('iftttTrigger.php');


// Set the infos
$actionName = "contact_form";
$secretKey = "Wz-CX84f9827SIi";


// The extras values that you can pass
$postData = array(
  "value1" => "Bart Simpsons",
  "value2" => "Lisa Simpsons",
  "value3" => "Homer Simpsons",
);

// Instanciate
$contactFrom = new iftttTrigger($actionName,$secretKey,$postData);

// Pull the trigger !
$contactFrom->pullTrigger();

```
