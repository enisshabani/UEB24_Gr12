<?php
$loggedInUser = "Guest";
$title = "Looking";
$customers = [
    ["code" => "AAC", "name" => "Enis", "surname" => "Morina", "price" => 30.00, "date" => "04/12/2024"],
    ["code" => "AAD", "name" => "Enkel", "surname" => "Sejdiu", "price" => 60.00, "date" => "22/11/2024"],
    ["code" => "AAX", "name" => "Redon", "surname" => "Hoxha", "price" => 90.00, "date" => "23/07/2024"],
];
usort($customers, fn($a, $b) => $a["price"] <=> $b["price"]);
$total = array_reduce($customers, fn($carry, $c) => $carry + $c["price"], 0);
$company = "RentACar";
$tagline = "Ultimate Travel Experience";
$fullTagline = strtoupper($company . " - " . $tagline);
$carCount = 12;
$pricePerDay = 35.50;
$taxRate = 0.18;
$totalPrice = $carCount * $pricePerDay * (1 + $taxRate);

$status = $carCount > 10 ? "Sufficient stock available" : "Limited cars available";

$carTypes = ["Sedan", "SUV", "Convertible", "Truck"];
$assocCar = ["brand" => "Audi", "model" => "A6", "price" => 58000];
$multiArray = [
    ["brand" => "BMW", "type" => "SUV"],
    ["brand" => "Tesla", "type" => "Electric"]
];
sort($carTypes);
arsort($carTypes); 
ksort($assocCar);
$GLOBALS["admin_email"] = "admin@rentacar.com";
$customers = [
    ["code" => "AAC", "name" => "Enis", "surname" => "Morina", "car" => "Audi", "price" => 30000, "date" => "04/12/2024"],
    ["code" => "AAD", "name" => "Enkel", "surname" => "Sejdiu", "car" => "BMW", "price" => 60000, "date" => "22/11/2024"],
    ["code" => "AAX", "name" => "Redon", "surname" => "Hoxha", "car" => "Tesla", "price" => 90000, "date" => "23/07/2024"],
    ["code" => "AAE", "name" => "Arta", "surname" => "Krasniqi", "car" => "Mercedes", "price" => 75000, "date" => "15/08/2024"],
    ["code" => "AAF", "name" => "Blerim", "surname" => "Gashi", "car" => "Volkswagen", "price" => 45000, "date" => "10/10/2024"],
    ["code" => "AAG", "name" => "Dafina", "surname" => "Berisha", "car" => "Hyundai", "price" => 32000, "date" => "05/05/2024"],
    ["code" => "AAH", "name" => "Luan", "surname" => "Shala", "car" => "Ford", "price" => 28000, "date" => "20/03/2024"],
    ["code" => "AAI", "name" => "Rina", "surname" => "Hoti", "car" => "Jaguar", "price" => 67000, "date" => "12/09/2024"],
    ["code" => "AAJ", "name" => "Arben", "surname" => "Rexha", "car" => "Alfa Romeo", "price" => 52000, "date" => "30/06/2024"],
    ["code" => "AAK", "name" => "Flora", "surname" => "Dervishi", "car" => "Chevrolet", "price" => 40000, "date" => "18/12/2024"],
];
$normalPrice = 50000; // Çmimi normal i paracaktuar
echo "Çmimi normal për makinat është: $" . number_format($normalPrice, 2);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Car Rental Website</title>
    <!--Link per Css-->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="index.php">

    <!-- BootStrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Box Links -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <!-- or -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
  </head>
  <body>
    <!--Header-->
    <header>
      <a href="#" class="logo"><img src="img/logo.png" alt="Logo" /></a>
      <div class="bx bx-menu" id="menu-icon"></div>
      <ul class="navbar">
        <li><a href="#home">Home</a></li>
        <li><a href="#ride">Ride</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#reviews">Reviews</a></li>
        <li><a href="#about">About</a></li>
      </ul>

      <div class="header-btn">
        <a href="sign-in.html" class="sign-in" >Sign In</a>
        <a href="sign-up.html" class="sign-up">Sign Up</a>
      </div>
    </header>

     <!--Home-->
     <section class="home" id="home">
      <div class="text">
        <h1><span id="color">Looking </span>to <br />rent a car?</h1>
        <p>
          Rent a Car with Us for the<br />
          Ultimate Travel Experience, Anytime, Anywhere!
        </p>
      </div>
    
      <div class="image-container">
        <img src="img/jeep.png" id="imazhi" />
      </div>
    </section>

      <div class="form-container">
          <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $location = trim($_POST['location']);
    $default_location = "Kosovo";

    
    if (preg_match(
        '/^[a-zA-Z\s-]+$/',
        $location
    )) {
       
        if (strcasecmp($location, $default_location) === 0) {
            echo "Lokacioni është valid dhe përputhet me lokacionin e paracaktuar 'Kosovo'.<br>";
            
        } else {
            echo "Lokacioni ekziston, por nuk përputhet me lokacionet ku ne japim sherbime.<br>";
        }
    } else {
        echo "Lokacioni nuk është valid. Përdorni vetëm shkronja, hapësira ose viza.<br>";
    }
  }
