<?php

require('iftttTrigger.php');

$postData = array(
  "value1" => "Bart Simpsons",
  "value2" => "Lisa Simpsons",
  "value3" => "Homer Simpsons",
);


$contactFrom = new iftttTrigger("contact_form","Wz-CX84f9827SIi",$postData);

$contactFrom->pullTrigger();
