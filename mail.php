<?php
	$to = "dhivya@iorange.in";
	
	$subject = "Enquiry Form";
	$txt = '
		Name		 	: '.$_REQUEST['name'].'<br /><br />
		E-mail 		   	: '.$_REQUEST['email'].'<br /><br />		
		Phone	   	        : '.$_REQUEST['phone'].'<br /><br />
		Service	   	        : '.$_REQUEST['service'].'<br /><br />
		Message 		: '.$_REQUEST['message'].'<br />
	';
	
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: '.$_REQUEST['name'] . "\r\n";

	
	mail($to,$subject,$txt,$headers);
?>
<script>
alert("Mail has been Sent Sucessfully..")
</script>
<meta http-equiv="refresh" content="0;URL=contact.php">



