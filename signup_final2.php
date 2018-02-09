<?php
session_start();
?>

<?php
    
     var_dump($_POST);
    if(!empty($_POST['submit']))
{	echo 'hello1';

            include_once 'dbconnect.php';
           
           $mail = $_SESSION['email'];           
           $pass= $_POST['pass'];
	    $repass= $_POST['repass'];
	if($pass!=$repass)
	{ 
	header("Location:signup_final.php?flag=1");	
	 }
	else
	{
	 $query = "Update customer_data set password='$pass' where mail_id = '$mail' ";
	mysql_query($query,$db) or die(mysql_error($db));
	
	header("Location: profile.php");
	}		
 	
}

?>    