<?php
    
    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "patient";
    $dbport = 3306;

    // Create connection
    $db = mysqli_connect($servername, $username, $password, $database, $dbport);

    // Check connection
    if(mysqli_connect_errno($connect))
    {
		echo 'Failed to connect';
    }
    
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
    $additional_details=$_POST['extra'];
    
    if(mysqli_query($db,"INSERT INTO patients (first_name,last_name,age,gender,mobile,aditional_details)
		        VALUES ('$first_name','$last_name','$age','$gender','$mobile','$additional_details')"))
		        {
		            echo '<br>Details of '. $first_name  .' inserted Sucessfull !';
		        }
		        
	
    
    
?>    