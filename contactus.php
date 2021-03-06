<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>
        Contact Us
    </title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">

    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="ideal-image-slider.css">
    <link rel="stylesheet" href="themes/default/default.css">

    <link rel="stylesheet" href="style/StyleSheet1.css">




</head>
<body>
    <!--CONTAINER-->
    <div id="container">
        <!--HEADER-->
        <div id="header">
            <div id="logo"></div>
            <div id="top-info"><img id="cpwd" src="images/cpwdLogo.png" style="float:right;"></div>
            <div id="navbar">


                <span class="nav-btn"></span>
                <ul class="collapse1 w3-navbar w3-black w3-large " style="margin:0px;">
                    <li><a class="active w3-navbar w3-black w3-hover-teal " href="index.php" style="float:left;width:100%"><i class="fa fa-home w3-xlarge"></i>&nbsp;HOME</a></li>
                    <li><a class="w3-btn w3-black w3-hover-teal " onclick="showInfo('steps')"><i class="fa fa-question-circle"></i>&nbsp;HOW TO BOOK COMPLAINT</a></li>
                    <li><a class="w3-btn w3-dark-grey w3-hover-dark-grey  " href="contactus.php"><i class="fa fa-phone"></i>&nbspCONTACT US</a></li>
                    <li><a class="w3-btn w3-black  w3-hover-teal" onclick="showInfo('about')"><i class="fa fa-users"></i>&nbsp;ABOUT US</a></li>
                    <li><a onclick="disp(); empty();" class="w3-btn w3-black w3-hover-teal"><i class="fa fa-sign-in"></i>&nbsp;LOGIN</a></li>
                    <li><a class="w3-btn w3-black  w3-hover-teal" href="signup.php"><i class="fa fa-coffee"></i>&nbsp;SIGNUP</a></li>
                </ul>
            </div>
        </div>

