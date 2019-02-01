<?php
$conn = new mysqli("localhost", "root", "", 'registration');

echo "Successfully connected to database<br>";

if(isset($_POST['submit'])){
	
	$class=$_POST['class'];
	$address=$_POST['address'];
	
	
	$query="insert into stud2 values('$fname','$username','$password','$contact','$gender','$class','$address')";
	
	if($conn->query($query)==TRUE)
	{
		echo "Data inserted successfully";
	}
	else
	{
		echo "Error occurred:".$query."<br>".$conn->error;
		
	}
	

}


	class CStudent{
		function __construct(){
			echo"Constructor called";
			
			echo "I Want to add here one line";
		}
	}
	$obj = new CStudent;

?>
