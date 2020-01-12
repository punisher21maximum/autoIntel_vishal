

<?php
ob_start();

//name email profession phone org message

if (isset($_POST['submit'])) {

if (!empty($_POST['name'])) {
  if (!empty($_POST['email'])) {
    if (!empty($_POST['profession'])) {
      # code...

        if (!empty($_POST['message'])) {


         $name=$_POST['name'];
         $email=$_POST['email'];
           $profession=$_POST['profession'];
             $org=$_POST['org'];
               $message=$_POST['message'];
                 $phone=$_POST['phone'];




require 'PHPMailerAutoload.php';
$mail = new PHPMailer;

// SMTP configuration
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'autointellservices@gmail.com';
$mail->Password = 'Auto@123';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('autointellservices@gmail.com', 'Autointell services');
$mail->addReplyTo('autointellservices@gmail.com', 'Autointell services');

// Add a recipient
$mail->addAddress('shroffsp@gmail.com');

// Add cc or bcc 


// Email subject
$mail->Subject = 'new customer notification';

// Set email format to HTML
$mail->isHTML(true);

// Email body content
$message = "<h1>New Message</h1></br><h3>Name : '$name'<br />Profession : '$profession'<br />Organization : '$org'<br />Email :- '$email'<br />Phone :'$phone'<br />Message :<br/></h3><p>$message</p>
    <p></p>";
$mail->Body = $message;

// Send email
if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
    echo "<script type='text/javascript'>alert('Message sent successfully!!')</script>";
}



          # code...
        }else{     echo "<script type='text/javascript'>alert('All * fields are required!!')</script>";}
        # code...

      }else{     echo "<script type='text/javascript'>alert('All * fields are required!!')</script>";}

    }else{     echo "<script type='text/javascript'>alert('All * fields are required!!')</script>";}

    # code...
  }else{     echo "<script type='text/javascript'>alert('All * fields are required!!')</script>";}

  # code...
}


  # code...ss


  ?>



<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AutoIntell Services - Automation to Intelligence</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">
    <style type="text/css">

        .dropdown-submenu {
    position: relative;
}

.dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -1px;
    min-width: 250px;
    width: 100%;
   
}
.dropdown-menu{

  min-width: 300px;
}
          @font-face{
    font-family: twobit;
    src: url(twobititallic.ttf) format("truetype");

  }

  h1{
  font-family: twobit;
}
h2,
h3,
h3,
h5,
h6,
p{
  font-family: Arial;
}
a{
  font-family: Arial;
}

    </style>
  

  </head>

  <body id="page-top">

    <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php"><img src="autointell.png"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
               <a class="btn btn-primary" href="index.php" >
    <font size="4"><strong>Home</strong></font>
  </a>
            </li><h3 class="text-black">|</h3>
              <div class="dropdown show">
  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    <font size="4"><strong>About</strong></font>
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="min-width: 200px;">
 <a href="about.html#about">&nbsp;About Us </a><div class="dropdown-divider"></div>
                  <a href="about.html#vision">&nbsp;Vision - Mission - Values</a></li><div class="dropdown-divider"></div>
                 <a href="about.html#leader">&nbsp;Leadership</a>
                 
  </div>
</div><h3 class="text-black">|</h3> 
           
              <div class="dropdown show">
  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    <font size="4"><strong>Services</strong></font>
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="min-width: 200px ;">
 <a href="services.html#consulting">&nbsp;Consulting & &nbsp;Advisory</a><div class="dropdown-divider"></div>
                  <a href="services.html#design">&nbsp;Design & &nbsp;Development</a></li><div class="dropdown-divider"></div>
                 <a href="services.html#value">&nbsp;Value Engineering</a><div class="dropdown-divider"></div>
                  <a href="services.html#training">&nbsp;Training & &nbsp;Mentoring</a><div class="dropdown-divider"></div>
                  <a href="services.html#dt">&nbsp;Digital &nbsp;Transformation</a>
  </div>
</div><h3 class="text-black">|</h3>
            <div class="dropdown show">
  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
 <font size="4"><strong>Success Stories</strong></font>
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
     <a href="projects.html">&nbsp;Overview</a><div class="dropdown-divider"></div>

 <a href="projects.html#proj1">&nbsp;Inclinometer Test Bed</a>  <div class="dropdown-divider"></div>
                 <a href="projects.html#proj2">&nbsp;Strain Gauge DAQ & &nbsp;Logging Solution</a> <div class="dropdown-divider"></div>
                  <a href="projects.html#proj3">&nbsp;Load Cell Test Bed &nbsp;Solution</a>  <div class="dropdown-divider"></div>
             <a href="projects.html#proj4"> &nbsp;POC of an End-to-End &nbsp;IIoT Solution for &nbsp;Utility Industry </a> <div class="dropdown-divider"></div>
 <a href="projects.html#dte">&nbsp;Digital Transformation &nbsp;Experiences</a>

  </div>
</div><h3 class="text-black">|</h3>
<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><font size="4"><strong>Resources</strong></font>
    <span class="caret"></span></button>
    <ul class="dropdown-menu" style="min-width: 170px;">
     
      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">&nbsp;Industrial Projects <i class="fa fa-caret-right" aria-hidden="true"></i>
<span class="caret"></span></a>
        <ul class="dropdown-menu">
           <a href="nothing.php">&nbsp;&nbsp;Brochures</a><div class="dropdown-divider"></div>
  <a href="nothing.php">&nbsp;&nbsp;Manuals</a>
      
        </ul>
      </li><div class="dropdown-divider"></div>
            <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">&nbsp;Internship Projects <i class="fa fa-caret-right" aria-hidden="true"></i>
