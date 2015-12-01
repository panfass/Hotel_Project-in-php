<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Gallery</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="keywords" content="php hotel site, hotel online booking site">
	<meta name="description" content="ApPHP Hotel Site">
    <meta name="author" content="ApPHP Company - Advanced Power of PHP">
    <meta name="generator" content="ApPHP Hotel Site v3.9.1">

    <base href="">
	<link href="images\icons\apphp.ico" rel="SHORTCUT ICON">
  
    <link href="templates\x-brown\css\style.css" type="text/css" rel="stylesheet">
		<!--[if IE]>
	<link href="http://www.apphp.com/php-hotel-site/examples/sample2/templates/x-brown/css/style-ie.css" type="text/css" rel="stylesheet" />
	<![endif]-->

	<!-- Opacity Module -->
	<link href="modules\opacity\opacity.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="modules\opacity\opacity.js"></script>

	<script type="text/javascript" src="js\main.js"></script>
	<script type="text/javascript" src="js\cart.js"></script>	

    <script type="text/javascript" src="js\jquery-1.4.2.min.js"></script>
<!-- LyteBox v3.22 Author: Markus F. Hay Website: http://www.dolem.com/lytebox -->
<link rel="stylesheet" href="modules\lytebox\css\lytebox.css" type="text/css" media="screen">
<script type="text/javascript" src="modules\lytebox\js\lytebox.js"></script>
<script type="text/javascript" src="js\mootools.js"></script>
<!-- RokBox -->
<link rel="stylesheet" href="modules\rokbox\themes\dark\rokbox-style.css" type="text/css">
<link rel="stylesheet" href="modules\rokbox\themes\dark\rokbox-style-ie8.css" type="text/css">
<script type="text/javascript" src="modules\rokbox\rokbox.js"></script>
<script type="text/javascript" src="modules\rokbox\rokbox-config.js"></script>
    	
			

		<script type="text/javascript" src="http://www.apphp.com/js/demo.topbar.js"></script>
<link rel="stylesheet" type="text/css" href="http://www.apphp.com/css/style.demo.topbar.css">	
</head>

<body dir="ltr">
<a name="top"></a>
<div id="main">
	<!-- HEADER -->
	
<!-- header -->

<div id="header" style="height:207px;">
	<div class="row-1">
		<div class="wrapper">
			<div class="logo fleft">
				<h1><a href="index.php">Aνάκτηση&Εξόρυξη 5* </a></h1>
				<em>Hotel</em>
				<strong>
					Κάτι παραπάνω απο ξενοδοχείο...</strong>
			</div>

		</div>
	</div>

			<div class="row-4">
			<div class="row-4-inner">
				<ul class="nav nav_bg"><li><a href="index.php">Αρχικη</a></li><li><a href="rooms.php">Δωματια</a></li><li><a href="gallery.php">Γκαλερι</a></li><li><a href="restaurant.php">Παροχες</a></li><li><a class="current" href="testimonials.php">Κριτικες</a></li><li><a href="booking.php">Κρατησεις</a></li></ul>		  
			</div>
		</div>
		
	<div class="row-3">
					
<!-- language -->
			<div class="nav_language fleft">		
				<div style="margin-right:2px;font-size: medium;margin-top:5px;float:left;">Γλώσσες</div><div style="margin-top:5px;float:left;"><a href="index-35.php?page=pages&amp;system_page=testimonials&amp;lang=en" title="English"><img src="images\flags\el.gif" height="11px" title="Ελληνικά" alt="English" class="opacity_on"></a> </div>		
			</div>		
		
			<!-- currencies -->
			
			<div class="nav_currencies fleft">
			<div style="margin-right:2px;font-size: medium;margin-top:5px;float:left;">Νόμισμα</div>
			<select onchange="javascript:appSetNewCurrency('http://www.apphp.com/php-hotel-site/examples/sample2/index.php?page=pages&amp;system_page=testimonials&amp;currency=__CUR__',this.value)" name="currency" class="currency_select"><option value="USD" selected="selected">US Dollar<option value="EUR">Euro<option value="GBP">GB Pound<option value="AUD">AU Dollar</select>			</div>			

			<div class="header-search">
			
			
			</div>
			</form>			</div>
</div>				
	<!-- content -->
	<div id="content">
		<div class="wrapper">
			<div class="aside maxheight">
				<div class="box maxheight">
					<div class="inner">
						<!-- LEFT COLUMN -->
						<div class="left_box_container">


