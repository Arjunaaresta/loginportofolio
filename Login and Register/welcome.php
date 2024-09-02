<?php
session_start();
include_once('connection.php');

// if(isset($_SESSION['name']) && isset($_SESSION['username'] )){

// }
$_SESSION['name'];
$_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portofolio</title>

    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- custom css -->
    <link rel="stylesheet" href="./style copy.css" />
  </head>

  <body>
    <!-- header design -->
    <header class="header">
      <a href="#" class="logo">Portofolio</a>

      <i class='bx bx-menu' id="menu-icon"></i>
    
  
     <nav class="navbar">
      <a href="#home" class="active">Home</a>
      <a href="#about">About</a>
      <a href="#services">Services</a>
      <a href="#portofolio">Portofolio</a>
      <a href="#contact">Contact</a>
     </nav>

    </header>

    <!-- home section design -->
    <section class="home" id="home">
      <div class="home-content">
        <h3>Hello, It's Me</h3>
        <h1>Arjuna Aresta Nova</h1>
        <h3>And I'm a <span class="multiple-text"></span></h3>
        <p>hello welcome to my website enjoy my website</p>
      
      <div class="social-media">
        <a href="#"><i class='bx bxl-instagram-alt'></i></a>
        <a href="#"><i class='bx bxl-tiktok'></i></a>
        <a href="#"><i class='bx bx-link' ></i></a>
        <a href="#"><i class='bx bxl-twitter' ></i></a>
      </div>
      <a href="cirrus.png" class="btn">Download CV</a>
    </div>


      <div class="home-img">
        <img src="gtmale1.png">
      </div>
    </section>

    <!-- about section design -->
    <section class="about" id="about">
      <div class="about-img">
        <img src="valorant.png" alt="">
      </div>

      <div class="about-content">
        <h2 class="heading">About <span>Me</span></h2>
        <h3>THE KNIGHT OF DARKNESS</h3>
        <p>Hello, my name is Arjuna Aresta. I am currently pursuing a degree in Software Engineering. I am very interested in technology development and software innovation, and I hope to contribute in creating useful technology solutions.</p>
        <a href="#" class="btn">Read More</a>
      </div>
    </section>

    <!-- services section design -->
    <section class="services" id="services">
      <h2 class="heading">Our <span>Service</span></h2>

      <div class="services-container">
        <div class="services-box">
          <i class='bx bxs-pen'></i>
          <h3>Design Grafis</h3>
          <p>service you with my skills in the field of graphic design.</p>
          <a href="#" class="btn">Read More</a>
        </div>
      

      
        <div class="services-box">
          <i class='bx bx-bar-chart'></i>
          <h3>Digital Marketing</h3>
          <p>When you experience digital marketing problems, we have the solution.</p>
          <a href="#" class="btn">Read More</a>
        </div>
      

      
        <div class="services-box">
          <i class='bx bx-code-alt'></i>
          <h3>Web Developer</h3>
          <p>Want to find web developer services whose quality is guaranteed? Visit my website.</p>
          <a href="#" class="btn">Read More</a>
        </div>
      </div>
    </section>

    <!-- portfolio section design -->
    <section class="portofolio" id="portofolio">
      <h2 class="heading">Latest <span>Project</span></h2>

      <div class="portofolio-container">
        <div class="portofolio-box">
          <img src="./inventarisdata.PNG" alt="">
          <div class="portofolio-layer">
            <h4>Paper rex</h4>
            <p>Paper Rex was founded in January 2020 by Harley "dsn" Örwall, a former professional Counter-Strike player and Nikhil "nikH" Hathiramani, founder and editor-in-chief of CSGO2ASIA, Matthew Djojonegoro, a video game designer and team manager, and Gad Tan, a creative director who graduated from the University of.</p>
            <a href="#"><i class='bx bx-link-external'></i></a>
          </div>
        </div>

        <div class="portofolio-box">
          <img src="./kopi.PNG" alt="">
          <div class="portofolio-layer">
            <h4>RRQ</h4>
            <p>Rex Regum Qeon (RRQ) was founded in October 2013 by Adrian Pauline, CEO of RRQ, and Riki K. Suliawan, founder of RRQ. Starting from the two founders' hobby of playing games, their interest in the Dota 2 championship eventually became the basis for the formation of this organization.</p>
            <a href="#"><i class='bx bx-link-external'></i></a>
          </div>
        </div>

        <div class="portofolio-box">
          <img src="./porto.PNG" alt="">
          <div class="portofolio-layer">
            <h4>Optic</h4>
            <p>OpTic Gaming is an American esports organization. Founded in the summer of 2006, OpTic Gaming has also fielded teams in Counter Strike, Halo, Gears of War, Overwatch, and Dota 2. Currently, they only field OpTic-branded teams in Call of Duty after being acquired by Infinite Esports & Entertainment</p>
            <a href="#"><i class='bx bx-link-external'></i></a>
          </div>
        </div>
    </section>

    <!-- contact section design -->
    <section class="contact" id="contact">
      <h2 class="heading">Contact <span>Me!</span></h2>

      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="full Name">
          <input type="email" placeholder="Email Addres">
        </div>

        <div class="input-box">
          <input type="number" placeholder="Mobile Number">
          <input type="text" placeholder="Email Subject">
        </div>
        <textarea name="" id="" cols="30" rows="10" placeholder="Your Name"></textarea>
        <input type="submit" value="Send Massaage" class="btn">
      </form>
    </section>

    <!-- footer design -->
    <footer class="footer">
      <div class="footer-text">
        <p>Copyright &copy; 2023 by Ivan. | All Rights Reserved.</p>
      </div>

      <div class="footer-iconTop">
        <a href="#home"><i class='bx bx-up-arrow-circle'></i></a>
      </div>
    </footer>


    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- typed js -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <!-- custom js -->
    <script src="script.js"></script>
  </body>
</html>