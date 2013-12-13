<!--
Page: View Database

Integrative Assignment: Not Far From the Tree Client
By: Ariel Gelbard & Andres Hernandez
Date: Tuesday, December 10, 2013
-->
<?php $pagename="Thank You";?>
<?php include("includes/header.php");?>
<?php
	//Connecting to the Database
	$host="localhost";//Actual Connection Removed for Security Purposes
	$username="user";//Actual Connection Removed for Security Purposes
	$password="pass";//Actual Connection Removed for Security Purposes
	$db_name="test";//Actual Connection Removed for Security Purposes
	$pass='password';
	$go=true;

	$con=mysqli_connect($host,$username,$password,$db_name);


	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
			
	else{
		if ($go===true){
			$result = mysqli_query($con,"SELECT * FROM volunteers");

			echo '<table rules="all" style="border-color: #666;" cellpadding="10">';
			echo "<tr style='background: #eee;'><td><strong>First Name</strong></td><td>Last Name</td><td>Email Address</td><td>Affiliation</td><td>Being Involved</td><td>Availability</td><td>Phone Number 1</td><td>Phone Number 1 Extension</td><td>Phone Number 2</td><td>Phone Number 2 Extension</td><td>Newsletter Signup</td></tr>";	
			while($row = mysqli_fetch_array($result)){
				echo "<tr><td>".$row['fname']."</td><td>".$row['lname']."</td><td>".$row['email']."</td><td>".$row['aff']."</td><td>".$row['involved']."</td><td>".$row['available']."</td><td>".$row['phone1']."</td><td>".$row['phone1ext']."</td><td>".$row['phone2']."</td><td>".$row['phone2ext']."</td>";
				$temp=$row['newsletter'];
				if ($temp===0){
					echo "<td>No</td>";
				}
				else{
					echo "<td>Yes</td>";
				}
				echo "</tr>";
			}
			echo "<tr><td>";
			echo "</table>";
			echo "</body></html>";
		}
		else{

		}
	}

	mysqli_close($con);


?>

<?php include("includes/footer.php");?>