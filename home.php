<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Website designer">
	  <meta name="keywords" content="web design,  web design, professional web design">
  	<meta name="author" content="Sam Ochu">
    <title>SAM TECHNOLOGY | Welcome</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/form.css">
    <link rel="stylesheet" href="js/pop.js">
    <link rel="icon" href="img/favicon.png">
  </head>
  <body style="background: pink;">
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">SAM TECHNOLOGY BRAND</span> WEBSITE DESIGNER</h1>
        </div>
        <nav>
          <ul>
            <li class="current"><a href="index.php">Home</a></li>
            <li><a href="cart.php">CART</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="services.php">Services</a></li>
          </ul>
        </nav>
      </div>
    </header>
    
    <div class="preloader">
            <div class="loader">
                <img src="img/favicon.png" alt="">
            </div>
        </div>

    <section id="showcase">
      <div class="container">
        <h1 style="color: fuchsia">SAM TECHNOLOGY Web Design</h1>
        <p style="color: fuchsia">Hello friends welcome to SAM TECHNOLOGY BRAND.<br>
        </p>
      </div>
    </section>

    <section id="newsletter">
      <div class="container">
       <h1>Subscribe To Our Newsletter</h1>
      <form method="post" action="subscription.php">
  <input type="email" name="email" placeholder="Enter Email..." autofocus required>
  <button type="submit" class="button_1">Subscribe</button>
</form>

      </div>
    </section>
    <div class="mains">
        <p>
            We are so happy to welcome you to our website.<br>
            
            <p>
              We are extremely welcome our customers to our site manufacturing business. We’re proud to provide quality site manufacturing services, from our qualified professionals.
              We use modern technology to make sure our customers find the best site.
          </p>
          <p>
              We believe that a decent site is the key to a great business. Therefore, we offer you services of manufacturing of high quality websites that meet your business requirements.
          </p>
        </p>
    </div>

    <section id="boxes">
      <div class="container">
        <div class="box">
          <img2 src="">
          <h3></h3>
          <p>
              
          </p>
          
        </div>
        <div class="box">
          <img src="">
          <h3></h3>
          <p>
              
          </p>
        </div>
        <div class="box">
          <img src="">
          <h3></h3>
          <p></p>
        </div>
      </div>
    </section>
    
    
     
     

    
      <button id="open-btn1" class="application">Application for Website</button>

<div id="contact-form1" class="modal">
  <div class="modal-content">
    <span class="close1">&times;</span>
       <form action="sent.php" method="$_POST">
        <h1>Application for Website</h1><br><br>
            
     <lable>First Name</lable><br>
     <input type="text" name="Lname" style="width: 100%; height: 40px;" max="5" placeholder ="Enter First name" autofocus required>
     <br><br>
     
     <lable>Middle Name</lable><br>
     <input type="text" name="Mname" style="width: 100%; height: 40px;" max="5" placeholder ="Enter Middle name" autofocus required>
     <br><br>
     
     <lable>Last Name</lable><br>
     <input type="text" name="Lname" style="width: 100%; height: 40px;" max="5" placeholder ="Enter Last name" autofocus required>
     <br><br>
     
     <lable>WhatsApp number</lable><br>
     <input type="number" name="number" placeholder="WhatsApp number" style="width: 100%; height: 40px;" required><br><br>
          
          <lable>Email</lable><br>
          <input type="email" name="email" placeholder="Enter Email..." style="width: 100%; height: 40px;" required><br><br>
          
          <lable>Leave Message</lable><br>
          <textarea placeholder="Leave your message....." name="message" style="width: 100%; height: 40px;" required></textarea>
          
          <br><br>
          
          
          
         
   
   <input type="text" name="dom" id=""style="width: 70%; height: 40px;" placeholder="domain">
   <select style="width: 25%; height: 41px;">
       <option>.com</option>
      <option>.uk</option>
      <option>.info</option>
      <option>.site</option>
      <option>.net</option>
      <option>.rf.gd</option>
   </select><br><br>
   
    <select id="selection1" name="web" style="width: 100%; height: 40px;">
      <option value="simple">Choose your website</option>
      <option value="Personal website"> For Personal</option>
      <option value="Cumpany website"> For Cumpany </option>
      <option value="Group website"> For Group </option>
      <option value="Business Website"> For Business </option>
      <option value="Not"> Not sure </option>
   </select><br><br>
   
   <select name="plan" style="width: 100%; height: 40px;">
       <option>Choose your plan</option>
       
       <option value="chini yaTsh. 30,000">below Tsh. 30,000</option>
       <option value="Tsh. 30,000">Tsh. 30,000</option>
       <option value="Tsh. 60,000">Tsh. 60,000</option>
       <option value="up to Tsh. 60,000">Up to Tsh. 60,000</option>
       
   </select><br><br>
   
   
   <lable>upload photos</lable><br>
          <input type="file" name="file" style="width: 100%; height: 40px;"></button>
          <br><br>
          
   <button type="submit" class="button_1" method="$_POST"> Submit </button>
   </form>
   
                </div>
            </div>
            
             <script>
