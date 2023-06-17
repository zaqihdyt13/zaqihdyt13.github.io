<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: loginPage.php");
}
 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- MyCSS -->
    <link rel="stylesheet" href="style.css" />

    <!-- BOXICONS -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

    <title>SIMPLE WEBSITE</title>
  </head>
  <body>
    <header class="navbar">
      <div class="navbar-logo">MyGallery</div>

      <nav class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#gallery">Gallery</a>
      </nav>

      <!-- <div class="btn">
        <a href="loginPage.php">Login</a>
      </div> -->
      <div class="btn">
        <a href="logout.php">Logout</a>
      </div>
    </header>

    <section class="home" id="home">
      <div class="home-content">
      <?php echo "<h1>Selamat Datang, " . $_SESSION['username'] ."!". "</h1>"; ?>
        <h1>WELCOME TO OUR <span>GALLERY</span></h1>
        <h3>Full of good and quality photos</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore
          mollitia, obcaecati ipsum hic adipisci dolores!
        </p>

        <div class="content-socialMedia">
          <a href="#"><i class="bx bxl-instagram-alt"></i></a>
          <a href="#"><i class="bx bxl-facebook"></i></a>
          <a href="#"><i class="bx bxl-twitter"></i></a>
          <a href="#"><i class="bx bxl-youtube"></i></a>
        </div>
      </div>

      <div class="home-img">
        <img src="img/home-img.jpg" alt="Picture of Dog" />
      </div>
    </section>

    <section class="about" id="about">
      <div class="about-img">
        <img src="img/about-img.jpg" alt="" />
      </div>

      <div class="about-content">
        <h1>About <span>Us</span></h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit
          recusandae odit at autem quaerat illo velit dolorum, ipsum magni, quae
          maiores asperiores tempore facilis alias laudantium eos cum omnis
          reprehenderit corrupti aperiam nesciunt molestiae! In corrupti, neque
          dolorum esse dolores quam officiis non sequi ullam!
        </p>
        <h3>
          Find out more <span>about</span> us
          <i class="bx bx-question-mark"></i>
        </h3>

        <div class="btn">
          <a href="#"
            >Read More
            <i
              class="bx bx-chevrons-right"
              style="font-size: 1.5rem; margin-top: 0.2rem"
            ></i
          ></a>
        </div>
      </div>
    </section>

    <section class="gallery" id="gallery">
      <div class="gallery-header">
        <h1>Gallery</h1>
      </div>

      <div class="gallery-img">
        <div class="categories">
          <h2>Categories :</h2>
          <div class="categories-link">
            <a data-filter="*">All</a>
            <a href=".potrait" data-filter=".potarit">Potrait</a>
            <a href="#" data-filter=".food">Food</a>
            <a href="#" data-filter=".nature">Nature</a>
            <a href="#" data-filter=".cartoon">Cartoon</a>
            <a href="#" data-filter=".concert">Concert</a>
            <a href="#" data-filter=".monokrom">Monokrom</a>
          </div>
        </div>

        <div class="container">
          <img src="img/gallery-img/i1.jpg" alt="" class="nature" />

          <img src="img/gallery-img/i1.jpg" alt="" class="nature" />

          <img src="img/gallery-img/i1.jpg" alt="" class="cartoon" />

          <img src="img/gallery-img/i1.jpg" alt="" class="food" />

          <img src="img/gallery-img/i1.jpg" alt="" class="cartoon" />

          <img src="img/gallery-img/i1.jpg" alt="" class="monokrom" />

          <img src="img/gallery-img/i1.jpg" alt="" class="potrait" />

          <img src="img/gallery-img/i1.jpg" alt="" class="potrait" />

          <img src="img/gallery-img/i1.jpg" alt="" class="concert" />

          <img src="img/gallery-img/i1.jpg" alt="" class="monokrom" />

          <img src="img/gallery-img/i1.jpg" alt="" class="potrait" />

          <img src="img/gallery-img/i1.jpg" alt="" class="concert" />

          <img src="img/gallery-img/i1.jpg" alt="" class="nature" />

          <img src="img/gallery-img/i1.jpg" alt="" class="cartoon" />

          <img src="img/gallery-img/i1.jpg" alt="" class="food" />

          <img src="img/gallery-img/i1.jpg" alt="" class="food" />

          <img src="img/gallery-img/i1.jpg" alt="" class="food" />

          <img src="img/gallery-img/i1.jpg" alt="" class="food" />

          <img src="img/gallery-img/i1.jpg" alt="" class="food" />

          <img src="img/gallery-img/i1.jpg" alt="" class="food" />
        </div>
      </div>
    </section>

    <footer class="footer">
      <p class="footer-copyright">
        Copyright <i class="bx bx-copyright"></i> 2023 by
        <span>Zaqihidayat</span>. All Rights Reserved
      </p>

      <a href="#home" class="footer-backHome"
        ><i class="bx bx-up-arrow-alt"></i
      ></a>
    </footer>

    <!-- MyJS -->
    <script src="script.js"></script>
  </body>
</html>
