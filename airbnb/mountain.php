<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="airbnb.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-LhV8HA0m7lx/5SMqubwSHmEVRJn7n1wbL4/4mZsEZ5tfSy7cHmRoTGzshpXaMZurA2ihAhpSOOUEJnFzCXj87Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/mountain1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Türkiye-Mount Nemrut</h5>
              <p>2,134-metre-high mountain in southeastern Turkey.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/mountain2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Türkiye-Mount Kaz</h5>
              <p>Mount Ida is a mountain in northwestern Turkey, some 20 mi southeast of the ruins of Troy.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/mountain3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Türkiye-Mount Erciyes</h5>
              <p>Mount Erciyes, also known as Argaeus is an inactive volcano in Kayseri Province, Turkey.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/mountain4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Türkiye-Uludağ</h5>
              <p>Some representative placeholder content for the third slide.</p>
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
         <a href="mountain.php" style="color:#CB997E">
         <i class="fa-solid fa-mountain"></i>
         <p>mountain</p>
        </a>
        </div>
        <div class="icon">
         <a href="city.php">
         <i class="fa-solid fa-city"></i>
         <p>city</p>
        </a>
        </div>
        </div>

        <?php
        include "config.php";
            $sql = "SELECT * FROM mountain";
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

      <div class="testimonial-slider">
        <div class="slides-container">
          <div class="testimonial-card">
          <div class="testimonial-content">
            <div class="testimonial-img">
              <img src="images/boy3.jpg" alt="Reviewer 1">
            </div>
              <p>"The cozy bungalows offer stunning views of the peaks, and the crackling fireplace creates a warm and inviting atmosphere. It's the perfect mountain escape for peace and serenity."</p>
              <h3>John M.</h3>
              <p class="designation">Manager</p>
            </div>
          </div>
          <div class="testimonial-card">
          <div class="testimonial-content">
            <div class="testimonial-img">
              <img src="images/girl3.jpg" alt="Reviewer 2">
            </div>
              <p>"Waking up to the crisp mountain air is an experience that rejuvenates the soul."</p>
              <h3>Fatima Z.</h3>
              <p class="designation">Shop Owner.</p>
            </div>
          </div>
          <div class="testimonial-card">
            <div class="testimonial-content">
            <div class="testimonial-img">
              <img src="images/boy4.jpg" alt="Reviewer 3">
            </div>
              <p>"Exploring the nearby hiking trails and coming back to the cozy fireplace is the perfect way to unwind."</p>
              <h3>Ali S.</h3>
              <p class="designation">Mechanical Engineer.</p>
            </div>
          </div>
          <div class="testimonial-card">
            <div class="testimonial-content">
            <div class="testimonial-img">
              <img src="images/girl4.jpg" alt="Reviewer 4">
            </div>
              <p>"the mountain breeze rustling through the trees is incredibly soothing. It's a serene oasis where time slows down, allowing you to reconnect with nature."</p>
              <h3>Afaf J.</h3>
              <p class="designation">Researcher.</p>
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
          <a href="#"><p>Help Center</p></a>
          <a href="#"><p>Report a misconvience</p></a>
          <a href="#"><p>Our COVID-19 Response</p></a>
          <hr>
          <p><b>Hosting</b></p>
          <a href="#"><p>Airbnb your home</p></a>
          <a href="#"><p>how to host</p></a>
          <a href="#"><p>Airbnb-friendly apartments</p></a>
          <hr>
          <p><b>English (US) $ USD</b></p>
          <p>© 2023 Airbnb By Joubaei.<br> All rights reserved.</p>

        </div>
      </footer>
      </body>
      </html>