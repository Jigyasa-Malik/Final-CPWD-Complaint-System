<?php
	session_start();
	include_once 'dbconnect.php';

	$mail_id=$_SESSION['email'];
	$pass=$_POST['pass'];
	$new_pass=$_POST['new_pass'];
	$re_pass=$_POST['re_pass'];
    $query1= "Select password from customer_data where  mail_id ='$mail_id' ";
	$res = mysql_query($query1, $db) or die(mysql_error($db));
	while( $row = mysql_fetch_array($res))
             { 
              $data = array( $row ['password']);        
             }

	if($pass!=$data[0])
	{
	    echo "Incorrect password entered";
                     header("Location: profile.php?flag=2");     
        }
	else if($new_pass==$re_pass)
	{
        
	    $query2="Update customer_data set password='$new_pass' where mail_id = '$mail_id' ";
	    mysql_query($query2,$db) or die(mysql_error($db));
	    
        header("Location: profile.php?flag=3");
	                     
	}
	else
	{
        echo "New Password does not match Re-entered Password";
        header("Location: profile.php?flag=1");
    }
                
?>