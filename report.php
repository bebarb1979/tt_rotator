<?php
/*
 *  CONFIGURE EVERYTHING HERE
 */
session_start();
require("config.php");

if (isset($_POST['form_name'])){

	// an email address that will be in the From field of the email.
	$name = $_POST['faucet_name']; 
	
	// an email address that will receive the email with the output of the form
	$sendTo = 'Faucet Problem Report <'.$admin_email.'>';
	
	$from= $sendTo;
	// subject of the email
	$subject = 'Problem Report for a Faucet';
	
	// form field names and their translations.
	// array variable name => Text to appear in the email
	$fields = array('form_name' => 'Name', 'frames' =>'Frames', 'directPayout'=>'directPayout', 'popups'=>'popups', 'shortlink'=>'shortlink','broken'=>'broken', 'message' => 'Message'); 
	
	// message that will be displayed when everything is OK :)
	$okMessage = 'Problem report successfully submitted. Thank you for letting us know!';
	
	// If something goes wrong, we will display this message.
	$errorMessage = 'There was an error while submitting the report. Please try again later';
	
	/*
	 *  LET'S DO THE SENDING
	 */
	
	// if you are not debugging and don't need error reporting, turn this off by error_reporting(0);
	error_reporting(E_ALL & ~E_NOTICE);
	
	
	try
	{
	
		
		 
		$emailText = "You have a new message from your contact form\n=============================\n";
	
		foreach ($_POST as $key => $value) {
			
				$emailText .= $key .":". $value ."\n";
			
		}
	
		// All the neccessary headers for the email.
		$headers = array('Content-Type: text/plain; charset="UTF-8";',
				'From: ' . $from,
				'Reply-To: ' . $from,
				'Return-Path: ' . $from,
		);
		 
		// Send email
		mail($sendTo, $subject, $emailText, implode("\n", $headers));
	
		$responseArray = array('type' => 'success', 'message' => $okMessage);
	}
	catch (\Exception $e)
	{
		$responseArray = array('type' => 'danger', 'message' => $errorMessage);
	}
	
	
	// if requested by AJAX request return JSON response
	if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
		$encoded = json_encode($responseArray);
	
		//header('Content-Type: application/json');
			
		echo $encoded;
	}
	// else just display the message
	else {
		echo $responseArray['message'];
		
	}
	
	




 }else {echo "Error";}?>