// Get the modal
var modal = document.getElementById("contact-form1");

// Get the button that opens the modal
var btn = document.getElementById("open-btn1");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close1")[0];




// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


<?php
// Set the recipient email address here
$to = "samochuu@gmail.com";

// Set the email subject and message
$subject = "Details Form Submission";
$message = "Name: ".$_POST['name']."\n".
           "WhatsApp: ".$_POST['number']."\n".
           "Email: ".$_POST['email']."\n".
           "Message: ".$_POST['message']."\n".
           "Website : ".$_POST['web']."\n".
           "Domain: ".$_POST['domain']."\n".
           "Photo: ".$_POST['file'];
           
           
           

// Set the headers for the email
//$headers .= "From: ".$_POST['email'].\r"\n";
$headers .= "Reply-To: samochubrand@gmail.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send the email
mail($to, $subject, $message, $headers);

// Redirect the user to a thank you page
//header("Location: index.php");
?>

   
    
 
    
<div class="absolute"></div>
     <footer>
        <nav class = "navbar navbar-expand-sm bg-dark navbar-dark fixed-bottom p-1 " class="t2">  
   location: Tanga, Tanzania.<br>
   Designed by <b>SAM TECHNOLOGY BRAND</b><Br>
   <br>
     
      
        <ul class = "navbar-nav">  
     <li class = "nav-item">  
      <a class = "nav-link" href = "javascript:void(0)"> copyright SAM TECHNOLOGY BRAND 2023© | All Right Reseved </a>  
    </li>  
       </ul>
    </footer>
    <style>
        
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    
}

.preloader {
    min-height: 100vh;
    width: 100vw;
    display: flex;
    justify-content: center;
    align-items: center;
    
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1000;
}

.preloader .loader{
    width: 300px;
    position: absolute;
}

.preloader .loader img{
    width: 100%;
    height: 100%;
    border-radius: 50%;
}

        
        
        body{
  font: 15px/1.5 Arial, Helvetica,sans-serif;
  padding:0;
  margin:0;
 
}

/* Global */
.container{
  width:80%;
  margin:auto;
  overflow:hidden;
}

ul{
  margin:0;
  padding:0;
}

.button_1{
  height:38px;
  background:#e8491d;
  border:0;
  padding-left: 20px;
  padding-right:20px;
  color:#ffffff;
}

.button_1:hover{
    background-color: goldenrod;
}

.dark{
  padding:15px;
  background: Goldenrod;
  color: Maroon;
  margin-top:10px;
  margin-bottom:10px;
}

/* Header **/
header{
  background: orange;
  color:#ffffff;
  padding-top:30px;
  min-height:70px;
  border-bottom:#e8491d 3px solid;
}

