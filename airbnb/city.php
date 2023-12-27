<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="airbnb.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-LhV8HA0m7lx/5SMqubwSHmEVRJn7n1wbL4/4mZsEZ5tfSy7cHmRoTGzshpXaMZurA2ihAhpSOOUEJnFzCXj87Q=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>airbnb official site</title>
</head>

<body>
  <header>
    <nav>
      <ul class="nav-bar">
        <li class="logo"><img src="images/Light Orange Beach Club Recreation Logo.png" alt="logo"></li>
        <input type="checkbox" id="check">
        <span class="menu">
          <li><a href="airbnb.html">home</a></li>
          <li><a href="#">service</a></li>
          <li><a href="#">check out</a></li>
          <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
        </span>
        <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>
      </ul>
    </nav>
  </header>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
        aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/city1.jpg" class="d-block w-100" alt="front1">
        <div class="carousel-caption d-none d-md-block">
          <h5>The Brando, French Polynesia</h5>
          <p>Discover luxury bungalows nestled on a private island, offering pristine beaches and unparalleled
            tranquility.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/city2.jpg" class="d-block w-100" alt="front2">
        <div class="carousel-caption d-none d-md-block">
          <h5>Anantara Golden Resort, Thailand</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/city3.jpg" class="d-block w-100" alt="front3">
        <div class="carousel-caption d-none d-md-block">
          <h5>Aman Tokyo, Japan</h5>
          <p>Indulge in contemporary luxury and breathtaking city views from elegant guesthouses in the heart of Tokyo.
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/city4.jpg" class="d-block w-100" alt="front4">
        <div class="carousel-caption d-none d-md-block">
          <h5>Giraffe Manor, Kenya</h5>
          <p> Immerse yourself in a unique experience, where friendly giraffes roam the property, offering encounters
            you won't forget.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="icon-container">
    <div class="icon">
      <a href="beach.php">
        <i class="fa-solid fa-umbrella-beach"></i>
        <p>beach</p>
      </a>
    </div>
    <div class="icon">
      <a href="forest.php">
        <i class="fa-solid fa-tree"></i>
        <p>forest</p>
      </a>
    </div>
    <div class="icon">
      <a href="mountain.php">
        <i class="fa-solid fa-mountain"></i>
        <p>mountain</p>
      </a>
    </div>
    <div class="icon">
      <a href="city.php" style="color:#CB997E">
        <i class="fa-solid fa-city"></i>
        <p>city</p>
      </a>
    </div>
  </div>
  <?php
        include "config.php";
            $sql = "SELECT * FROM city";
            $result = mysqli_query($con, $sql);

            echo '<div class="row1">'; 
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="column">';
                echo '<div class="card">';
                echo '<img src="'.$row['path'].'" alt="image">';
                echo '<h5>' . $row['name'] . '</h5>'; // Display item name
                echo '<p>' . $row['description'] . '</p>'; // Display item description
                echo '<p>' . $row['price'] . '$ per night</p>'; 
                echo '</div>';
                echo '</div>';
            }
            echo '</div>'; // Close the container for displaying items
        
        $con->close();
        ?>

    <div class="column">
      <div class="card">
        <img src="images/city6.jpg" alt="image 2">
        <h5>The Ritz-Carlton, New York City</h5>
        <p>Enjoy luxury accommodations in this waterfront hotel, boasting breathtaking views of the Statue of Liberty
          and the Manhattan skyline.</p>
      </div>

  <div class="testimonial-slider">
    <div class="slides-container">
      <div class="testimonial-card">
        <div class="testimonial-content">
          <div class="testimonial-img">
            <img src="images/girl1.jpg" alt="Reviewer 1">
          </div>
          <p>""Staying at The Brando was a dream come true! The bungalows were beautifully designed, the private island
            setting was paradise, and the service was exceptional. Truly a once-in-a-lifetime experience."</p>
          <h3>Tala M.</h3>
          <p class="designation">Professeur</p>
        </div>
      </div>
      <div class="testimonial-card">
        <div class="testimonial-content">
          <div class="testimonial-img">
            <img src="images/girl2.jpg" alt="Reviewer 2">
          </div>
          <p>"The blend of luxury and nature was perfect, and the staff made us feel like VIPs throughout our stay."</p>
          <h3>Malak B.</h3>
          <p class="designation">Travel Consultant</p>
        </div>
      </div>
      <div class="testimonial-card">
        <div class="testimonial-content">
          <div class="testimonial-img">
            <img src="images/boy1.jpg" alt="Reviewer 3">
          </div>
          <p>"The attention to detail and the impeccable service made our stay unforgettable."</p>
          <h3>Mazen J.</h3>
          <p class="designation"> Engineer</p>
        </div>
      </div>
      <div class="testimonial-card">
        <div class="testimonial-content">
          <div class="testimonial-img">
            <img src="images/boy2.jpg" alt="Reviewer 4">
          </div>
          <p>"The charming bungalows, coupled with the opportunity to interact with the friendly giraffes, created an experience like no other. It felt like a fairytale come to life."</p>
          <h3>Ali A.</h3>
          <p class="designation">Retail Center.</p>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="social-media-icons">
      <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
      <a href="#"><i class="fa-brands fa-twitter"></i></a>
      <a href="#"><i class="fa-brands fa-instagram"></i></a>
    </div><br>
    <div class="copyright">
      <p><b>Support</b></p>
      <a href="#">
        <p>Help Center</p>
      </a>
      <a href="#">
        <p>Report a misconvience</p>
      </a>
      <a href="#">
        <p>Our COVID-19 Response</p>
      </a>
      <hr>
      <p><b>Hosting</b></p>
      <a href="#">
        <p>Airbnb your home</p>
      </a>
      <a href="#">
        <p>how to host</p>
      </a>
      <a href="#">
        <p>Airbnb-friendly apartments</p>
      </a>
      <hr>
      <p><b>English (US) $ USD</b></p>
      <p>© 2023 Airbnb By Joubaei.<br> All rights reserved.</p>

    </div>
  </footer>
</body>

</html>