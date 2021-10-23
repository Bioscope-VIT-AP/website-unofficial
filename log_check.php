<?php
	if(isset ($_POST['uname']))
	{
		$uname = $_POST['uname'];
		$servername = "localhost";
		$username = "root";
		$password = "";
		$db = "bioscope";
		$conn = new mysqli($servername, $username, $password,$db);
		if ($conn->connect_error) 
		{
    		die("Connection failed: " . $conn->connect_error);
		}
		$sql = "SELECT * FROM users where name = '".$uname."'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0)
	    {
	    	$row = $result->fetch_assoc(); 
        	if($row['pwd']==$_POST['psw'])
        		{
        			session_start();
        			$_SESSION['user'] = $uname;
        			header("Location: Dashboard.php"); 
        		}
        	else
        		echo "incorrect";
	    } 
		else 
		{
    		echo "0 results";
		}
		$conn->close();
	}
	else
		echo "you are in a wrong page buddy!";

?>