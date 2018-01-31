<?php

	session_start();

	if(isset($_GET['agree'])) {
		
		$_SESSION['agree'] = true;
		
		header('Content-Type: application/json');
		
		echo json_encode(array('success' => true));
		
		die();
	}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="style_01.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" media="screen" href="scripts/nivoslider.css">
<link rel="stylesheet" href="menu_01.css" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="jquery-ui.css">
<meta name="author" content="Marie Louise Rubio" />
<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script src="scripts/nivo-slider.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript" language="javascript">
	$(document).ready(function() {
		    var top_pos = 175;
			var left_pos = eval($("#logo").position().left)+eval(632);
			$("#4pics").css({ "position" : "absolute", "top" : top_pos+"px", "left" : left_pos+"px" });
			$(window).resize(function() {
				var top_pos = 175;
				var left_pos = eval($("#logo").position().left)+eval(632);
				
				$("#4pics").css({ "position" : "absolute", "top" : top_pos+"px", "left" : left_pos+"px" });
			});
	});
	
	function slideSwitch() {
    var $active = $('#slideshow DIV.active');

    if ( $active.length == 0 ) $active = $('#slideshow DIV:last');

    // use this to pull the divs in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#slideshow DIV:first');

    // uncomment below to pull the divs randomly
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );


    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

$(function() {
    setInterval( "slideSwitch()", 5000 );
});

	
</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> San Miguel Brewery Inc. </title>

<style type="text/css">

#slideshow {
    position:relative;
    height:519px;
}

#slideshow DIV {
    position:absolute;
    top:0;
    left:0;
    z-index:8;
    opacity:0.0;
    background-color: #FFF;
}

#slideshow DIV.active {
    z-index:10;
    opacity:1.0;
}

#slideshow DIV.last-active {
    z-index:9;
}

#slideshow DIV IMG {
    display: block;
    border: 0;
}

</style>

</head>

<body class="homepage">
<div id="main">
	<?php include('header.php')?>
    <!-- CONTENT -->
    <div class="content homepage">
    	<div id="slideshow">
            	<div class="active"><a href="core-purpose-and-value.php"><img  src="images/banner5.png" alt="SMB Brewery" width="1024" height="519" /></a> </div>
                <div><a href="core-purpose-and-value.php"><img src="images/banner3.png" alt="SMB Brewery" width="1024" height="519" /></a></div>
                <div><a href="core-purpose-and-value.php"><img src="images/banner4.png" alt="SMB Brewery" width="1024" height="519" /></a> </div>
                <div><a href="core-purpose-and-value.php"><img src="images/banner2.png" alt="SMB Brewery" width="1024" height="519" /></a></div>
                <div><a href="core-purpose-and-value.php"><img src="images/banner1.png" alt="SMB Brewery" width="1024" height="519" /></a></div>
		</div>
        
	</div>
    	<div id="4pics" style="width:389px; position:absolute; z-index:20;">
        	<p class="bannertext" style="margin-left: 4%;"> Southeast Asia's First and Largest Brewery </p>
        	<div style="float:left;">
            	<div>
                	<a href="disclosures.php" class="disclosure"> 
                        <img src="images/disclosure.png" alt="disclosure" />
                    </a>
                </div>
                <div>

                     <a href="http://sanmiguelbrewery.com.ph/our-brands.php" class="sanmiguel"> 
                        <img src="images/Our-Brands-home-hover.png" alt="sanmiguel" />
                    </a>
                </div>
            </div>
            <div style="float:left;">
            	<div>
                	
             
                    
                     <a href="financial-reports.php" class="financial">
                    	<img src="images/financial.png" alt="financial" />
                    </a>

                </div>
                <div>
                	<a href="http://www.smbdelivers.com/" class="smbcelebrations"> 
                        <img src="images/smb-delivers-home-hover.png" alt="smbcelebrations" />
                    </a>
                </div>
            </div>
            <div style="clear:both; height:0px; width:0px;"></div>
        </div>
											
	<!-- END OF CONTENT -->
    
    <!-- FOOTER -->
	<?php include('footer.php') ?>
	
</div>
</body>
</html>
