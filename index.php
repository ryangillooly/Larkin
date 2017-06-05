<html>
	<head>
		<title>Larkin</title>
		<meta   charset="utf-8" />
		<meta   name="viewport" content="width=device-width, initial-scale=1" />
		<link   rel="stylesheet" href="assets/css/main.css" />
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script> 
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <?php require ('mail.php'); ?>    
        <script type="text/javascript">
            $(document).ready(function() {
                
                $("#closeContactBox").click(function(){
                    $('#popupForm').hide();
                    $("#name").val("");
                    $("#message").val("");
                    $("#email").val("");
                });
                
                $("#Submitter").click(function(){

                    $("#popup").append('<div class="loader"></div>');          
                    
                   $.ajax({
                        type: "POST",
                        url:  "mail.php",
                        data: $(form).serialize(),
                        success: function(result){
                            
                            $('#popupForm').html("<div style='top: 40%; width: 100%; display: block; position: absolute;' id='message'></div>");
                            
                            $('#message').html("<h2>Contact Form Submitted!</h2><br /><p>We will be in touch soon.</p>")
                            .hide()
                            .fadeIn(2000, function() {})
                            .delay(1000)
                            .fadeOut(3000, function() {});
                            
                            $('#popupForm').delay(4000).fadeOut(3000);
                            
                            $('#').focus();
                            
                            $("#name").val("");
                            $("#message").val("");
                            $("#email").val("");
                    }});
                    
                });
                
            });
        </script>
    </head>
	<body class="landing">
         
         <!-- Load JQuery to allow initial fade effect -->


		<!-- Page Wrapper -->
			<div id="page-wrapper">
                
				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.html">Larkin</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="index.html">Home</a></li>
											<li><a href="generic.html">Generic</a></li>
											<li><a href="elements.html">Elements</a></li>
											<li><a href="#">Sign Up</a></li>
											<li><a href="#">Log In</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header> 

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>Larkin</h2>
							<p>Teenage Indie/Rock Band<br />
						</div>
						<a href="#one" class="more scrolly">Check us out</a>
					</section>

				<!-- ABOUT US -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
                                <h2>About us<br /></h2>
								<p>
                                    We are a newly established indie/rock band based in Devizes, England. <br />
                                   Currently gigging around and releasing our new original songs to get the <br />
                                   name out there! I hope you enjoy the page and if interested, please contact <br />
                                   us using the contact form at the bottom
                                </p>
							</header>
							<ul class="icons major">
								<li><span class="icon fa-music major style1"><span class="label">Lorem</span></span></li>
								<li><span class="icon fa-microphone major style1"><span class="label">Ipsum</span></span></li>
								<li><span class="icon fa-headphones major style1"><span class="label">Dolor</span></span></li>
							</ul>
						</div>
					</section>

				<!-- BAND MEMBERS -->
					<section id="two" class="wrapper alt style2">
						<section class="spotlight">
							<div class="image"><img src="images/SamBishop.jpg" alt="" /></div><div class="content">
								<h2>Sam Bishop<br />
								Lead Singer / Pianist</h2>
								<p>Aliquam ut ex ut augue consectetur interdum. Donec hendrerit imperdiet. Mauris eleifend fringilla nullam aenean mi ligula.</p>
							</div>
						</section>
						<section class="spotlight">
                            <div id='imgoverlay'></div>
							<div class="image"><img src="images/FinleyTrusler.jpg" alt="" /></div><div class="content">
								<h2>Finley Trusler<br />
								Backup Singer / Guitarist</h2>
								<p>Aliquam ut ex ut augue consectetur interdum. Donec hendrerit imperdiet. Mauris eleifend fringilla nullam aenean mi ligula.</p>
							</div>
						</section>

					</section>

				<!-- VIDEOS -->
					<section id="three" class="wrapper style3 special">
						<div class="inner">
							<header class="major">
								<h2>Videos of us</h2>
								<p>Check out our Facebook videos below! Some are busking, recording covers...or just us being us!</p>
							</header>
						</div>
					</section>
                
                <!-- CALENDAR -->
                    <section id="two" class="wrapper style1 special">                        				
						<div class="full">
							<header class="major">
                                <h2>Our Schedule</h2> 
				                <p>
                                   Want to check us out <b>LIVE</b>? Then please check the dates on our band calendar below.<br /> 
                                   If you are looking to book Larkin please check our available dates below and use the <br />
                                   Contact Us button at the bottom of the page <br />
                                </p>
                            </header>
                            <div class="calendar">
                                <iframe 
                                    id="calendar", 
                                    style="display: none;", 
                                    onload="this.style.display='block';", 
                                    width="100%",
                                    scrolling="no",
                                    height="500px",
                                    src=https://outlook.live.com/owa//calendar/f75ff986-3f7d-42ae-bb71-79430c19b7b6/629ba607-de99-42ce-89b4-8978e6732b97/cid-79CE9F28C511B0ED/index.html>
                                </iframe>
                            </div>
                        </div>
					</section>
                
				<!-- MAP -->
					<section id="two" class="wrapper style1 special">
						<div class="full">	
                            <header class="major">
                                    <h2>Band Location</h2>
                                    <p>
                                       Devizes is in the heart of the English countryside, take a look!
                                    </p>
                            </header>
                            <div class="mapoverlay" onClick="style.pointerEvents='none'"></div>
                            <iframe 
                                  src="https://www.google.com/maps/embed/v1/place?q=The%20Market%20Place,%20Devizes%20SN10%201JD,%20UK&zoom=17.5&key=AIzaSyBtOq-Z8GmWxqw_pn2xYrPMU0iSbfy3ydQ&q", 
                                  width="100%",
                                  height="500px">
                            </iframe>
                        </div>
					</section>
                
                <!-- CONTACT US -->
					<section id="cta" class="contact">
						<div class="inner">
							<header>
								<h2>How to get in touch</h2>
								<p>If you would like more information on Larkin or would like to book us, then please use the <i>Contact Us</i> button to the right.</p>
							</header>
							<ul class="actions vertical">
								<li><a href="#popupForm" id="contactbutton" class="button fit special">Contact us</a></li>
                                <li><a id="learnbutton" class="button fit">Learn More</a></li>
							</ul>
						</div>
					</section> 
                
                    <div id="popupForm">
                        <div id="popup">
                            <h2 class="major">Contact</h2>
                    <!---------------------->
                            <form method="post" name="form" id="form">
                                <div class="field half first">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" />
                                </div>
                                <div class="field half">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" />
                                </div>
                                <div class="field">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" rows="4"></textarea>
                                </div>
                                <ul class="actions">
                                    <li><input name="Submitter" id="Submitter" onClick="submitFormDetails()" type="button" value="Send Message" class="special" /></li>
                                    <li><input id="closeContactBox" type="button" class="special" value="Close"/></li>
                                </ul>
                            </form>
                    <!---------------------->
                        </div>
                    </div>
  
				<!-- FOOTER -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="https://www.facebook.com/larkinbanduk/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; Larkin-Duo</li><li>All rights reserved</li>
						</ul>
					</footer>
			
			</div>

		<!-- Scripts -->	

	</body>
</html>