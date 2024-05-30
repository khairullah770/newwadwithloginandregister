<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KK Furniture Fusion</title>

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
      <a href="index.php" onClick="alert('You are in home now')" class="logo">
        <i class="fas fa-table"></i>KK Furniture Fusion 
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
      <a href="index.php" onClick="alert('You are in home now')" class="logo">home</a>
        <a href="shop.php" onClick="alert('You are in shop page')" class="logo">shop</a>
        <a href="about.php" onClick="alert('You are in about page')" class="logo">about</a>
        <a href="blog.php" onClick="alert('You are in blog page')" class="logo">blog</a>
        
        <a href="contact.php" onClick="alert('You are in contact page')" class="logo">contact</a>
    </nav>

    <!-- shopping cart  -->
    <div class="shopping-cart">
      <div class="box">
        <i class="fas fa-times"></i>
        <img src="product-1.jpg" alt="" />
        <div class="content">
          <h3>morden furniture</h3>
          <span class="quantity"> 1 </span>
          <span class="multiply"> x </span>
          <span class="price"> $140.00 </span>
        </div>
      </div>

      <div class="box">
        <i class="fas fa-times"></i>
        <img src="softchair.jpg" alt="" />
        <div class="content">
          <h3>morden furniture</h3>
          <span class="quantity"> 1 </span>
          <span class="multiply"> x </span>
          <span class="price"> $140.00 </span>
        </div>
      </div>

      <div class="box">
        <i class="fas fa-times"></i>
        <img src="chairpro1.jpg" alt="" />
        <div class="content">
          <h3>morden furniture</h3>
          <span class="quantity"> 1 </span>
          <span class="multiply"> x </span>
          <span class="price"> $140.00 </span>
        </div>
      </div>

      <div class="box">
        <i class="fas fa-times"></i>
        <img src="banner-1.jpg" alt="" />
        <div class="content">
          <h3>morden furniture</h3>
          <span class="quantity"> 1 </span>
          <span class="multiply"> x </span>
          <span class="price"> $140.00 </span>
        </div>
      </div>

      <h3 class="total">total : <span>$560.00</span></h3>

      <a href="#" class="btn">checkout</a>
    </div>

      
    </div>
    <!-- login form  -->
    <div class="login-form">
    <form action="login.php" method="post">
        <h3>Login Form</h3>
        <input type="email" name="username" placeholder="Email Address" class="box" required />
        <input type="password" name="password" placeholder="Password" class="box" required />
        <div class="remember">
            <input type="checkbox" name="" id="remember-me" />
            <label for="remember-me">Remember me</label>
        </div>
        <input type="submit" name="login" value="Login Now" class="btn" />
        <p>Forget password? <a href="#">Click here</a></p>
        <p>New here? <a href="registration.php">Create account</a></p>
    </form>
</div>

    <!-- home section starts  -->
    <section class="home">
      <div class="slides-container">
        <div class="slide active">
          <div class="content">
            <span>special discount </span>
            <h3>high quality</h3>
            <p>
              Pure Wooden chairs 
            </p>
            <a href="shop.php" onClick="alert('You are in shop page')" class="btn">shop now</a>
          </div>
          <div class="image">
            <img src="images/home1.png" alt="" />
          </div>
        </div>

        <div class="slide">
          <div class="content">
            <span>new arrivals</span>
            <h3>premium chair</h3>
            <p>
              high quality and pure sofas 
            </p>
            <a href="shop.php" class="btn">shop now</a>
          </div>
          <div class="image">
            <img src="images/home2.png" alt="" />
          </div>
        </div>
      </div>

      <div id="slide-next" onclick="next()" class="fas fa-angle-right"></div>
      <div id="slide-prev" onclick="prev()" class="fas fa-angle-left"></div>
    </section>
    <!-- home section ends -->
    <!-- banner section starts  -->
    <section class="banner-container">
      <div class="banner">
        <img src="images/banner-1.jpg" alt="" />
        <div class="content">
          <span>limited offer</span>
          <h3>upto 50% off</h3>
          <a href="shop.php" class="btn">shop now</a>
        </div>
      </div>

      <div class="banner">
        <img src="images/banner-2.jpg" alt="" />
        <div class="content">
          <span>limited offer</span>
          <h3>upto 50% off</h3>
          <a href="shop.php" class="btn">shop now</a>
        </div>
      </div>

      <div class="banner">
        <img src="images/banner-3.jpg" alt="" />
        <div class="content">
          <span>limited offer</span>
          <h3>upto 50% off</h3>
          <a href="shop.php" class="btn">shop now</a>
        </div>
      </div>
    </section>
    <!-- banner section ends -->
    <!-- footer section  -->
    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>quick links</h3>
          <a href="index.php"> <i class="fas fa-arrow-right"></i> home</a>
          <a href="shop.php"> <i class="fas fa-arrow-right"></i> shop</a>
          <a href="about.php"> <i class="fas fa-arrow-right"></i> about</a>
          <a href="blog.php"> <i class="fas fa-arrow-right"></i> blog</a>
          <a href="contact.php"> <i class="fas fa-arrow-right"></i> contact</a>
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
    <!--script file-->
    <script src="app.js"></script>
  </body>
</html>
<?php
session_start();
include("connect.php");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($conn) {
        // Using prepared statements to prevent SQL injection
        $stmt = $conn->prepare("SELECT * FROM signup WHERE email = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);

        // Execute the statement
        $stmt->execute();

        // Store the result
        $stmt->store_result();

        // Check if a row was returned
        if ($stmt->num_rows > 0) {
            // Login successful
            $_SESSION['username'] = $username;
            echo "<script>alert('Login successful'); window.location.href = 'welcome.php';</script>";
        } else {
            // Login failed
            echo "<script>alert('Login failed'); window.location.href = 'login.php';</script>";
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "<script>alert('Database connection failed');</script>";
    }
}
?>
