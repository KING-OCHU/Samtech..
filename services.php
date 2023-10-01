<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <meta name="description" content="Website designer">
	  <meta name="keywords" content="web design,  web design, professional web design">
  	<meta name="author" content="Sam Ochu">
    <title>SAM TECHNOLOGY | SERVICES</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="img/favicon.png">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">SAM TECHNOLOGY BRAND</span> WEBSITE DESIGNER</h1>
        </div>
        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="cart.php">CART</a></li>
            <li class="current"><a href="services.php">Services</a></li>
          </ul>
        </nav>
      </div>
    </header>
    
    <div class="preloader">
            <div class="loader">
                <img src="img/favicon.png" alt="">
            </div>
        </div>

    <section id="newsletter">
      <div class="container">
        
  
    
    

<h1>Subscribe To Our Newsletter</h1>
<form method="post" action="subscription.php">
  <input type="email" name="email" placeholder="Enter Email..." autofocus required>
  <button type="submit" class="button_1">Subscribe</button>
</form>

      </div>
    </section>

    <section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">Services</h1>
          <ul id="services">
            <li>
              <h3>Website Design</h3>
              <p>We do website designer for personal, business, group and company's
              </p>
						  <p>We’re proud to provide quality site manufacturing services, from our qualified professionals.</p>
            </li>
            <li>
              <h3>Website Maintenance</h3>
              <p>SAM TECHNOLOGY BRAND provide website services for our customers and non-clients</p>
						  <p>We are so happy to help you to make website maintenance</p>
						  <p>Our customer care is working hard to make sure you're website is good no error no problems any time</p>
            </li>
            <li>
              <h3>Website Hosting</h3>
              <p>We do website hosting for free and pay</p>
						  <p>We are extremely welcome our customers to host with use we have good hosting meet your goal </p>
						  <p>Our price is like free</p>
            </li>
            
            <li>
                <h3>HTML AND CSS CLASS</h3>
                <p>We have online classes to teach yoy how you can make simple website page</p>
                
            </li>
          </ul>
        </article>

        <aside id="sidebar">
          <div class="dark">
            <h3>Leave your comment</h3>
            <form name="form" class="quote" action="send.php" onsubmit="return validateemail();">
  						<div>
  							<label>Name <span class="req">*</span></label><br>
  							<input type="text" name="name" id="name" placeholder="Name" required>
  						</div>
  						<div>
  							<label>Email</label><br>
  							<input type="text" name="email" id="email" placeholder="Email Address">
  						</div>
  						<div>
  							<label>Message <span class="req">*</span></label><br>
  							<textarea placeholder="Message"></textarea>
  						</div>
  						<button class="button_1" type="submit">Send</button>
					</form>
          </div>
        </aside>
      </div>
    </section>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;200;300;400;500;600;700&display=swap');

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

    .footers{
  padding:20px;
  margin-top:20px;
  color:#ffffff;
  background-color:#e8491d;
  text-align: center;
  
  width: 100%;
}
</style>
    <div class="footers">
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
    </div>
<script src="app.js">
    
</script>
  </body>
</html>
