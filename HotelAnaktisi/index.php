<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Welcome</title>
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
    	
	<script src="modules\cslide\jquery.cross-slide.min.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery(function() {
							jQuery('#slideshow').crossSlide({
							  sleep: 9, fade: 2,variant: true
							}, [						
						{ src: 'images/banners/uda6wqw82di4kh186blf.jpg', alt: 'Rooms measuring 15 m² equipped with all the details expected of a superior 4 star hotel.', to:'up' },{ src: 'images/banners/v4vqrryxizavtqk4gwfl.jpg', alt: 'Modern and functional rooms measuring approximately 20-25 m² equipped with all the details expected of the hotel. The rooms have a king or queen size bed or two single beds.', to:'up' },{ src: 'images/banners/l63zfwtsr2tmrespc8x2.jpg', alt: '', to:'up' },{ src: 'images/banners/ti0z69fsn7f5u9o07wfk.jpg', alt: '', to:'up' },{ src: 'images/banners/y6lqa0a1zje87pe7q7uo.jpg', alt: '', to:'up' }], function(idx, img, idxOut, imgOut) {
							var img_alt_split = img.alt.split('##');
							var caption_width = jQuery('div#slideshow').width() - 20;						
							if(idxOut == undefined){							
							  /* starting single image phase, put up caption */
							  if(img.alt != ''){
								jQuery('div.slideshow-caption').click(function(){ if(img_alt_split[1] != undefined && img_alt_split[1] != '') appGoToPage(img_alt_split[1]); });
								jQuery('div.slideshow-caption').php(img_alt_split[0]).animate({ opacity: .7 })
								jQuery('div.slideshow-caption').fadeIn();
								if(caption_width != null) jQuery('div.slideshow-caption').width(caption_width);
							  }
							}else{
							  // starting cross-fade phase, take out caption
							  jQuery('div.slideshow-caption').click(function() { });
							  jQuery('div.slideshow-caption').fadeOut();
							}}) });</script>
		

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
<ul class="ltr"><li><a class="main_menu_link" href="index.php">Reception</a></li><li><a class="main_menu_link" href="https://www.google.com/maps">Πώς θα φτάσετε εδώ;</a></li></ul></div><div class="shadow"></div>
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
		echo "Welcome {$_SESSION["username"]} !<br>";
		echo "<a class=\"form_link\" href=\"logout.php\"><u>Log out</u></a>";
	}
?>
<!--============================= LOGIN   ===============================================-->		
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
				<h1 class="center_box_heading align_left">Καλωσήρθατε στο ξενοδοχείο Ανάκτηση και Εξόρυξη! 5* ! </h1>
				<td width="476" valign="top" class="style1"><p>Το Ανάκτηση και Εξόρυξη! 5* βρίσκεται κοντά στο κέντρο της Αθήνας. Χάρη στην τοποθεσία του πάνω σε κεντρικό δρόμο, Πατησίων, εξυπηρετείται άμεσα από τρόλεϊ και λεωφορεία. Για όσους επιθυμούν την προσέγγιση με δικό τους όχημα, υπάρχει στεγασμένος χώρος στάθμευσης δίπλα ακριβώς από το ξενοδοχείο που συνεργάζεται μαζί μας. </p>
              <p>Το κτίριο καθώς και όλοι οι χώροι είναι πρόσφατα ανακαινισμένοι. Άλλωστε τα 20 χρόνια εμπειρίας στο χώρο της φιλοξενίας μας έχουν υποδείξει ότι οι πελάτες έχουν ανάγκη να μπαίνουν σε ένα διαρκώς ανανεώσιμο περιβάλλον όπου το διακρίνει η αμεσότητα στην εξυπηρέτηση, η φιλικότητα και η εχεμύθεια απέναντι τους.</p>
            <p>Το ξενοδοχείο είναι πάντα ανοικτό σε 24ωρη βάση προσφέροντας τις υπηρεσίες του σε μεμονωμένους πελάτες, οικογένειες, και τουριστικά γκρουπ. Οποιαδήποτε στιγμή της ημέρας μπορείτε να επικοινωνήσετε μαζί μας στα 901-11-555555, όπου θα εξυπηρετηθείτε άμεσα, ή <a href="rooms.php"><strong>συμπληρώνοντας τη φόρμα κρατήσεων</strong></a> και λαμβάνοντας απάντηση μέσα σε 24 ώρες. </p>
            <p><span class="style2">Σε περίπτωση αποδεδειγμένης χρήσης πιστωτικής κάρτας απο μη κάτοχο ή απάτης επιστρέφεται το 50% της αγοράς.</span></p></td>
				
<p>Feel free to contact us anytime in case you have any questions or concerns. </p>
<div class="clear"></div>
<div class="line-hor"></div>
<div class="wrapper" line-ver="">
<div class="col-1">
<h3>Special Offers</h3>
<ul>
<li>Τελειο Ξενοδοχείο
</li><li>50% Discount for Restaraunt service 
</li><li>30% Discount for 3 days+ orders 
</li><li>FREE drinks and beverages in rooms 
</li><li>Exclusive souvenirs</li></ul></div>
<div class="col-2">
<h3>Τοποθεσία</h3>
<p>Eίμαστε και στο ΤΕΙ ΑΘΗΝΑΣ!</p>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3143.896410028925!2d23.675749699999997!3d38.00287665000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1bcace8cb49fb%3A0xd565e562863223b3!2zzqTOtc-Hzr3Ov867zr_Os865zrrPjCDOlc66z4DOsc65zrTOtc-Fz4TOuc66z4wgzorOtM-Bz4XOvM6xIM6RzrjOt869z47OvQ!5e0!3m2!1sel!2sgr!4v1434290061916" width="600" height="450" frameborder="0" style="border:0"></iframe>
<dl class="contacts-list">
		<!-- END OF MAIN CONTENT -->                    
			</div>
		</div>
	</div>
	<!-- FOOTER -->
	

<div id="footer-2">
Fassaris Panagiotis@ TEI OF ATHENS DEPARTMENT OF INFORMATICS © <a class="footer_link" href="">All Rights Reserved</a>&nbsp;<img src="images\divider.gif" width="1px" height="10px" alt="divider" style="margin:auto;">&nbsp;</div>    
</div>    

<script type="text/javascript" src="templates\x-brown\js\calendar.js"></script>
<script type="text/javascript">
var calendar = new Object();var trCal = new Object();trCal.nextMonth = "Next";trCal.prevMonth = "Previous";trCal.closeCalendar = "Close";trCal.icons = "templates/x-brown/images/";trCal.iconPrevMonth2 = "butPrevMonth2.gif";trCal.iconPrevMonth = "butPrevMonth.gif";trCal.iconNextMonth2 = "butNextMonth2.gif";trCal.iconNextMonth = "butNextMonth.gif";trCal.currentDay = "04";trCal.currentYearMonth = "2015-6";var minimum_nights = "1";var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];var days = ["Mon","Tue","Wed","Thu","Fri","Sat","Sun"];
cCheckDateOrder(document.getElementById("checkin_day"),"checkin_monthday","checkin_year_month","checkout_monthday","checkout_year_month");</script>
</body>
</html>
