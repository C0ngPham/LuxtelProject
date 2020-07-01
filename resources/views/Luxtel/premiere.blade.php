<!DOCTYPE html>
<html lang="en">

<head>
  <title>Booking Premiere Room</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700" rel="stylesheet" />

  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/animate.css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" />

  <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css" />
  <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" />

  <!-- Theme Style -->
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <header role="banner">
    <nav class="navbar navbar-expand-md navbar-dark bg-light">
      <div class="container">
        <a class="navbar-brand" href="index">Luxtel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
          <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
            <li class="nav-item">
              <a class="nav-link" href="index">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about">About & Contact</a>
            </li>

            <li class="nav-item cta">
              <a class="nav-link active" href="rooms"><span>Book Now</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- END header -->

  <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
    <div class="container">
      <div class="row align-items-center site-hero-inner justify-content-center">
        <div class="col-md-12 text-center">
          <div class="mb-5 element-animate">
            <h1>Reservation</h1>
            <p>Discover our world's #1 Luxury Room For VIP.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END section -->

  <section class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="mb-5">Reservation Form</h2>
          <form action="booking" method="POST">
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="type">Room Option</label>
                    <select name="type" id="type">
                        <option value="2">Premiere Room</option>
                    </select>
                </div>
            </div>

            <div class="row">
              <div class="col-md-12 form-group">
                  <label for="name">Full Name</label>
                    <div style="color:red">{{$errors->first('name')}} </div>
                    <input type="text" name="name" class="form-control" value="{{old('name')}}"/>


                </div>
                </div>
                <div class="row">
                <div class="col-md-12 form-group">
                    <label for="phone">Phone</label>
                    <div style="color:red">{{$errors->first('phone')}}</div>
                    <input type="tel" name="phone" class="form-control" value="{{old('phone')}}"
                    />
                </div>
                </div>

                <div class="row">
                <div class="col-md-12 form-group">
                    <label for="email">Email</label>
                    <div style="color:red">{{$errors->first('email')}}</div>
                    <input type="email" name="email"value="{{old('email')}}"class="form-control" />
                </div>
                </div>
                <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="">Arrival Date</label>
                    <div style="color:red">{{$errors->first('arrival')}}</div>
                    <div style="position: relative;">
                    <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span>
                    <input type="text" class="form-control" name="arrival" id="arrival_date" autocomplete="off"/>
                    </div>
                </div>

                <div class="col-sm-6 form-group">
                    <label for="">Departure Date</label>
                    <div style="color:red">{{$errors->first('departure')}}</div>
                    <div style="position: relative;">
                    <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span>
                    <input type="text" class="form-control" name="departure"id="departure_date" autocomplete="off"/>
                    </div>
                </div>
                </div>

                <div class="row">
                <div class="col-md-6 form-group">
                    <label for="room">Number of room</label>
                    <div style="color:red">{{$errors->first('noroom')}}</div>
                    <select name="room" class="form-control">
                    <option value="1">1 Room</option>
                    <option value="2">2 Rooms</option>
                    <option value="3">3 Rooms</option>
                    <option value="4">4 Rooms</option>
                    </select>
                </div>

                <div class="col-md-6 form-group">
                    <label for="room">Guests (Max 8)</label>
                    <div style="color:red">{{$errors->first('noguest')}}</div>
                    <select name="guest" class="form-control">
                        <option value="1">1 Guest</option>
                        <option value="2">2 Guests</option>
                        <option value="3">3 Guests</option>
                        <option value="4">4 Guests</option>
                        <option value="5">5 Guests</option>
                        <option value="6">6 Guests</option>
                        <option value="7">7 Guests</option>
                        <option value="8">8 Guests</option>
                    </select>
                </div>
                </div>
                <div class="row">
                <div class="col-md-12 form-group">
                    <label for="message">Write a Note</label>
                    <div style="color:red">{{$errors->first('note')}}</div>
                    <textarea type="text" name="note" class="form-control" cols="30" rows="8" value="{{old('note')}}"></textarea>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6 form-group">
                    <input onclick="return confirm('Are you sure you want to order');" type="submit" value="Reserve Now" class="btn btn-primary" />
                </div>
                <?php echo "<h2>$200</h2>";
               ?>
                </div>

                @csrf
            </form>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
          <h3 class="mb-5">Room Detail</h3>

          <div class="media d-block room mb-0">
            <figure>
              <img src="images/PremiumRoom/PremiumRoom.jpg" alt="Generic placeholder image" class="img-fluid" />
              <div class="overlap-text">
                <span>
                  Featured Room
                  <span class="ion-ios-star"></span>
                  <span class="ion-ios-star"></span>
                  <span class="ion-ios-star"></span>
                  <span class="ion-ios-star"></span>
                </span>
              </div>
            </figure>
            <div class="media-body">
              <h3 class="mt-0"><a href="#">PREMIERE ROOM</a></h3>
              <ul class="room-specs">
                <li>
                  <span class="ion-ios-people-outline"></span> Max 12 Guests
                </li>
                <li><span class="ion-ios-crop"></span> 50 m <sup>2</sup></li>
              </ul>
              <p>
                King-sized bed or twin beds
              </p>
              <p>
                Writing desk
              </p>
              <p>
                IDD phone with voice message box
              </p>
              <p>
                Complimentary WiFi and wired broadband Internet access
              </p>
              <p>
                42-inch flat-screen TV with international channels
              </p>
              <p>
                Marble bathroom with bathtub or shower
              </p>
              <p>
                Essential Elemis toiletries
              </p>
              <p>
                Hairdryer
              </p>
              <p>
                Coffee machine
              </p>
              <p>
                Minibar
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END section -->

  <section class="section-cover" style="
        background-image: url(images/PremiumRoom/PremiumRoom.jpg);
        height: 800px;
        margin: 20px;
      "></section>
  <!-- END section -->

  <section class="section-cover" style="
        background-image: url(images/PremiumRoom/PremiumRoom1.jpg);
        height: 800px;
        margin: 20px;
      "></section>
  <!-- END section -->

  <section class="section-cover" style="
        background-image: url(images/PremiumRoom/PremiumRoom2.jpg);
        height: 800px;
        margin: 20px;
      "></section>
  <!-- END section -->

  <section class="section-cover" style="
        background-image: url(images/PremiumRoom/PremiumRoom3.jpg);
        height: 800px;
        margin: 20px;
      "></section>
  <!-- END section -->

  <section class="section-cover" style="
        background-image: url(images/PremiumRoom/PremiumRoom4.jpg);
        height: 800px;
        margin: 20px;
      "></section>
  <!-- END section -->

  <section class="section-cover" style="
        background-image: url(images/PremiumRoom/PremiumRoom5.jpg);
        height: 800px;
        margin: 20px;
      "></section>
  <!-- END section -->

  <section class="section-cover" style="
        background-image: url(images/PremiumRoom/PremiumRoom6.jpg);
        height: 800px;
        margin: 20px;
      "></section>
  <!-- END section -->

  <!-- Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-4">
          <h3>Phone Support</h3>
          <p>24/7 Call us now.</p>
          <p class="lead"><a href="tel://">+84 28 3822 8888</a></p>
        </div>
        <div class="col-md-4">
          <h3>Connect With Us</h3>
          <p>We are socialized. Follow us</p>
          <p>
            <a href="#" class="pl-0 p-3"><span class="fa fa-facebook"></span></a>
            <a href="#" class="p-3"><span class="fa fa-twitter"></span></a>
            <a href="#" class="p-3"><span class="fa fa-instagram"></span></a>
            <a href="#" class="p-3"><span class="fa fa-vimeo"></span></a>
            <a href="#" class="p-3"><span class="fa fa-youtube-play"></span></a>
          </p>
        </div>
        <div class="col-md-4">
          <h3>Connect With Us</h3>
          <p>
            Get newest information from Luxtel.
          </p>
          <form action="#" class="subscribe">
            <div class="form-group">
              <button type="submit">
                <span class="ion-ios-arrow-thin-right"></span>
              </button>
              <input type="email" class="form-control" placeholder="Enter email" />
            </div>
          </form>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-7 text-center">
          &copy;
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;
          <script>
            document.write(new Date().getFullYear());
          </script>
          All rights reserved<br />This is Final Project for Web developer
          subject made with
          <i class="fa fa-heart-o" aria-hidden="true"></i> by
          <a href="https://www.facebook.com/C0ngPham" target="_blank">Cong Pham</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
      </div>
    </div>
  </footer>
  <!-- END footer -->

  <!-- loader -->
  <div id="loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214" />
    </svg>
  </div>

  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.0.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>

  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/magnific-popup-options.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>

  <script>
    $("#arrival_date, #departure_date").datepicker({});
  </script>

  <script src="js/main.js"></script>
</body>

</html>