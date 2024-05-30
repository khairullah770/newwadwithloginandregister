<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About</title>

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
        <i class="fas fa-chair"></i> KK Furniture Fusion
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
      <h3>about us</h3>
      <p><a href="index.html">home</a> / <span>about</span></p>
    </section>

    <section class="about">
      <div class="image">
        <img src="images/about-img.jpg" alt="" />
      </div>

      <div class="content">
        <span>welcome to KK Furniture Fusion</span>
        <h3>we make your home more beautiful</h3>
        <p>
        Custom Luxury flats furniture. Each Luxury Villa, flats can highly customized to the owners taste and practical usage. Custom Luxury Villa furniture, Luxury apartment furniture. At Factory Direct Prices. Personalize Customization. WM factory manufacturer. Models: 140cm B-Cup, 157cm B-Cup.
        </p>
        <p>
          
          
        </p>
        <a href="#" class="btn">read more</a>
      </div>
    </section>

    <section class="services">
      <h1 class="title">
        <span>our services</span> <a href="#"></a>
      </h1>

      <div class="box-container">
        <div class="box">
          <img src="images/serv-1.svg" alt="" />
          <h3>product selling</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates,
            quod.
          </p>
          <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
          <img src="images/serv-2.svg" alt="" />
          <h3>product designing</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates,
            quod.
          </p>
          <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
          <img src="images/serv-3.svg" alt="" />
          <h3>24 / 7 support</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates,
            quod.
          </p>
          <a href="#" class="btn">read more</a>
        </div>
      </div>
    </section>

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
