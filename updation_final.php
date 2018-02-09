<?php
include_once 'dbconnect.php';
session_start();

  if(!empty($_POST['submit']))
 {
                     //var_dump(POST);

           $mail_id = $_SESSION['email'];                     
   
           $fname=$_POST['fname'];
	   $lname=$_POST['lname'];
	   $gen=$_POST['gen'];
	   $desig=$_POST['desig'];
	   $org=$_POST['org'];
           $date_join=$_POST['date_join'];
	   $dob=$_POST['dob'];
	   $date_retire=$_POST['date_retire'];
	   $contact=$_POST['contact'];
	   $hno=$_POST['hno'];
	   $block=$_POST['block'];
	   $area=$_POST['area'];
	   $city=$_POST['city'];
	   $pin=$_POST['pin'];


	if($fname!='')
	{
		$query1="Update customer_data set  first_name='$fname' where mail_id ='$mail_id' ";
		mysql_query($query1, $db) or die(mysql_error($db));	
	}
         if($lname!='')
	{
		$query2="Update customer_data set  last_name='$lname' where mail_id ='$mail_id' ";
		mysql_query($query2, $db) or die(mysql_error($db));	
	}
         if($gen!='')
	{
		$query3="Update customer_data set  gender='$gen' where mail_id ='$mail_id' ";
		mysql_query($query3, $db) or die(mysql_error($db));	
	}
         if($desig!='')
	{
		$query4="Update customer_data set  designation='$desig' where mail_id ='$mail_id' ";
		mysql_query($query4, $db) or die(mysql_error($db));	
	}
         if($org!='')
	{
		$query5="Update customer_data set  organisation='$org' where mail_id ='$mail_id' ";
		mysql_query($query5, $db) or die(mysql_error($db));	
	}
         if($dob!='')
	{
		$query6="Update customer_data set  DOB='$dob' where mail_id ='$mail_id' ";
		mysql_query($query6, $db) or die(mysql_error($db));	
	}
         if($date_join!='')
	{
		$query7="Update customer_data set  date_of_joining='$date_join' where mail_id ='$mail_id' ";
		mysql_query($query7, $db) or die(mysql_error($db));	
	}
         if($date_retire!='')
	{
		$query8="Update customer_data set  date_of_retirement='$date_retire' where mail_id ='$mail_id' ";
		mysql_query($query8, $db) or die(mysql_error($db));	
	}
         if($contact!='')
	{
		$query9="Update customer_data set contact= '$contact' where mail_id ='$mail_id' ";
		mysql_query($query9, $db) or die(mysql_error($db));	
	}
        if($hno!='')
	{
		$query10="Update customer_data set hno= '$hno' where mail_id ='$mail_id' ";
		mysql_query($query10, $db) or die(mysql_error($db));	
	}
	if($block!='')
	{
		$query11="Update customer_data set sector= '$block' where mail_id ='$mail_id' ";
		mysql_query($query11, $db) or die(mysql_error($db));	
	}
	if($area!='')
	{
		$query12="Update customer_data set area='$area' where mail_id ='$mail_id' ";
		mysql_query($query12, $db) or die(mysql_error($db));	
	}   
	if($city!='')
	{
		$query13="Update customer_data set city= '$city' where mail_id ='$mail_id' ";
		mysql_query($query13, $db) or die(mysql_error($db));	
	}
	if($pin!='')
	{
		$query14="Update customer_data set pin= '$pin' where mail_id ='$mail_id' ";
		mysql_query($query14, $db) or die(mysql_error($db));	
	}
                    
 }

 header("Location: profile.php?flag=3");                 
?>