?>
        <form action="" method="post">
          <div class="input-box">
            <span>Location</span>
            <input type="search" name="" id="" placeholder="Search Places" />
          </div>
          <div class="input-box">
            <span>Pick-Up Date</span>
            <input type="date" name="" id="" />
          </div>
          <div class="input-box">
            <span>Return Date</span>
            <input type="date" name="" id="" />
          </div>
          <input type="submit" name="" id="" class="btn" />
        </form>
      </div>
    </section>
    <!--Table-->
    <section>
        <!--for demo wrap-->
        <h4>Customers</h4>
        <div class="tbl-header">
          <table cellpadding="0" cellspacing="0" border="0">
            <thead>
              <tr>
                <th>Kodi</th>
                <th>Emri</th>
                <th>Mbiemri</th>
                <th>Makina</th>
                <th>Çmimi</th>
                <th>Data</th>
              </tr>
            </thead>
          </table>
        </div>
        <div class="tbl-content"></div>
        <table cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?= htmlspecialchars($customer['code']) ?></td>
                <td><?= htmlspecialchars($customer['name']) ?></td>
                <td><?= htmlspecialchars($customer['surname']) ?></td>
                <td><?= htmlspecialchars($customer['car']) ?></td>
                <td><?= htmlspecialchars($customer['price']) ?></td>
                <td><?= htmlspecialchars($customer['date']) ?></td>
            </tr>
            <?php endforeach;?>
          </tbody>
        </table>
    </section>

    <!-- Ride -->

    <section class="ride" id="ride">
      <div class="heading">
        <span>How It Work</span>
        <h1>Rent with 3 easy steps</h1>
        <div class="ride-container">
          <div class="box">
            <i class="bx bxs-map"></i>
            <h2>Chose location</h2>
            <p>
              Select your desired rental location from our extensive network of
              car rental spots.
            </p>
          </div>

          <div class="box">
            <i class="bx bxs-calendar-check" ></i>
            <h2>Pick-up date</h2>
            <p>
              Specify the date and time you wish to pick up your car with flexible
              scheduling options.
            </p>
          </div>
    
          <div class="box">
            <i class="bx bxs-calendar-star"></i>
            <h2>Book your car</h2>
            <p>
              Browse through our wide range of vehicles and choose the one that
              best suits your needs.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Services -->

    <section class="services" id="services">
      <div class="heading">
        <span>Best Services</span>
        <h1>
          Explore Out Top Deals <br />
          From Top Rated Dealers
        </h1>
      </div>
      <div class="services-container">
        <div class="box">
          <div class="box-img">
            <img src="img/audis6.avif" alt="">
            <p>2025</p>
            <h3>Audi S6 e-tron</h3>
            <h2>$78000 | $6500 <span>/month</span></h2>
            <a href="#" class="btn">Rent Now</a>
          </div>
        </div>

        <div class="box">
          <div class="box-img">
            <img src="img/acura.avif" alt="">
            <p>2025</p>
            <h3>Acura Integra Type S</h3>
            <h2>$53000 | $6500 <span>/month</span></h2>
            <a href="#" class="btn">Rent Now</a>
          </div>
        </div>

        <div class="box">
          <div class="box-img">
            <img src="img/bmw.avif" alt="">
          </div>
          <p>2025</p>
          <h3>BMW Gran Coupe</h3>
          <h2>$40770| $6500 <span>/month</span></h2>
          <a href="#" class="btn">Rent Now</a>
        </div>

        <div class="box">
          <div class="box-img">
            <img src="img/ford.avif" alt="">
          </div>
          <p>2025</p>
          <h3>Ford Escape</h3>
          <h2>$30000 | $6500 <span>/month</span></h2>
          <a href="#" class="btn">Rent Now</a>
        </div>

        <div class="box">
          <div class="box-img">
            <img src="img/jaguar.avif" alt="">
          </div>
          <p>2024</p>
          <h3>Jaguar XF</h3>
          <h2>$51000 | $6500 <span>/month</span></h2>
          <a href="#" class="btn">Rent Now</a>
        </div>

        <div class="box">
          <div class="box-img">
            <img src="img/bmw.jpeg" alt="">
          </div>
          <p>2025</p>
          <h3>Bmw X-Drive</h3>
          <h2>$46000 | $6500 <span>/month</span></h2>
          <a href="#" class="btn">Rent Now</a>
        </div>
      </div>

      <div>
        <a href="more.html" class="btn-services">More &#x27F6;</a>
      </div>

    </section>

    <!--Improved car specifications table-->
    
    <div class="search-container">
      <h2>Search Car Specifications</h2>
      <input type="text" id="car-name" placeholder="Enter car name (e.g., AUDI)" />
      <button onclick="searchCar()">Search</button>
  </div>

  <div class="specifications-container" id="specifications-container">
      <h3>Specifications</h3>
      <table class="specifications-table" id="car-specifications">
        </table>
        <div id="error-message" style="color: red; font-weight: bold; display: none;"></div>
  </div>

    <!-- Reviews -->

    <section class="reviews" id="reviews">
      <div class="heading">
        <span>Reviews</span>
        <h1>Whats Our Costumer Say</h1>
      </div>
      <div class="reviews-container">
        <div class="box">
          <div class="rev-img">
            <img src="img/rev1.jpg" alt="" />
          </div>
          <h2>Rose Lam</h2>
          <div class="stars">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star-half"></i>
          </div>
          <p>
            "I recently had the pleasure of using this website to book a car for
            my trip, and I must say, the experience was seamless and enjoyable.
            The website is well-designed, user-friendly, and provides all the
            necessary information to make an informed decision."
          </p>
        </div>
        <div class="box">
          <div class="rev-img">
            <img src="img/rev2.jpg" alt="" />
          </div>
          <h2>Adrian Parker</h2>
          <div class="stars">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
          </div>
          <p>
            "Fantactic service from start to finish! The car was
            clean,comfortable, and ready on time.The staff was friendly and
            helpful,and the orices were very reasonable.Highly recommend this
            company!"
          </p>
        </div>
        <div class="box">
          <div class="rev-img">
            <img src="img/rev3.avif" alt="" />
          </div>
          <h2>Loren Botor</h2>
          <div class="stars">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star-half"></i>
            <i class="bx bxs-star-half"></i>
          </div>
          <p>
            "The only reason I’m giving it 4.5 instead of a full 5 stars is that
            the pick-up process took slightly longer than anticipated. However,
            the car itself was in excellent condition and performed flawlessly
            throughout my trip. Overall, I would highly recommend this service!"
          </p>
        </div>
      </div>
    </section>
    
    <!-- Countdown-->
     <section class="countdown">
      <div class="countdown-container">
        <h1>Special Offer Ends In:</h1>
        <div class="countdown">
        <div class="time-box">
          <span id="days">00</span>
          <p>Days</p>
        </div>
        <div class="time-box">
          <span id="hours">00</span>
          <p>Hours</p>
        </div>
        <div class="time-box">
          <span id="minutes">00</span>
          <p>Minutes</p>
        </div>
        <div class="time-box">
          <span id="seconds">00</span>
          <p>Seconds</p>
         </div>
        </div>
      </div>
     </section>

    <!-- About US -->
    <footer class="footer-section" id="about">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="bx bxs-map"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>10000 Prishtine, Agim Ramadani</span>
                            </div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-md-4 mb-30">
                          <div class="single-cta">
                              <i class='bx bxs-phone-call' ></i>
                              <div class="cta-text">
                                  <h4>Call us</h4>
                                  <span>+383 45 574 896</span>
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class='bx bx-envelope' ></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>rentacar@gmail.com</span>
                            </div>
                        </div>
                    </div>
                     </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                  <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>About Us</h3>
                            </div>
                            <div class="footer-text">
                                <p> We believe that every trip deserves a reliable and convenient ride. 
                                  Whether it's a short city visit, a family vacation, or a business trip,
                                   our mission is to provide vehicles that meet your needs and make your
                                    travels effortless.
                                </p>
                            </div>
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                                <a href="#"><i class='bx bxl-twitter'></i></a>
                                <a href="#"><i class='bx bxl-instagram-alt' ></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                      <div class="footer-widget">
                          <div class="footer-widget-heading">
                              <h3>Useful Links</h3>
                          </div>
                          <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">about</a></li>
                            <li><a href="#">services</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Expert Team</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Latest News</a></li>
                        </ul>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                      <div class="footer-widget">
                          <div class="footer-widget-heading">
                              <h3>Subscribe</h3>
                          </div>
                        </div>
                        <div class="footer-text mb-25">
                            <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                        </div>
                        <div class="subscribe-form">
                            <form action="#">
                                <input type="text" placeholder="Email Address">
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

    </footer>

    <!-- ScrollReveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--Link per JS-->
    <script src="app.js"></script>
  </body>
</html>
