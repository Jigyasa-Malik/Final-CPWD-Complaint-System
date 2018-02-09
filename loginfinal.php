<?php
session_start();
include_once "dbconnect.php"; 
?>
<html><body>
<style type="text/css">
            <?php
                include("style/w3.css");
                include("style/StyleSheet1.css");
            ?>
        </style>
<?php
    if(!empty($_POST['submit']))
{
     if( empty($_POST['user_name'])  ) //
   {
      }
   
   else if (empty($_POST['pass']))
    {
    }
      else
    {     include_once 'dbconnect.php';
           $user_name = $_POST['user_name'];
           $pass= $_POST['pass'];
           $query1= "Select * from customer_data where  mail_id ='$user_name' AND password= '$pass'  ";
          $res = mysql_query($query1, $db) or die(mysql_error($db));
          $rows = mysql_num_rows($res);
                            if($rows==1)
                   {
			$_SESSION['email']= $user_name;
                        header ("Location: profile.php");
                        echo("<script>location.href = 'profile.php';</script>");
               }
                      else
              {  
                echo("<script>location.href = 'index.php?flag=1';</script>");                
         }
    }// upper else // header("Location: index.php?flag=1"); 
   }
  
?>
  </body>
</html>