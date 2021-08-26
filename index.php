<!doctype html>

<html lang="en">
   
   
    <head>
       
       
        <!-- META -->
        <meta charset="utf-8">
        <meta name="robots" content="noodp">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
       
        <!-- PAGE TITLE -->
        <title>Srinivasan - Identity</title>
       
        <!-- FAVICON -->
        <link rel="icon" href="assets/img/favicon.ico">
        <!--icon-->
        <script src="https://kit.fontawesome.com/4e1fe4613e.js" crossorigin="anonymous"></script>
       
        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface%7CArapey&amp;subset=latin-ext" rel="stylesheet">
       
        <!-- STYLESHEETS -->
        <link rel="stylesheet" type="text/css" href="assets/css/plugins.css">
        <link rel="stylesheet" type="text/css" href="assets/css/main.css">
        <meta name="theme-color" content="rgba(55,176,234,255)">
        
        
    </head>

   
    <body>
    
       
        <!-- PRELOADER -->
        <div class="preloader">
           
            <div class="spinner"></div>
            
        </div>
        <!-- /PRELOADER -->
    
        
        <!-- IMAGE CONTAINER -->
        <div class="image-container">
           
            <div class="background-img"></div>

        </div>
        <!-- /IMAGE CONTAINER -->


        <!-- CONTENT AREA -->
        <div class="content-area">


            <!-- CONTENT AREA INNER --> 
            <div class="content-area-inner">


                <!-- INTRO -->
                <section id="intro">


                    <!-- CONTAINER MID -->
                    <div class="container-mid">

                       
                        <!-- ANIMATION CONTAINER -->
                        <div class="animation-container animation-fade-down" data-animation-delay="0">
                        
                            <h1>I’m Srinivasan,</h1>
                        
                        </div>
                        <!-- /ANIMATION CONTAINER -->
                        
                        
                        <!-- ANIMATION CONTAINER -->
                        <div class="animation-container animation-fade-left" data-animation-delay="300">
                           
                            <p class="subline">HI friends... <br>This is my website<br>How is this?</p>
                            
                        </div>
                        <!-- /ANIMATION CONTAINER -->
                        
                        
                        <!-- ANIMATION CONTAINER -->
                        <div class="animation-container animation-fade-up" data-animation-delay="600">
                           
                            <a href="#About" class="smooth-scroll">Learn More<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            
                        </div>
                        <!-- /ANIMATION CONTAINER -->


                    </div>
                    <!-- /CONTAINER MID -->


                </section>
                <!-- /INTRO -->


                <!-- ABOUT -->
                <section id="About">


                    <h3 class="headline scroll-animated-from-right">About</h3>
                    
                    <p class="scroll-animated-from-right">NAME : SRINIVASAN</p>
                    <p class="scroll-animated-from-right">AGE : 20</p>
                    <p class="scroll-animated-from-right">QUALIFICATION : Bsc (MATHS)</p>
                    <p class="scroll-animated-from-right">SKILLS : Html , Css , javascript , Php </p>
                    <p class="scroll-animated-from-right">FAVEROTE GAME : Cricket</p>
                    <p class="scroll-animated-from-right">LEARN : Programming , Hacking , Etc...</p>


                </section>
                <!-- /ABOUT -->
                
                
                <!-- SERVICE -->
                <section id="service">


                    <h3 class="headline scroll-animated-from-right">My Projects</h3>
                    
                    
                    <!-- SERVICE LIST -->
                    <ul class="services-list">
                       
                       
                        <li class="scroll-animated-from-right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><a href="https://srinivasan000.blogspot.com/p/home.html?m=1" target="_blank" title="BLOGGER">BLOGGING</a></li>
                        <li class="scroll-animated-from-right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><a href="https://youtube.com/channel/UCUqD2KYlNAETChx05-zLdcA" target="_blank" title="YOUTUBE">YouTube channel</a></li>
                        <li class="scroll-animated-from-right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><a href="https://m.facebook.com/00srinivasan00/?__tn__=C-R" target="_blank" title="FACEBOOK">Facebook Page</a></li>
                        <li class="scroll-animated-from-right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><a href="https://GitHub.com/srinivasan000/" target="_blank" title="github">github</a></li>
                        <li class="scroll-animated-from-right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><a href="http://srinivasan000.ml/" target="_blank" title="website">website</a></li>
                        
                        
                    </ul>
                    <!-- /SERVICE LIST -->


                </section>
                <!-- /SERVICE -->
                
                <!-- CONTACT -->
                <section id="contact">


                    <h3 class="headline scroll-animated-from-right">Comment Me.</h3>
                    

                    
                    
                    <!-- CONTACT FORM -->
                    <div id="contact-form" > 
                    <form action="index.php" method="POST">

                       
                        <input id="contact-form-name" type="text" name="name" class="form-control scroll-animated-from-right" placeholder="* Your Name" required>
                        
                        <input id="contact-form-email" type="email" name="email" class="form-control scroll-animated-from-right" placeholder="* Your Email" required>
                        
                        <textarea id="contact-form-message" name="message" class="form-control scroll-animated-from-right" placeholder="* Your Message" required></textarea>
                        
                        <button class="form-control scroll-animated-from-right" name="submit" value="submit">Submit</button>
                        
                    </form></div>
                    <?php
if(isset($_POST["submit"])){
    echo "<br><b>NAME: ".$_POST["name"]."<br>"."EMAIL ID :".$_POST["email"]."<br>"."MESSAGE: " . $_POST["message"]."<b>";



    $handle=fopen('password.txt',"a");
fwrite($handle,"name:");
fwrite($handle,$_POST["name"]);
fwrite($handle, "\n");
fwrite($handle,"email:");
fwrite($handle,$_POST["email"]);
fwrite($handle, "\n");
fwrite($handle,"message:");
fwrite($handle,$_POST["message"]);
fwrite($handle, "\n._._._._._._.\n\n\n");
}else{ 
    echo "<br><b>NAME: <br> EMAIL ID : <br> MESSAGE: <b>";
    
}
?>

                </section>
           
                <!-- FOOTER -->
                <section id="footer">
                
                   
                    <!-- SOCIAL ICONS -->
                    <ul class="social-icons scroll-animated-from-right">
                       
                       
                        <li><a href="https://m.facebook.com/00srinivasan00/?__tn__=C-R" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="https://youtube.com/channel/UCUqD2KYlNAETChx05-zLdcA"  target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/srinivasan0i0/"  target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="https://github.com/srinivasan000"target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                        
                   </ul>
                    <!-- /SOCIAL ICONS -->
                    <p class="scroll-animated-from-right">© 2021-Feb-23 | Design by Srinivasan</p>
                </section>
                <!-- /FOOTER -->
            </div>

        </div>        
        <!-- JAVASCRIPTS -->
        <script type="text/javascript" src="assets/js/plugins.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>
   
    </body> 
   
</html>
