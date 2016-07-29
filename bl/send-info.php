<?php
	$servername = "localhost";
	$username = "root";
	$password = "hack123";
	$dbname = "buoyancylabs";

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$msg = $_POST['msg'];
	$grp = $_POST['grp'];

	/*$fname = 'Test';
	$lname = 'test';
	$email = 'test@buoyancylabs.com';
	$phone = '9988776655';
	$msg = 'test message to BL';
	$grp = 'Contact';*/

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$sql = "insert into contact (id, fname, lname, email, phone, msg, time, grp)
	values ('', '".$fname."', '".$lname."', '".$email."', '".$phone."', '".$msg."', '".time()."', '".$grp."')";

	if ($conn->query($sql) === TRUE) {

		$to = 'info@buoyancylabs.com';
		$subject = '['.$grp.'] Buoyancy Labs';

		$message = "<html><body>
		                <p>New message !!</p>
		                <p>Name : ".$fname.' '.$lname."</p>
		                <p>Email : ".$email."</p>
		                <p>Phone No. : ".$phone."</p>
		                <p>Message : ".$msg."</p>
		                ";

		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: Buoyancy Labs <noreply@buoyancylabs.com>' . "\r\n";

		if(mail($to,$subject,$message,$headers)){
			ob_start(); // ensures anything dumped out will be caught

	        // do stuff here
	        $url = 'http://buoyancylabs.com/thanks.html'; // this can be set based on whatever

	        // clear out the output buffer
	        while (ob_get_status()) 
	        {
	            ob_end_clean();
	        }

	        // no redirect
	        header( "Location: $url" );
		}else{
		    ob_start(); // ensures anything dumped out will be caught

	        // do stuff here
	        $url = 'http://buoyancylabs.com/thanks.html'; // this can be set based on whatever

	        // clear out the output buffer
	        while (ob_get_status()) 
	        {
	            ob_end_clean();
	        }

	        // no redirect
	        header( "Location: $url" );
		}

	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>