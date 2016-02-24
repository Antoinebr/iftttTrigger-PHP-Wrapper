<?php

class iftttTrigger{

  private $eventName;
  private $secretKey;
  private $postData;

  public function __construct($eventName, $secretKey,$postData)
  {
    $this->eventName = $eventName;
    $this->secretKey = $secretKey;
    $this->postData = $postData;
  }

  public function pullTrigger(){

    $postString = json_encode($this->postData);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://maker.ifttt.com/trigger/" . $this->eventName . "/with/key/" . $this->secretKey);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      "Content-Type: application/json",
    ));

    //execute post
    $result = curl_exec($ch);

    //close connection
    curl_close($ch);

  }

}