</div>
<div class="left_box_container">
<h3 class="side_box_heading">Πληροφορίες</h3>
<div class="side_box_content left">
<ul class="ltr"><li><a class="main_menu_link" href="index.php">Reception</a></li><li><a class="main_menu_link" href="https://www.google.com/maps">Πώς θα φτάσετε εδώ;</a></li></ul></div>
<div class="shadow"></div>
</div>
<div class="left_box_container">
<h3 class="side_box_heading">Είσοδος</h3>
<!--============================= LOGIN   ===============================================-->
<?php


	if(empty($_SESSION["user_id"]) )
	{
		echo " <div class=\"side_box_content left\">                                                                                                                      ";
		echo " <form class=\"authentication-form\" action=\"authenticate.php\" method=\"get\">                                                                               ";
		echo " 			<table border=\"0\" cellspacing=\"2\" cellpadding=\"1\">                                                                                              ";
		echo " 			<tr>                                                                                                                                            ";
		echo " 				<td>                                                                                                                                        ";
		echo " 					<input type=\"hidden\" name=\"submit_login\" value=\"login\">                                                                                 ";
		echo " 					<input type=\"hidden\" name=\"type\" value=\"customer\">                                                                                      ";
		echo " 					<input type=\"hidden\" name=\"token\" value=\"5ebd7d6d8d3746dfc9372db312be1c61\">				                                                ";
		echo " 				</td>                                                                                                                                       ";
		echo " 			</tr>                                                                                                                                           ";
		echo " 			<tr><td>Username:</td></tr>                                                                                                                     ";
		echo " 			<tr><td><input type=\"text\" style=\"width:130px\" name=\"login_usr\"  maxlength=\"50\" ></td></tr>                                                     ";
		echo " 			                                                                                                                                                ";
		echo " 			<tr><td>Password:</td></tr>                                                                                                                     ";
		echo " 			<tr><td><input type=\"password\" style=\"width:130px\" name=\"login_pswd\"  maxlength=\"20\"></td></tr>                                                 ";
		echo " 			                                                                                                                                                ";
		echo " 			<tr><td style=\"height:5px\"></td></tr>                                                                                                           ";
		echo " 			<tr><td><input class=\"form_button\" type=\"submit\" name=\"submit\" value=\"Login\"> <br></td></tr>                                                    ";
		echo " 			<tr><td></td></tr><tr><td><a class=\"form_link\" href=\"login.php\">Create account</a></td></tr><tr></tr></table>		    ";
		echo " 		</form></div>                                                                                                                                       ";
	}	
	else
	{
		echo "Welcome  {$_SESSION["username"]} !<br>";
		echo "<a class=\"form_link\" href=\"logout.php\"><u>Log out</u></a>";
	}
?>
<div class="shadow"></div>
</div>
<div class="left_box_container">
<h3 class="side_box_heading">Νέα</h3>
<div class="side_box_content left">
<ul class="news-block"><li><br><a class="category-news" href=""><i>Read more &raquo;</i></a></li></ul></div>
<div class="shadow"></div>
</div>
<div class="left_box_container">
<h3 class="side_box_heading">Πληρωμές</h3>
<div class="side_box_content left">
<div class="payment_instruments"><img src="images\ppc_icons\logo_paypal.gif" title="PayPal" alt="PayPal">
							  <img src="images\ppc_icons\logo_ccVisa.gif" title="Visa" alt="Visa">
							  <img src="images\ppc_icons\logo_ccMC.gif" title="MasterCard" alt="MasterCard">
							  <img src="images\ppc_icons\logo_ccAmex.gif" title="Amex" alt="Amex"></div></div>
