<!DOCTYPE html>
<html>
<head>
	<meta name="author" content="Wink Hosting (www.winkhosting.com)" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
        <script src="js/main.js"></script>      
	<title>SP</title>
        <style></style>
</head>
<body>
	<div id="page" align="center">
		<div id="content" style="width:800px">
			<div id="logo">
                            <img src="img/logo/splogo.png"></img>
                            <div>MRT at our doorstep</div>
			</div>
			<div id="topheader">
				<div align="left" class="bodytext">
					<br />
					<strong>Singapore Poly</strong><br />
                            		Dover MRT<br />
					Neoh Tian Pok<br />
					Phone: 999<br />
					sales@sp.com
				</div>
				<div id="toplinks" class="smallgraytext">
					<a href="#">Home</a> | <a href="#">Sitemap</a> | <a href="#">Contact Us</a>
				</div>
			</div>
			<!--<div id="menu">
				<div align="right" class="smallgraytext" style="padding:9px;">
				</div>
			</div>-->
                    
                    
			<div id="menu">
				<div align="right" class="smallgraytext" style="padding:15px; margin-bottom: 20px;">
                                    <a href="practise.html">Practise</a> | <a href="lab.php">Lab Solutions</a> | <a href="javahtml.html">JavaScript</a> | <a href="https://esp.sp.edu.sg/webapps/blackboard/content/listContent.jsp?course_id=_52437_1&content_id=_1475664_1">Blackboard</a> | <a href="prac.php">PHP<a> | <a href="admin">Admin</a>
				</div>
			</div>
                        
                    
			<div id="contenttext">
				<h1>
					<span class="titletext">Solutions to CSAD Lab</span>
                                </h1>
                                <div class="bodytext" style="padding:12px;" align="justify">
                                <strong>Typing some stuff to prove that this website is original</strong><br />
                                <p><?php
                                //echo '<img src="img/flag.jpg" alt="flag" width="10px"/>';
                                
                                $countries = array(
                                    'Singapore', 
                                    'America/Adak', 
                                    'Asia/Seoul'
                                );
                                $dir = 'img/bg-images/';
                                // echo count($countries);
                                // echo $countries[1];
                                for ($z=0; $z!=count($countries); $z++) {

                                    date_default_timezone_set($countries[$z]);
                                
                                    $t = date("H");
                                    // capture the image files in an array
                                    $bg = glob($dir . '*.jpg');
                                    
                                    switch ($countries[$z]){
                                        case "Singapore":
                                            echo '<img src="img/flag.jpg" alt="flag" width="10px"/> ';
                                            break;
                                        case "America/Adak":
                                            echo '<img src="img/flag-ame.png" alt="flag" width="10px"/> ';
                                            break;
                                        case "Asia/Seoul":
                                            echo '<img src="img/flag-kor.png" alt="flag" width="15px"/> ';
                                            break;

       
                                        }
                                    if ($t < "12") {
                                        echo "早安!";
                                        $i = 0;
                                    } elseif ($t < "20") {
                                        echo "Good Afternoon!";
                                        $i = 1;
                                    } else {
                                        echo "Good Evening!";
                                        $i = 2;
                                    }
                                    echo " The time now in ", $countries[$z], " is ", date("h:i:s"), "<br>";
                                    $selectedBg = "$bg[$i]"; 
                               }
                               ?></p>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur id est   tincidunt nisl pellentesque tincidunt. Donec in mauris. Mauris neque magna,   consectetuer id, malesuada vitae, tincidunt sit amet, mi. Aliquam lacinia.   Suspendisse potenti. Proin justo lorem, rutrum ac, facilisis in, malesuada sed,   ligula. Mauris lobortis lacus at nibh. Aenean vitae odio vel odio placerat   hendrerit. Suspendisse lacus lacus, tempor id, pharetra eget, ornare sit amet,   pede. Sed aliquet, justo ac elementum pretium, arcu leo placerat est, a luctus   purus diam eget arcu. Nam augue diam, mollis a, scelerisque eget, aliquet   condimentum, pede. Vestibulum tristique lectus sed augue. Click the button below:
                                        
                                        <br /><br />
                                        <div class="dropdown">
                                            <button onclick="myFunction()" class="dropbtn">Click me</button>
                                            <div id="myDropdown" class="dropdown-content">
                                              <a href="#home">Home</a>
                                              <a href="#about">About</a>
                                              <a href="#contact">Contact</a>
                                            </div>
                                        </div>

                                        <br>
                                        <br>
					Aenean ut mauris luctus mauris interdum convallis. Nunc vestibulum sodales nulla. Nulla vitae massa. Maecenas vel tellus vitae elit mattis adipiscing. In pulvinar felis sed est. Mauris non mi. Duis ultrices dolor ut orci. Quisque lacinia arcu et purus. Sed euismod metus nec augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc dolor leo, aliquam a, placerat sit amet, accumsan eget, dolor. Sed lacinia augue in magna. Fusce sed enim. Vestibulum et mauris. Phasellus in lectus. Pellentesque eu elit in dolor ullamcorper sodales. Vestibulum interdum ornare ligula. Mauris felis odio, rhoncus sed, adipiscing fermentum, tincidunt eu, metus. Suspendisse viverra rhoncus purus.
                                        <?php
                                            date_default_timezone_set("Singapore");
                                            echo "The time in Singapore is ", date("h:i:s");
                                        ?>

				</div>
			</div>
			<div id="leftpanel">
				<div align="justify" class="graypanel">
					<span class="smalltitle">News</span><br /><br />
					<span class="smallredtext">October 19, 2021</span><br />
					<span class="bodytext">This website was born! Say hello to the genius called</span><br />
					<a href="#" class="smallgraytext">More...</a><br /><br />
					<span class="smallredtext">October 28, 2021</span><br />
					<span class="bodytext">This is the start of Lab 2.</span><br />
					<a href="#" class="smallgraytext">More...</a><br /><br />
					<span class="smallredtext">October 28, 2021</span><br />
					<span class="bodytext">This subject is CSAD btw.</span><br />
					<a href="#" class="smallgraytext">More...</a><br /><br />
				</div>
			</div>
			<div id="footer" class="smallwhitetext" style="background-image: url(<?php echo $selectedBg; ?>)">
				<a href="#">Home</a> | <a href="#">About Us</a> | <a href="#">Products</a> | <a href="#">Our Services</a> | <a href="#">Contact Us</a>
				| SP 
				&copy; 2021 | <a href="http://www.winkhosting.com" target="_blank">Hosting Colombia</a> 
			</div>
		</div>
	</div>
</body>
</html>