header a{
  color:#ffffff;
  text-decoration:none;
  text-transform: uppercase;
  font-size:16px;
}

header li{
  float:left;
  display:inline;
  padding: 0 20px 0 20px;
}

header #branding{
  float:left;
}

header #branding h1{
  margin:0;
}

header nav{
  float:right;
  margin-top:10px;
}

header .highlight, header .current a{
  color:#e8491d;
  font-weight:bold;
}

header a:hover{
  color:#cccccc;
  font-weight:bold;
}

/* Showcase */
#showcase{
  min-height:400px;
  background:url('../img/showcase.png') no-repeat;
  background-position: center;
  background-size: cover;
  text-align:center;
  color:#ffffff;
}

#showcase h1{
  margin-top:100px;
  font-size:55px;
  margin-bottom:10px;
}

#showcase p{
  font-size:20px;
}

/* Newsletter */
#newsletter{
  padding:15px;
  color:#ffffff;
  background: darkblue;
}

#newsletter h1{
  float:left;
}

#newsletter form {
  float:right;
  margin-top:15px;
}

#newsletter input[type="text"],  input[type="select"], input[type="number"], select, textarea{
  padding:4px;
  height:38px;
  width:250px;
}


/* Boxes */
#boxes{
  margin-top:20px;
}

#boxes .box{
  float:left;
  text-align: center;
  width:30%;
  padding:10px;
}

#boxes .box img{
  width:90px;
}

/* Sidebar */
aside#sidebar{
  float:right;
  width:30%;
  margin-top:10px;
}

aside#sidebar .quote input, aside#sidebar .quote textarea{
  width:90%;
  padding:5px;
}

/* Main-col */
article#main-col{
  float:left;
  width:65%;
}

/* Services */
ul#services li{
  list-style: none;
  padding:20px;
  border: #cccccc solid 1px;
  margin-bottom:5px;
  background:#e6e6e6;
}

footer{
  padding:20px;
  margin-top:20px;
  color:#ffffff;
  background-color:#e8491d;
  text-align: center;
  bottom: 0;
}

.mains{
     margin: 0 auto;
    padding: 20px;
    background-color: fuchisia;
    box-shadow: 0 0 40px purple;
    border-radius: 5px;
    margin-top: 50px;
}

/* Media Queries */
@media(max-width: 768px){
  header #branding,
  header nav,
  header nav li,
  #newsletter h1,
  #newsletter form,
  #boxes .box,
  article#main-col,
  aside#sidebar{
    float:none;
    text-align:center;
    width:100%;
  }

  header{
    padding-bottom:20px;
  }

  #showcase h1{
    margin-top:40px;
  }

  #newsletter button, .quote button{
    display:block;
    width:100%;
  }

  #newsletter form input[type="email"], .quote input, .quote textarea{
    width:100%;
    margin-bottom:5px;
  }
  
 #newsletter form input[type="name"],  input[type="select"], input[type="number"], input[type="email"]{
      width:100%;
    margin-bottom:5px;
  }
  
  
.modal form input[type="name"],  input[type="select"], input[type="number"], input[type="email"]{
      width:100%;
      height: 30px;
    margin-bottom:5px;
  }
  
  .sticky {
         position: sticky;
         bottom: 10px;
         right: 10px;
         width: 50px;
         height: 50px;
         background: maroon;
      }
}


/* Azure
Aquamarine
Lavender
Rose
Goldenrod
Turquoise
Crimson
Fuchsia
Indigo
Peach
Periwinkle
Scarlet
Coral
Chartreuse
Mauve
Magenta
Maroon
Olive
Sapphire
Teal */
 hg{
     border-radius: 5px;
     text-align: center;
     justify-content: center;
 }

open-btn1{
  height:38px;
  background:#e8491d;
  border:0;
  padding-left: 20px;
  padding-right:20px;
  color:#ffffff;
}

    </style>

<script src="app.js">
    
</script>
  </body>
</html>