<div class="shadow"></div>
</div>
<div class="left_box_container">
<h3 class="side_box_heading">Τοπική Ώρα</h3>
<div class="side_box_content left">
15 Ιουνίου, 2015<br>Πέμπτη 2:22 PM</div>
<div class="shadow"></div>
</div>
<div>&nbsp;</div>                            
						<!-- END OF LEFT COLUMN -->
	
						<!-- RIGHT COLUMN -->
												<!-- END OF RIGHT COLUMN -->
					</div>                  
				</div>
			</div>
			
			<div class="content">                    
				<!-- MAIN CONTENT -->
				<h1 class="center_box_heading align_left">Γκαλερί</h1><div class="pages_contents"><table class="gallery_table" border="0" cellspacing="5"><tr><td valign="top" align="center"><a href="images\gallery\home.jpg" rel="lyteshow[720 480](galbumafbirxww)" title="Picture #1"><img src="images\gallery\home_thumb.jpg" width="140px" height="105px" alt="icon" title="Picture #1" border="0"></a><br><a href="index-26.php?page=gallery&acode=afbirxww"><span title="General Images"><b>Γενικές Εικόνες</b> (1)</span></a></td><td valign="top" align="center"><a href="images\gallery\img1_1.jpg" rel="lyteshow[720 480](galbum7u9sfhaz)" title="Picture #2"><img src="images\gallery\img1_1_thumb.jpg" width="140px" height="105px" alt="icon" title="Picture #2" border="0"></a><a href="images\gallery\img1_2.jpg" rel="lyteshow[720 480](galbum7u9sfhaz)" title="Picture #3"></a><a href="images\gallery\img1_3.jpg" rel="lyteshow[720 480](galbum7u9sfhaz)" title="Picture #1"></a><br><a href="index-27.php?page=gallery&acode=7u9sfhaz"><span title="Single Rooms"><b>Μονά Δωμάτια</b> (3)</span></a></td><td valign="top" align="center"><a href="images\gallery\img2_1.jpg" rel="lyteshow[720 480](galbum0bxbqgps)" title="Picture #2"><img src="images\gallery\img2_1_thumb.jpg" width="140px" height="105px" alt="icon" title="Picture #2" border="0"></a><a href="images\gallery\img2_2.jpg" rel="lyteshow[720 480](galbum0bxbqgps)" title="Picture #3"></a><a href="images\gallery\img2_3.jpg" rel="lyteshow[720 480](galbum0bxbqgps)" title="Picture #1"></a><br><a href="index-28.php?page=gallery&acode=0bxbqgps"><span title="Double Rooms"><b>Διπλά Δωμάτια</b> (3)</span></a></td><td valign="top" align="center"><a href="images\gallery\img3_1.jpg" rel="lyteshow[720 480](galbum6z5i5ikr)" title="Picture #2"><img src="images\gallery\img3_1_thumb.jpg" width="140px" height="105px" alt="icon" title="Picture #2" border="0"></a><a href="images\gallery\img3_2.jpg" rel="lyteshow[720 480](galbum6z5i5ikr)" title="Picture #3"></a><a href="images\gallery\img3_3.jpg" rel="lyteshow[720 480](galbum6z5i5ikr)" title="Picture #1"></a><br><a href="index-29.php?page=gallery&acode=6z5i5ikr"><span title="Superior Rooms"><b>VIP</b> (3)</span></a></td></tr><tr><td valign="top" align="center"><a href="images\gallery\img4_1.jpg" rel="lyteshow[720 480](galbumgvgbrtmc)" title="Picture #2"><img src="images\gallery\img4_1_thumb.jpg" width="140px" height="105px" alt="icon" title="Picture #2" border="0"></a><a href="images\gallery\img4_2.jpg" rel="lyteshow[720 480](galbumgvgbrtmc)" title="Picture #3"></a><a href="images\gallery\img4_3.jpg" rel="lyteshow[720 480](galbumgvgbrtmc)" title=""></a><br><a href="index-30.php?page=gallery&acode=gvgbrtmc"><span title="Luxury Rooms"><b>SVIP Rooms</b> (3)</span></a></td><td valign="top" align="center"><img src="images\modules_icons\gallery\video_album.png" width="140px" height="105px" alt="icon" title="" border="0"><br><a href="index-31.php?page=gallery&acode=dkw3vvot"><span title="General Video"><b>General Video</b> (2)</span></a></td></tr></table></div>				<!-- END OF MAIN CONTENT -->                    
			</div>
		</div>
	</div>
	<!-- FOOTER -->

<script type="text/javascript" src="templates\x-brown\js\calendar.js"></script>
<script type="text/javascript">
var calendar = new Object();var trCal = new Object();trCal.nextMonth = "Next";trCal.prevMonth = "Previous";trCal.closeCalendar = "Close";trCal.icons = "templates/x-brown/images/";trCal.iconPrevMonth2 = "butPrevMonth2.gif";trCal.iconPrevMonth = "butPrevMonth.gif";trCal.iconNextMonth2 = "butNextMonth2.gif";trCal.iconNextMonth = "butNextMonth.gif";trCal.currentDay = "04";trCal.currentYearMonth = "2015-6";var minimum_nights = "1";var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];var days = ["Mon","Tue","Wed","Thu","Fri","Sat","Sun"];
cCheckDateOrder(document.getElementById("checkin_day"),"checkin_monthday","checkin_year_month","checkout_monthday","checkout_year_month");</script>

</body>
</html>