<script>
function disp()
{
document.getElementById('id01').style.display='block';
}
function empty()
{
document.getElementById("myform").reset();
}
</script>

        <!--Steps to BOOK COMPLAINT-->
        <div id="steps" class="w3-accordion-content">
            <div class="w3-container">
                <h4>STEPS</h4>
                <p>
                    <ol type="i">
                        <li>Create an account</li>
                        <li>Login into your created account</li>
                        <li>Click on "Book complain" tab</li>
                        <li>Choose a complain category</li>
                        <li>Choose preferred date and time</li>
                        <li>Click on Submit button;Your Complaint has been booked</li>
                        <li>Check your registered email id for confirmation</li>
                    </ol>
                </p>
            </div>
        </div>
        <!--About us-->
        <div id="about" class="w3-accordion-content">
            <div class="w3-container">
                <h4>ABOUT US</h4>
                The Central public works department is the premier agency of the Central Government operating throughout the country for construction, maintenance and repairs of all works and buildings financed from civil works, budget, except few departments who have their own Engineering Units or may get the works executed through private agencies.
                General Financial Rule 136 provides:
                “All Central Works, other than the works of Railways and Defence Department, irrespective of cost, shall primarily be executed by the Central Public Works Department.  Prior concurrence of the Department of the Central Government in administrative charge of Public Works shall be necessary for entrusting works to an agency other than the Central P.W.D.  Such concurrence may be given by general or special orders.
                <br><br>
            </div>
        </div>
        <!--CONTENT-->
       <div class="w3-container w3-green w3-xlarge"> 
             <p style=" height:60%; width:90%; ">CONTACT US</p>
       </div>
        <br>
        <div class="w3-responsive">
              <table class="w3-table w3-striped w3-bordered w3-border">
             <tr>
                  <th>Sno</th>
                  <th>Issues</th>
                  <th>Designation</th>
                   <th>Contact No.</th>
                    <th>Fax No</th>
                    <th>Email</th>
              </tr>

            <tr>
                 <td>1.</td>
                 <td>Issues related to computerization,
                      ERP, virtualization & computer
                       peripherals 
        </td>
         
                    <td>Executive Engineer
                           PaWD-I 
        </td>

                  <td>23061239 </td>

                  <td>23061239 </td>

                  <td>ronakt12@gmail.com</td>
             </tr>

              <tr>
                  <td>2.</td>
                   <td>Buildings in CGO Complex,  
                           NIC Bldg., P.V. Hostel 
        </td>
                     <td>EE,U DIVISION </td>
                     <td>24363208 </td>
                     <td>24366839 </td>
                    <td>ee-udiv.cpwd@nic.in</td>
                </tr>

               <tr>
                  <td>3.</td>
                   <td>Maintenance related with the flats &
                       bungalows at Ferozeshah Road</td>
                    <td>Executive Engineer
                           PaWD-I 
        </td>
                     <td>23370420 </td>
                     <td></td>
                    <td>eepawd@nic.in</td>
                </tr>
         <tr>
                  <td>4.</td>
                   <td>Matters related to maintenance of
                           North Block, South Block, Vijay
                          Chowk, L & M Block, INS, Vayu 
        bhavan </td>
                    <td>Executive Engineer
                          Central Secretariat
                            Division 

        </td>
                     <td>23015801  </td>
                     <td>23015600 </td>
                    <td>eecsd.10@yahoo.com</td>
                </tr>

              <tr>
                    <td>5.</td>
                   <td>Matters related to Civil maintenance
                           of Krishi Bhawan, Shastri Bhawan,
                           Nirman Bhawan, Udyog Bhawan,
                           Sunder Nursery & B. J. Park
                    </td> 
                <td>Executive Engineer
                     F-Division 
        </td> 
               <td>2331889 </td>
               <td>23386305 </td>
               <td>eefdcpwd@rediffmail.com</td>
            </tr>
    
             <tr>
                 <td>6.</td>
                 <td>All maintenance works of CE(NDZI),
                   Vigyan Bhawan, Except Imperial
                  Buildings.
                 </td>
                 <td>Senior Architect –XIII  </td>
                 <td>23062433 </td>
                 <td></td>
                 <td>sar3-candr.cpwd@nic.in</td>
             </tr>

               <tr>
                 <td>7.</td>
                 <td>North Block, South Block, Rastrapati
                   Bhawan, Central Vista
                 </td>
                 <td>Senior Architect
                        (HQ)-I 
            </td>
                 <td>23062681</td>
                 <td></td>
                 <td>sa-hql.cpwd@nic.in</td>
             </tr>
    
             <tr>
             <td>8.</td>
              <td>Residential quarters of DIZ Area </td>
               <td>Executive Engineer
                       ‘H’ Division 
        </td>
               <td>23719433 </td>
              <td>23327290 </td>
              <td>eeh_div@yahoo.com</td>
             </tr>
                  <tr>
               <td>9.</td>
              <td>Residential quarters of Aram Bagh,
                Minto Road, Chitra Gupta Road,
                Telegraph Lane, Press Road &
                 Bengali Market. </td>
               <td>Executive Engineer
                     ‘L’ Division 
 
        </td>
               <td>23379561  </td>
              <td>23327290 </td>
              <td>ee-ldivcpwd@nic.in</td>
             </tr>  
                  <tr>
              <td>10.</td>
              <td>Lady Harding Medical College &
                     Smt. S..K Hospital 
 
          </td>
               <td>Executive Engineer
                      SSKHED  
        </td>
               <td>23365977  </td>
              <td> </td>
              <td>mksonkar@yahoo.com</td>
             </tr>

        </table>
        <br>
        <a class="w3-hover-grey " href="http://cpwd.gov.in/feedback/feedback.pdf" style="font-size:130%; margin-left:42%;">Complete Info</a>
        </div>
        <!----FOOTER-->
        <div id="footer" class="w3-container w3-padding-32 w3-black">
            <div class="w3-container w3-black  w3-center">
                <h4>Follow Us</h4>
                <a class="w3-btn-floating w3-center w3-blue" href="http://www.facebook.com" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                <a class="w3-btn-floating w3-center w3-blue" href="https://twitter.com/" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                <a class="w3-btn-floating w3-center w3-blue" href="https://plus.google.com/" title="Google +" target="_blank"><i class="fa fa-google-plus"></i></a>
                <a class="w3-btn-floating w3-center w3-blue" href="https://in.linkedin.com/" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
            </div>
       <!--GoTOTop-->
             <div style="position:relative;bottom:103px;z-index:1;" class="w3-tooltip w3-right">
                <a class="scrollup w3-btn" href="">
                    <span class="w3-xxlarge">
                        <i class="fa fa-chevron-circle-up"></i>
                    </span>
                </a>
            </div>
            <!--End of Go TO Top-->
        </div> <!--End of Footer-->
    </div><!--END CONTAINER-->
 
        <!-- Alert BOX -->
    
        <div id="errorBox1" class="w3-modal">
            <div style="width:50%; margin:3%;" class="w3-modal-content w3-light-grey w3-card-8">
                <div class="w3-container w3-red">
                    <header>
                        <span onclick="document.getElementById('errorBox1').style.display='none'"
                              class="w3-closebtn">
                            ×
                        </span>
                        <h2>Alert Box</h2>
                    </header>
                </div>
                <p style="margin:3%;">LoginId and Password do not match !</p><br />
            </div>
        </div>


        <script>
            function alert1() {
                 window.document.getElementById('errorBox1').style.display='block';
            }
        </script>
   
 
    
            <?php error_reporting(0); $flag=$_GET['flag'];
                if($flag==1)
                  {
                      echo "<script> alert1();  </script>"; 
             
             } ?> 
        <!--LOGIN FORM-->
            <div id="id01" class="w3-modal">
                <div style="width:50%;" class="w3-modal-content w3-animate-top w3-card-8">

                    <form id="myform" method="post" action="loginfinal.php">


                        <div class="w3-container w3-teal">
                            <header>
                                <span onclick="document.getElementById('id01').style.display='none'"
                                      class="w3-closebtn">×</span>
                                <h2>LogIn</h2>
                            </header>
                        </div>
                
                            <div class="w3-group">
                                <input style="margin-left:2%; width:80%; color:black; " class="w3-input" type="text" name="user_name" required>
                                <label style="margin-left:2%; width:80%;" class="w3-label w3-validate w3-large">User Name</label><br>
                            </div>
                
                <div class="w3-group">
                    <input style="margin-left:2%;width:80%; color:black;" type="password" name="pass" class="w3-input" required>
                    <label style="margin-left:2%;width:80%;" class="w3-label w3-validate w3-large">Password</label><br>

                    <!--label style="margin-left:2%;width:80%; color:black; border: 0px solid; background-color:white; <?php error_reporting(0); if($flag==1){$flag=0;} else {echo 'display:none;';} ?>" class="w3-label">wrong password</!--label><br /-->
           
                     <a onclick="f1(); f2();" style="text-decoration:underline; margin-left:2%;width:80%; cursor:pointer;">Restore Password</a>
                </div>

                <!--button style="margin-left:40%; margin-bottom:1.56%;" class="w3-btn w3-ripple w3-teal w3-large">LOGIN</!--button-->
                        <input style="margin-left:40%; margin-bottom:1.56%;" class="w3-btn w3-ripple w3-teal w3-large" type="submit" name="submit" value="LOGIN " action="loginfinal.php" /><br>
                <a id="fp" href="signup.php" style="margin-left:34%;margin-bottom:5%;">Not a member? Sign Up!</a>
                </form>

            </div>
            </div>
            
            <!--Scripts to close the modal and reset the contents of modal-->
            <script>
            function f1()
            {
             document.getElementById('id01').style.display='none';
            }
             function f2()
            {
               document.getElementById('id03').style.display='block';
            }
            </script>


            <!--Restore Password-->

             <div id="id03" class="w3-modal">
                    <div style="width:50%;" class="w3-modal-content w3-animate-top w3-card-8">
                        <form method="post" action="">
                            <div class="w3-container w3-teal">
                                <header>
                                    <span onclick="document.getElementById('id03').style.display='none'" class="w3-closebtn">×</span>
                                </header>
                            </div>
                
                                <div class="w3-group">
                                    <input style="margin-left:2%; width:80%; color:black; " class="w3-input" type="text" required>
                                    <label style="margin-left:2%; width:80%;" class="w3-label w3-validate w3-large">Enter Email</label>
                                </div>
                             <button style="margin-left:40%; margin-bottom:1.56%;" class="w3-btn w3-ripple w3-teal w3-large">Submit</button><br>
                     </form>
                    </div>
                </div>
         <!--SCRIPT-->
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

            <!--Smooth scrollup Code-->
            <script type="text/javascript">
            $(document).ready(function(){

                $(window).scroll(function(){
                    if ($(this).scrollTop() > 100) {
                        $('.scrollup').fadeIn();
                    } else {
                        $('.scrollup').fadeOut();
                    }
                });

                $('.scrollup').click(function(){
                    $("html, body").animate({ scrollTop: 0 }, 600);
                    return false;
                });

            });
            </script>
            <!--End of Smooth scroll up Code-->

            <script>
                function showInfo(id) {
                document.getElementById(id).classList.toggle("w3-show");
                }
            </script>
            <script>
                $('span.nav-btn').click(function () {
                    $('ul.collapse1').slideToggle();

                })

                $(window).resize(function () {
                    if ($(window).width() > 750){
                        $('ul.collapse1').removeAttr('style');
                    }

                })
            </script>

    </body>
</html>
