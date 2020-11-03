<?php
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
	if(empty($_POST['username']) || empty($_POST['passwords'])){
		$error = "Username or Password is Invalid";
	}
	else
	{

		//Define $user and $pass
		$user=$_POST['username'];
		$pass=$_POST['passwords'];


// Server in the this format: <computer>\<instance name> or
// <server>,<port> when using a non default port number
$server = 'LAPTOP-76GUU93U\GASTON';

// Connect to MSSQL
$link = mssql_connect($server, '', '');

		//sql query to fetch information of registerd user and finds user match.
		$query = mssql_query($conn, "SELECT * FROM userpass WHERE pass='$pass' AND user='$user'");

		$rows = mssql_num_rows($query);
		if($rows == 1){
			header("Location: page2.php"); // Redirecting to other page
		}
		else
		{
			$error = "Username of Password is Invalid";
		}
		mssql_close($conn); // Closing connection
	}
}

?>
