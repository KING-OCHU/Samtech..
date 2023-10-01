<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Website designer">
	  <meta name="keywords" content="web design,  web design, professional web design">
  	<meta name="author" content="Sam Ochu">
    <title>SAM TECHNOLOGY | CART</title>
    <link rel="stylesheet" href="./css/style.css">
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
            <li><a href="index.php">Home</a></li>
            <li class="current"><a href="cart.php">Cart</a></li>
            <li><a href="about.php">About</a></li>
            
            <li><a href="services.php">Services</a></li>
          </ul>
        </nav>
      </div>
    </header>
    
    
    <div class="preloader">
            <div class="loader">
                <!-- <img src="img/favicon.png" alt="Loading..."> -->
                 <div class="load"></div>
            </div>
        </div>


  <div id="cart">
    <h2>Cart</h2>
    <ul id="cart-items">
      <!-- Cart items will be dynamically added here -->
    </ul>
    <button onclick="emptyCart()">Empty Cart</button>
  </div>

  <form id="applicationForm" action="cart.php" method="post">
    <h1>Application for Website</h1><br><br>

    <label>First Name</label><br>
    <input type="text" name="fname" style="width: 100%; height: 40px;" placeholder="Enter First name" autofocus required>
    <br><br>

    <label>Middle Name</label><br>
    <input type="text" name="mname" style="width: 100%; height: 40px;" placeholder="Enter Middle name" autofocus required>
    <br><br>

    <label>Last Name</label><br>
    <input type="text" name="lname" style="width: 100%; height: 40px;" placeholder="Enter Last name" autofocus required>
    <br><br>

    <label>WhatsApp number</label><br>
    <input type="number" name="number" placeholder="WhatsApp number" style="width: 100%; height: 40px;" required><br><br>

    <label>Email</label><br>
    <input type="email" name="email" placeholder="Enter Email..." style="width: 100%; height: 40px;" required><br><br>

    <label>Leave Message</label><br>
    <textarea placeholder="Leave your message....." name="message" style="width: 100%; height: 100px;" required></textarea>

    <br><br>

    <input type="text" name="dom" id="domain" style="width: 70%; height: 40px;" placeholder="domain">
    <select id="domainExtension" style="width: 25%; height: 41px;">
      <option>.com</option>
      <option>.uk</option>
      <option>.info</option>
      <option>.site</option>
      <option>.net</option>
      <option>.rf.gd</option>
    </select>
    <br><br>

    <select id="websiteType" name="web" style="width: 100%; height: 40px;" onchange="addToCart('Website Type: ' + this.value)">
      <option value="simple">Choose your website</option>
      <option value="Personal website">For Personal</option>
      <option value="Company website">For Company</option>
      <option value="Group website">For Group</option>
      <option value="Business Website">For Business</option>
      <option value="Not sure">Not sure</option>
    </select>
    <br><br>

    <select id="plan" name="plan" style="width: 100%; height: 40px;" onchange="addToCart('Selected Plan: ' + this.value)">
      <option>Choose your plan</option>
      <option value="below Tsh. 30,000">Below Tsh. 30,000</option>
      <option value="Tsh. 30,000">Tsh. 30,000</option>
      <option value="Tsh. 60,000">Tsh. 60,000</option>
      <option value="up to Tsh. 60,000">Up to Tsh. 60,000</option>
    </select>
    <br><br>

    <label>Upload photos</label><br>
    <input type="file" name="file" style="width: 100%; height: 40px;">
    <br><br>

    <button type="submit" class="button_1">Submit</button>
  </form>

  <script>
    // Initialize the cart array to store selected items
    let cart = [];

    function addToCart(item) {
      cart.push(item);
      updateCart();
    }

    function updateCart() {
      const cartItems = document.getElementById("cart-items");
      cartItems.innerHTML = "";

      cart.forEach(item => {
        const li = document.createElement("li");
        li.innerText = item;
        cartItems.appendChild(li);
      });
    }

    function emptyCart() {
      cart = [];
      updateCart();
    }
  </script>




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
    background: pink;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1000;
}

.preloader .loader{
    width: 300px;
    position: absolute;
}

.preloader .loader .load{
    width: 100%;
    height: 100%;
    border-radius: 50%;
}

.load{
  border: 8px solid fuchsia;
  border-top: 8px solid purple;
  border-radius: 50%;
  width: 80px;
  height: 80px;
  margin-right: 20px;
}

.loads{
  border: 8px solid fuchsia;
  border-top: 8px solid purple;
  border-radius: 50%;
  width: 80px;
  height: 80px;
  margin-right: 20px;
  text-align: center;
  justify-content: center;
}

.spin{
  animation: spin 2s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}


       </style>
       
       <script src="app.js">
    
</script>
       </body>
    </footer>
