




<?php 
	require 'vendor/autoload.php';
	use Mailgun\Mailgun;

	// mailgun credentials
	$mg = new Mailgun("key-a643dfc4abedf6a8ee23c2173b5a2c96");
	// $mgValidate = new Mailgun('pub-key-example');
	$domain = "thehealthbits.com";
	$mailingList = "subscribers@" . $domain;
	$secretPassphrase = 'a_secret_passphrase';
	$recipientName = $_POST['fields_fname'];
	$recipientAddress = $_POST['fields_email'];

	# Let's validate the customer's email address, using Mailgun's validation endpoint.
	// $result = $mgValidate->get('address/validate', array('address' => $recipientAddress));

	// if($result->http_response_body->is_valid == true){

	    # Next, instantiate an OptInHandler object from the SDK.
	    $optInHandler = $mg->OptInHandler();

	    # Next, generate a hash.
	    $generatedHash = $optInHandler->generateHash($mailingList, $secretPassphrase, $recipientAddress);

	    # Now, let's send a confirmation to the recipient with our link.
	    // $mg->sendMessage($domain, array('from'    => 'bob@example.com', 
	    //                                 'to'      => $recipientAddress, 
	    //                                 'subject' => 'Please Confirm!', 
	    //                                 'html'    => "<html><body>Hello,<br><br>You have requested to be subscribed 
	    //                                               to the mailing list $mailingList. Please <a 
	    //                                               href=\"http://yourdomain.com/subscribe.php?hash=$generatedHash\">
	    //                                               confirm</a> your subscription.<br><br>Thank you!</body></html>"));

	    # Finally, let's add the subscriber to a Mailing List, as unsubscribed, so we can track non-conversions.
	    $mg->post("lists/$mailingList/members", array('address'    => $recipientAddress, 
	    											  'name'	   => $recipientName,
	                                                  'subscribed' => true,
	                                                  'upsert'     => 'yes'));
	// }

	header("Location:/subscribe-thank-you/");
	die();

?>