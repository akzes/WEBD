<!--
Page: Submit to Database and Email PHP Code

Integrative Assignment: Not Far From the Tree Client
By: Ariel Gelbard & Andres Hernandez
Date: Tuesday, December 10, 2013
-->
<?php $pagename="Thank You";?>
<?php include("includes/header.php");?>
<div class='interactive'>
	<img src='assets/thankyou.jpg' alt=""/>
</div>


<?php

if(isset($_POST['submit_volunteer'])) {
	foreach ($_POST["ways"] as $i=>$involved) { 
		if($i===0){
			$involved2=$involved;
		}	
		else{
			$involved2.=", ".$involved;
		}
	}

	foreach ($_POST["available"] as $i=>$ava) { 
		if($i===0){
			$ava2=$ava;
		}	
		else{
			$ava2.=", ".$ava;
		}
	}

	foreach ($_POST["phone1"] as $i=>$phnum) { 
		if($i===0){
			$phnum11=$phnum;
		}	
		else{
			$phnum12=$phnum;
		}
	}
	foreach ($_POST["phone2"] as $i=>$phnum2) {
		if($i===0){
			$phnum21=$phnum2;
		}	
		else{
			$phnum22=$phnum2;
		}
	}

	//Connecting to the Database
	$host="localhost";//Actual Connection Removed for Security Purposes
	$username="user";//Actual Connection Removed for Security Purposes
	$password="pass";//Actual Connection Removed for Security Purposes
	$db_name="test";//Actual Connection Removed for Security Purposes

	$con=mysqli_connect($host,$username,$password,$db_name);


	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }

	//Insert Sign Up Data into Table
	$sql="INSERT INTO volunteers VALUES ('0','".$_POST[firstname]."','".$_POST[lastname]."','".$_POST[email]."','".$_POST['affiliation']."','".$involved2."','".$ava2."','".$phnum11."','".$phnum12."','".$phnum21."','".$phnum22."','".$_POST[newsletter]."')"; 

	if (!mysqli_query($con,$sql))   {   
	   die('Did you sign up already or not fill out the information?');
	   //die('Error: ' . mysqli_error($con));   
	}

	mysqli_close($con);


	//Send Email To:
	$to = $_POST['email'];

	//Subject
	$subject = 'Not Far From the Tree Volunteer Registration';

	//Header Components
	$headers = "From: Not Far From the Tree <noreply@notfarfromthetree.org>\r\n";
	// $headers .="CC: susan@example.com\r\n";   //header option(can be used to alert a general inbox when someone signs up)
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


	//Composing Email Message
	$message = '<html><body>';
	$message .= '<img src="http://arielgelbard.com/notfarfromthetree/assets/emailLogo.jpg"/>';
	$message .="<p>Hi ".$_POST[firstname].",<p>";
	$message .="<p>You have submitted a registration form to volunteer which we are very excited about. We will be getting back to you as soon as possible. Untill then here is some information you can read up on.</p>";
	$message .="<br><p>Once again thank you!</p>";
	$message .="<h6>-Not far from the tree staff.</h6>";
	$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
	$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $_POST['firstname'] . " ". $_POST['lastname'] ."</td></tr>";
	$message .= "<tr><td><strong>Email:</strong> </td><td>" . $_POST['email'] . "</td></tr>";
	$message .= "<tr><td><strong>Being Involved:</strong> </td><td>";
	foreach ($_POST["ways"] as $i=>$involved) { 
		if($i===0){
			$message .= $involved;
		}	
		else{
			$message .= ", ".$involved;
		}			
	}
	$message .= "</td></tr>";
	$message .= "<tr><td><strong>Available:</strong> </td><td>";
	foreach ($_POST["available"] as $i=>$ava) { 
		if($i===0){
			$message .= $ava;
		}	
		else{
			$message .= ", ".$ava;
		}		
	}
	$message .= "</td></tr>";
	$message .= "<tr><td><strong>Phone Number:</strong> </td><td>";
	foreach ($_POST["phone1"] as $i=>$phnum) { 
		if($i===0){
			 $message .= $phnum." ";
		}	
		else{
			if($phnum===''){

			}
			else{
				$message .="Extension: ".$phnum;
			}
		}
	}
	"</td></tr>";
	$message .= "</table>";
	$message .= "</body></html>";

	//Send Email Off!
	mail($to,$subject,$message,$headers);
	header ("Location: thankyou.php");
}


?>

<?php include("includes/footer.php");?>