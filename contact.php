<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>

    <!--font awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />

    <!--css file-->
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <!-- header section starts  -->
    <header class="header">
      <a href="index.html" class="logo">
        <i class="fas fa-table"></i> KK Furniture Fusion
      </a>

      <form action="" class="search-form">
        <input type="search" placeholder="search here..." id="search-box" />
        <label for="search-box" class="fas fa-search"></label>
      </form>

      <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <div id="cart-btn" class="fas fa-shopping-cart"></div>
        <div id="login-btn" class="fas fa-user"></div>
      </div>
    </header>
    <!-- header section ends  -->
    <!-- closer btn  -->
    <div id="closer" class="fas fa-times"></div>
    <!-- navbar  -->
    <nav class="navbar">
      <a href="index.html">home</a>
      <a href="shop.html">shop</a>
      <a href="about.html">about</a>
      <a href="team.html">team</a>
      <a href="blog.html">blog</a>
      <a href="contact.html">contact</a>
    </nav>
    <!-- shopping cart  -->
    <div class="shopping-cart">
      
    </div>

    <!-- login form  -->

    <div class="login-form">
      <form action="">
        <h3>login form</h3>
        <input type="email" placeholder="email address" class="box" />
        <input type="password" placeholder="password" class="box" />
        <div class="remember">
          <input type="checkbox" name="" id="remember-me" />
          <label for="remember-me">remember me</label>
        </div>
        <input type="submit" value="login now" class="btn" />
        <p>forget password? <a href="#">click here</a></p>
        <p>new here? <a href="#">create account</a></p>
      </form>
    </div>

    <section class="heading">
      <h3>contact us</h3>
      <p><a href="index.html">home</a> / <span>contact</span></p>
    </section>

    <div class="contact">
      <form action="">
        <h3>get in touch</h3>
        <span>full name</span>
        <input type="text" class="box" />
        <span>phone number</span>
        <input type="tel" class="box" />
        <span>email address</span>
        <input type="email" class="box" />
        <span>message</span>
        <textarea class="box" name="" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn" />
      </form>

      <iframe
        class="map"
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13270.0147276986!2d73.138121!3d33.747648!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfc11d3571e5bf%3A0x841a9ed6d869644f!2sQuaid%20e%20Azam%20University%20Islamabad!5e0!3m2!1sen!2s!4v1715209633089!5m2!1sen!2s" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
      ></iframe>
    </div>
    <!-- footer section  -->
    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>quick links</h3>
          <a href="index.html"> <i class="fas fa-arrow-right"></i> home</a>
          <a href="shop.html"> <i class="fas fa-arrow-right"></i> shop</a>
          <a href="about.html"> <i class="fas fa-arrow-right"></i> about</a>
          <a href="team.html"> <i class="fas fa-arrow-right"></i> team</a>
          <a href="blog.html"> <i class="fas fa-arrow-right"></i> blog</a>
          <a href="contact.html"> <i class="fas fa-arrow-right"></i> contact</a>
        </div>

        <div class="box">
          <h3>extra links</h3>
          <a href="#"> <i class="fas fa-arrow-right"></i> my order</a>
          <a href="#"> <i class="fas fa-arrow-right"></i> my wishlist</a>
          <a href="#"> <i class="fas fa-arrow-right"></i> my account</a>
          <a href="#"> <i class="fas fa-arrow-right"></i> my favorite</a>
          <a href="#"> <i class="fas fa-arrow-right"></i> terms of user</a>
        </div>

        <div class="box">
          <h3>extra links</h3>
          <a href="#"> <i class="fab fa-facebook-f"></i> facebook</a>
          <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
          <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
          <a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>
          <a href="#"> <i class="fab fa-pinterest"></i> pinterest</a>
        </div>

        <div class="box">
          <h3>newsletter</h3>
          <p>subscribe for latest updates</p>
          <form action="">
            <input type="email" name="" placeholder="enter your email" id="" />
            <input type="submit" value="subscribe" class="btn" />
          </form>
        </div>
      </div>
    </section>
    <section class="credit">created by Khairullah Khaliq 2024 | copyrights!</section>
    <script src="app.js"></script>
  </body>
</html>