<span class="caret"></span></a>
        <ul class="dropdown-menu">
           <a href="playlists.html#sensorinterfacing">&nbsp;&nbsp;Sensor Interfacing </a><div class="dropdown-divider"></div>
                  <a href="nothing.php">&nbsp;&nbsp;Communication Protocols</a><div class="dropdown-divider"></div>
                                    <a href="nothing.php">&nbsp;&nbsp;Serial Port Configuration </a><div class="dropdown-divider"></div>


                  <a href="nothing.php">&nbsp;&nbsp;File Logger</a>
      
        </ul>
      </li>
    </ul>
  </div><h3 class="text-black">|</h3>
        
 <div class="dropdown show">
  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    <font size="4"><strong>Contact</strong></font>
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="min-width: 200px ;">
 <a href="contact.php#getintouch">&nbsp;Get in Touch</a><div class="dropdown-divider"></div>
                  <a href="contact.php#location">&nbsp;Location</a></li><div class="dropdown-divider"></div>
                 <a href="contact.php#enqiry">&nbsp;Enquire</a>
            
  </div>
</div>
        

            
        
         
          </ul>
        </div>
      </div>
    </nav>






  

     



    <section id="getintouch">
      <div class="container  bg-dark text-center"><br /><br />
        <div class="row">
          <div class="col-lg-12 mx-auto text-white">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">
            <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 ml-auto text-white">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>+91 9922573482</p>
          </div>
          <div class="col-lg-6 mr-auto text-white">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:shroffsp@gmail.com" class="text-white">shroffsp@gmail.com</a>
            </p>
          </div>
        </div><br /><hr>
      </div><br /><br /><div class="container text-center" id="location"><div class="col-md-12"><h2>LOCATION</h2></div><div class="col-md-12 embed-responsive embed-responsive-16by9">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.2358416879474!2d73.83737441489343!3d18.56340318738401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf5785a51fe7%3A0x133f7a0dea8eec3e!2sLaboni+Towers%2C+Chikhalwadi%2C+Bopodi%2C+Pune%2C+Maharashtra+411020!5e0!3m2!1sen!2sin!4v1530841843370" width="1200" height="900" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>
    </section>
      <br />  <br />  <br /><hr>

      <div class="container text-center" id="enqiry"><div class="col-md-12"><h2>We would love to know what you are looking for!</h2></div><br /><br />
            <div class="form text-center" >
              <div id="sendmessage"></div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name*" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email*" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                 <div class="form-row">
                <div class="form-group col-lg-6">
                  <input type="text" class="form-control" name="profession" id="profession" placeholder="Profession *:Student/employee etc." data-rule="minlen:4" data-msg="Please enter profession" />
                  <div class="validation"></div>
                </div>
                  <div class="form-group col-lg-6">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone (Along with ISD code)" data-rule="minlen:4" data-msg="Please enter phone" />
                 
                </div></div>

                  <div class="form-group ">
                  <input type="text" class="form-control" name="org" id="org" placeholder="Organization name" data-rule="minlen:4" data-msg="Please enter Organization name" />
                 
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message*"></textarea>
                  <div class="validation"></div><br />* marked fields are cumpulsory !<br />
<div class="col-lg-12 col-md-6 text-center">  
                                      <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-xl js-scroll-trigger">
</div>

                </div>

               

                </div>
              </form>
            </div><br /><br /><br />
            <div class="bg-dark text-white"><br /><br />
              <div class="row"><div class="col-md-12 text-center"><h3>We would love to know what you are looking for!</h3><br />
                             <a class="btn btn-light btn-xl sr-button" href="contact.php" >
    <h2>Contact</h2>
  </a></div></div><br /><hr class="text-white"><br /><br />
              

              <div class="container text-center "><div class="row"><div class="col-md-4">        <a class="navbar-brand js-scroll-trigger" href="index.php"><img src="autointell.png"></a>
<br /><h4>Connect with us to get quick updates </h4><br /><a href="https://www.facebook.com/pg/autointell/services/"><i class="fa fa-2x fa-facebook text-white mb-3 sr-icons"> | </i></a>
<a href="https://twitter.com/AutointellS"><i class="fa fa-2x  fa-twitter
 text-white mb-3 sr-icons"> | </i></a><a href="https://www.linkedin.com/in/sandeep-shroff/"><i class="fa fa-2x fa-linkedin text-white mb-3 sr-icons"></i></a></div>
            <div class="col-md-4 text-white "><br /><br /><div ><a href="index.php" class="text-white">HOME</a><br /><a href="about.html" class="text-white">ABOUT</a><br /><a href="services.html" class="text-white">SERVICES</a><br /><a href="projects.html" class="text-white">PROJECTS</a><br /><a href="nothing.php" class="text-white">RESOURCES</a><br /><a href="contact.php" class="text-white">CONTACT</a><br /></div></div><div class="col-lg-4"> <i class="fa fa-phone fa-2x mb-3 sr-contact"></i>
            <p>+91 9922573482</p><br /><br /> <i class="fa fa-envelope-o fa-2x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:shroffsp@gmail.com" class="text-white">shroffsp@gmail.com</a>
            </p>

          </div></div></div>


<!-- 16:9 aspect ratio -->


<!-- 4:3 aspect ratio -->

          

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>
        <script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>

  </body>

</html>
