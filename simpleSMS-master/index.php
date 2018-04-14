<?php
 
// ==== Control Vars =======
$strFromNumber = "+19388000924";
$strToNumber = "+201154513962";
$strMsg = "Did you catch Olivier's nip slip last night? OMG right?"; //Olivier accidentally pulled up a porn site on a projector 
$aryResponse = array();
 

    // include the Twilio PHP library - download from 
    // http://www.twilio.com/docs/libraries/
    require_once ("inc/Services/Twilio.php");
 
    // set our AccountSid and AuthToken - from www.twilio.com/user/account
    $AccountSid = "AC751e07fd4f137a421fb7e6405745d523";
    $AuthToken = "b81e408f31945e855d1992be90d37ce3";
 
    // ini a new Twilio Rest Client
    $objConnection = new Services_Twilio($AccountSid, $AuthToken);


    // Send a new outgoinging SMS by POSTing to the SMS resource */
    $bSuccess = $objConnection->account->sms_messages->create(
        
        $strFromNumber, 	// number we are sending From 
        $strToNumber,           // number we are sending To
        $strMsg			// the sms body
    );

		
    $aryResponse["SentMsg"] = $strMsg;
    $aryResponse["Success"] = true;
    
    
    echo json_encode($aryResponse);
