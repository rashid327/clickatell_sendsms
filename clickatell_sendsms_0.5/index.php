<?php

/*
*
*   Clickatell SendSMS Class Demo - 
* 
*   Copyright (c) 2007 Mohammad Hafiz Ismail <mypapit@gmail.com>
*
*   All rights reserved.
*
*   Redistribution and use in source and binary forms, with or without
*    modification, are permitted provided that the following conditions are met:
*
*   1. Redistributions of source code must retain the above copyright
*   notice, this list of conditions and the following disclaimer.
*
*   2. Redistributions in binary form must reproduce the above copyright
*   notice, this list of conditions and the following disclaimer in the
*   documentation and/or other materials provided with the distribution.
*
*   3. All advertising materials mentioning features or use of this software
*   must display the following acknowledgement:
*   This product includes software developed by the <organization>.
*
*   4. Neither the name of its contributors may be used to endorse or 
*   promote products derived from this software without specific prior 
*   written permission.
*/


require('SendSMS.php');



//replace with your own username,password and your API id        
$sendsms = new SendSMS("your_username","your_password","your API_id");


if  (  ($sendsms->login()) == 0  ) {
    die( "failed"); // if login failed

}



/*else send the message to phone*/

$sendsms->send("0132073011","testing send sms - can you get it?");



?>