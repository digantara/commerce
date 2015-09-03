<!DOCTYPE html>

<?php

include'function.php';
include 'validation.php'

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Digantara</title>
      <meta charset="utf-8">
      <link type="text/css" rel="stylesheet" href="styles/style.css" />
      <!--[if IE 6]>
      <script src="js/ie6-transparency.js"></script>
      <script>DD_belatedPNG.fix('#header img, #featured-section h2, #circles img, #frontpage-sidebar .read-more, .blue-bullets li, #sidebar .sidebar-button, #project-content .read-more, .more-link, #contact-form .submit, .jcarousel-skin-tango .jcarousel-next-horizontal, .jcarousel-skin-tango .jcarousel-prev-horizontal, #commentform .submit');</script>
      <style>body { behavior: url("styles/ie6-hover-fix.htc"); }</style>
      <link rel="stylesheet" href="styles/ie6.css" />
      <![endif]-->
      <!--[if IE 7]>
      <link rel="stylesheet" href="styles/ie7.css" />
      <![endif]-->
      <!--[if IE 8]>
      <link rel="stylesheet" href="styles/ie8.css" />
      <![endif]-->
   </head>
   <body class="page">
      <div id="wrap">
         <div id="header">
            <img src="images/3.jpg" height="120" width="200">
            <br/>
            <div id="nav">
               <ul class="menu">
                  <li><a href="index.php">Home</a></li>
                  <li>
                     <a href="services.php">Services</a>
                     <ul class="sub-menu">
                        <li><a href="Ecom.php">e-Commerce</a></li>
                        <li><a href="WebDevelopment.php">Web Development</a></li>
                        <li><a href="MobApplication.php">Mobile Application</a></li>
                        <li><a href="testing.php">Product Testing</a></li>
                     </ul>
                  </li>
                  <li><a href="portfolio.php">Portfolio</a></li>
                  <li><a href="clients.php">Clients</a></li>
                  <li class="current_page_item"><a href="contact.php">Contact</a></li>
               </ul>
            </div>
            <!--end nav-->
         </div>
         <!--end header--> <br/><br/>
         <hr>
         <br/>
         <div class="page-headline">Contact Us</div>
         <div id="main">
            <div id="contact-details">
               <h3 class="title">Get In Touch</h3>
               <div class="post">
                  <p align="justify">Please use the form on this page to discuss the possibility of working with us or contact us directly via phone or email.</p>
               </div>
               <h3>Contact Details</h3>
               <h4>Phone: <span>080 (0) 00000000</span></h4>
               <h4>Email: <span>support@digantara.com</span></h4>
            </div>
            <!--end contact-details-->
            <div id="contact-form-container">
        <div id="contact-form">
        
       	
	<form method="post" action="contact.php"> 
	<label>Name :</label><br>
	<input class="input" type="text" name="name" value="">
	<span class="error"><?php echo $nameError;?></span><br><br>					
		 
	<label>Email :</label><br>
	<input class="input" type="text" name="email" value="">
	<span class="error"><?php echo $emailError;?></span><br><br>	
						   
	<label>Subject:</label><br>
	<input class="input" type="text" name="subject" value="">
	<span class="error"><?php echo $subjectError;?></span><br><br>	
				
	<label>Message :</label><br>
	<textarea name="message" val=""></textarea>
	<span class="error"><?php echo $messageError;?></span><br><br>	
				
	<input class="submit" type="submit" name="submit" value="Submit">
    <span class="success"><?php echo $successMessage;?></span>
    </form>
        </div>  
    </div>
    <!--end contact-form-container-->
  </div> 
  <!--end main-->
   <div id="footer">
	
	<div  font-size=16px>

       <a href="index.php">Why Digantara</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a href="testcbn.php">Careers</a> &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="WebDevelopment.php">Web Development</a> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <a href="Ecom.php">E-Commerce</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;

	<a href="testing.php"> Testing</a> &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a href="MobApplication.php">Mobile Application</a>&nbsp;  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">About Us</a> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;<a href="services.php">Services</a>


</div>

<br/>


    <p align="center"  class="copyright">Copyright &copy; <a href="index.php">www.digantara.com</a> - All Rights Reserved </p>
  </div>
  <!--end footer-->
</div>
<!--end wrap-->


</body>
<div class="cache-images"><img src="images/red-button-bg.png" width="0" height="0" alt="" /><img src="images/black-button-bg.png" width="0" height="0" alt="" /></div>
<!--end cache-images-->
</html>
