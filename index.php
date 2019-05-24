<?php
// Reads the variables sent via POST from our gateway
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];
if ( $text == "" ) {
	 // This is the first request. Note how we start the response with 

CON
	 $response  = "CON Welcome to PATRICIA \n";
	 $response .= "1. Card Rates \n";
	 $response .= "2. Wallet Balance";
	 $response .= "3. Call Center Agent";
	
}else if ( $text == "1" ) {
  // Business logic for first level response
  $response = "CON Card Rates \n";
  $response .= "1. Amazon (CR=200/$, WCR=150/$) \n";
  $response .= "2. Itunes 180/$";
  $response .= "3. Steam (USA=200/$, AUD&CAD=120/$)";
  $response .= "4. Google Play=150/$";
  $response .= "5. Sephora=150/$";
  $response .= "6. Nonstrom=170/$";


}else if ( $text == "2" ) {
  // Business logic for first level response
  $response = "CON Wallet Balance \n";
  $response .= "END Your wallet balance is $accountNumber";
  
}else if($text == "3") {
  $response = "CON Call Center Numbers \n";
  $response .= "1. 0703 3888 224 \n";
  $response .= "2.0708 5555 831";
 
}
// Print the response onto the page so that our gateway can read it
header('Content-type: text/plain');
echo $response;
// DONE!!!
?>