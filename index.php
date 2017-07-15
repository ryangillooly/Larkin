<html>
	<head>
		<title>Larkin</title>
		<meta   charset="utf-8" />
		<meta   name="viewport" content="width=device-width, initial-scale=1" />
		<link   rel="stylesheet" href="assets/css/main.css" />
		<link   rel="stylesheet" href="assets/css/lightweightYoutube.css" /> 
		<link   rel="stylesheet" href="assets/bootstrap/js/bootstrap.js" /> 
		<link   rel="stylesheet" href="assets/bootstrap/js/bootstrap.min.js" /> 
        
        <!-- Load JavaScript files --> 
        <script type="text/javascript" src="assets/js/jquery.min.js"                      ></script>
        <script type="text/javascript" src="assets/js/jquery.scrollex.min.js"             ></script> 
        <script type="text/javascript" src="assets/js/jquery.scrolly.min.js"              ></script>
        <script type="text/javascript" src="assets/js/skel.min.js"                        ></script>
        <script type="text/javascript" src="assets/js/util.js"                            ></script>
        <script type="text/javascript" src="assets/js/main.js"                            ></script> 
        <script type="text/javascript" src="assets/js/lightweightYoutube.js"              ></script> 
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
            
        <!-- Load the PHP mailing script -->
        <?php require ('assets/php/mail.php'); ?>    
        
        <script>
            
        //----------------------------------------------------------------------------------------------------------------------------------------
            function submitForm(form)
            {
               var proceed  = true;       
               var re      = /^[\w]+$/;
               var name    = $('#name').val();
               var email   = $('#email').val();
               var message = $('#message').val();
                
              if (name == "")   
              {
                  error = "Please enter: Full Name";         
                  $('#name').focus();
                  proceed = false;
                  
                  alert(error);
              }
                
              if (email == "")  
              {
                  error = "Please enter: E-Mail address";   
                  $('#email').focus();
                  proceed = false;
                  alert(error);
              }
                
              if (message == "")
              {
                  error = "Please enter:  Message";          
                  $('#message').focus();
                  proceed = false;
                  alert(error);
              }


               if(proceed == true)
               {
                   $("#popup").append('<div class="loader"></div>');          

                   $.ajax(
                   {
                        type:    "POST"                ,
                        url:     "assets/php/mail.php" ,
                        data:    $(form).serialize()   ,
                        success: function(result)
                        {
                            $('#popupForm').html("<div style='top: 40%; width: 100%; display: block; position: absolute;' id='message'></div>");

                            $('#message').html("<h2>Contact Form Submitted!</h2><br /><p>We will be in touch soon.</p>")
                            .hide()
                            .fadeIn(2000, function() {})
                            .delay(1000)
                            .fadeOut(3000, function() {});

                            $('#popupForm').delay(3000).fadeOut(3000);
                            

                            $("#name").val("");
                            $("#message").val("");
                            $("#email").val("");
                        }
                   });
               }
            }
            
        //----------------------------------------------------------------------------------------------------------------------------------------
            
            function closePopup() 
            {
                document.getElementById("popupForm").style.opacity = "0";
                document.getElementById("popupForm").style.visibility = "Hidden";
                $("#name").val("");
                $("#message").val("");
                $("#email").val("");
            }
            
        //----------------------------------------------------------------------------------------------------------------------------------------
                                     
            function showPopup()
            {
                document.getElementById("popupForm").style.opacity = "1";
                document.getElementById("popupForm").style.visibility = "Visible";
            }
            
            var bg = $("#banner");

            function resizeBackground() 
            {
                bg.height( $(window).height() + 60);
            }

            $(window).resize(resizeBackground);
            resizeBackground();
    
        </script>
            
        <!-- Trigger "Submitter" button click event and "Close" button event -->

    </head>
	<body class="landing">
         
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
                                    <li><a href="index.html"   >Home</a></li>
                                    <li><a href="webpages/about.php" >About Us</a></li>
                                    <li><a href="elements.html">Elements</a></li>
                                    <li><a href="#"            >Sign Up</a></li>
                                    <li><a href="#"            >Log In</a></li>
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
                    <!--<p>Teenage Indie/Rock Band<br />-->
                </div>
                <a href="#one" class="more scrolly">Check us out</a>
            </section>
 
            <!-- ABOUT US --> 
            <section id="one" class="wrapper style1 special">
                <div class="inner about">
                    <header class="major">
                        <h2>About us<br /></h2>
                        <p>
                            We are a newly established indie/rock band based in Devizes, England. <br />
                           Currently gigging around and releasing our new original songs to get the <br />
                           name out there! I hope you enjoy the page and if interested, please contact <br />
                           us using the contact form at the bottom. <br />
                           <br />
                            If you would like to know more about us, please click <button id="aboutUs" onclick="aboutUs()">here</button>
                            
                        </p>
                    </header>
                    <ul class="icons major">
                        <li><span class="icon fa-music major style1"     ><span class="label">Lorem</span></span></li>
                        <li><span class="icon fa-microphone major style1"><span class="label">Ipsum</span></span></li>
                        <li><span class="icon fa-headphones major style1"><span class="label">Dolor</span></span></li>
                    </ul> 
                </div>
            </section>

            <!-- BAND MEMBERS -->
            <section id="two" class="wrapper alt style2">
                <section class="spotlight">
                    <div class="image"><img src="images/SamBishop.jpg" alt="" /></div>
                    <div class="content">
                        <h2>
                            Sam Bishop<br />
                            Lead Singer / Pianist
                        </h2>
                        <p>Aliquam ut ex ut augue consectetur interdum. Donec hendrerit imperdiet. Mauris eleifend fringilla nullam aenean mi ligula.</p>
                    </div>
                </section>
                <section class="spotlight">
                    <div class="image"><img src="images/FinleyTrusler.jpg" alt="" /></div>
                    <div class="content">
                        <h2>
                            Finley Trusler<br />
                            Backup Singer / Guitarist
                        </h2>
                        <p>Aliquam ut ex ut augue consectetur interdum. Donec hendrerit imperdiet. Mauris eleifend fringilla nullam aenean mi ligula.</p>
                    </div>
                </section>

            </section>

            <!-- VIDEOS -->
            <section id="three" class="wrapper style3 special">
                <div class="inner videos">
                    <header class="major"> 
                        <h2>Videos of us</h2> 
                        <p>Check out our Facebook videos below! Some are busking, recording covers...or just us being us!</p>
                    </header>              
                    
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                          <!-- Indicators -->
                          <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                          </ol>

                          <!-- Wrapper for slides -->
                          <div class="carousel-inner">
                            <div class="item active">
                              <div class="youtube-player" data-id="D6e0om6Bztc"></div>
                            </div>

                            <div class="item">
                              <div class="youtube-player" data-id="D6e0om6Bztc"></div>
                            </div>

                            <div class="item">
                              <div class="youtube-player" data-id="D6e0om6Bztc"></div>
                            </div>
                          </div>

                          <!-- Left and right controls -->
                          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                          </a> 
                          <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                          </a>
                    </div>
                </div>
                
                
            </section>

            <!-- CALENDAR -->
            <section id="two" class="wrapper style1 special">                        				
                <div class="full schedule">
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
                <div class="full location">	
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
                        <li><a id="contactbutton" class="button fit special" onClick="showPopup()">Contact us</a></li>
                        <li><a id="learnbutton"   class="button fit"                          >Learn More</a></li>
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
                            <input type="text" name="name" id="name"/>
                        </div>
                        <div class="field half">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email"/>
                        </div>
                        <div class="field">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" rows="4"></textarea>
                        </div>
                        <ul class="actions">
                            <li><a id="submitter"       class="button special"     onclick="return submitForm(form)">Submit</a></li>

                        
                            <li><a id="closeContactBox" class="button fit special" onclick="closePopup()"           >Close</a></li>
                        </ul>
                    </form>
            <!---------------------->
                </div>
            </div>

            <!-- FOOTER -->
            <footer id="footer">
                <ul class="icons">
                    <li><a href="#"                                      class="icon fa-twitter"   ><span class="label">Twitter</span></a></li>
                    <li><a href="https://www.facebook.com/larkinbanduk/" class="icon fa-facebook"  ><span class="label">Facebook</span></a></li>
                    <li><a href="#"                                      class="icon fa-instagram" ><span class="label">Instagram</span></a></li>
                    <li><a href="#"                                      class="icon fa-dribbble"  ><span class="label">Dribbble</span></a></li>
                    <li><a href="#"                                      class="icon fa-envelope-o"><span class="label">Email</span></a></li>
                </ul>
                <ul class="copyright">
                    <li>&copy; Larkin-Duo</li><li>All rights reserved</li>
                </ul>
            </footer>
            
        </div>
	</body>
</html>