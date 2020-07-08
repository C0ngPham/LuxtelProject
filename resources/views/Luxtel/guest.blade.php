

<!-- HTML CODE -->
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Booking Guest Room</title>
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
          <form action="payment" method="POST">
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="type">Room Option</label>
                    <select name="type" id="type">
                        <option value="1">Guest Room</option>
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
                    <input type="text" class="form-control" name="arrival" id="arrival_date" autocomplete="off" onchange="showPrice()"/>
                    </div>
                </div>

                <div class="col-sm-6 form-group">
                    <label for="">Departure Date</label>
                    <div style="color:red">{{$errors->first('departure')}}</div>
                    <div style="position: relative;">
                    <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span>
                    <input type="text" class="form-control" name="departure"id="departure_date" autocomplete="off" onchange="showPrice()"/>
                    </div>
                </div>
                </div>

                <div class="row">
                <div class="col-md-6 form-group">
                    <label for="room">Number of room</label>
                    <div style="color:red">{{$errors->first('room')}}</div>
                    <select id="room" name="room" class="form-control" onchange="showPrice()">
                    <option value="1">1 Room</option>
                    <option value="2">2 Rooms</option>
                    <option value="3">3 Rooms</option>
                    <option value="4">4 Rooms</option>
                    </select>
                </div>

                <div class="col-md-6 form-group">
                    <label for="room">Guests (Max 8 guest/room)</label>
                    <div style="color:red">{{$errors->first('guest')}}</div>
                    <input type="number" id="guest" name="guest" class="form-control" onchange="showPrice()" value="1" />
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
                    
                   <input type="hidden" id="cost" name="cost" class="form-control"/>
                  <input id="button" onclick="return confirm('Are you sure to order?');" type="submit" value="Reserve Now" class="btn btn-primary" />

                   
                </div>
                <h2 id="price" >$100</h2>
                </div>
                <h3 id="alert" style="color:red"></h3>
                <p id = "cal"></p>
                @csrf
            </form>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
          <h3 class="mb-5">Room Detail</h3>

          <div class="media d-block room mb-0">
            <figure>
              <img src="images/GuestRoom/GuestRoom.jpg" alt="Generic placeholder image" class="img-fluid" />
              <div class="overlap-text">
                <span>
                  Featured Room
                  <span class="ion-ios-star"></span>
                  <span class="ion-ios-star"></span>
                  <span class="ion-ios-star"></span>
                </span>
              </div>
            </figure>
            <div class="media-body">
              <h3 class="mt-0"><a href="#">GUEST ROOM</a></h3>
              <ul class="room-specs">
                <li>
                  <span class="ion-ios-people-outline"></span> Max 8 Guests
                </li>
                <li><span class="ion-ios-crop"></span> 30 m <sup>2</sup></li>
              </ul>
              <p>
                King-sized bed or twin beds
              </p>
              <p>
                Small writing desk
              </p>
              <p>
                IDD phone with voice message system
              </p>
              <p>
                Complimentary WiFi and wired broadband Internet access
              </p>
              <p>
                40-inch flat-screen TV with international channels
              </p>
              <p>
                High-quality toiletries
              </p>
              <p>
                Hairdryer
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END section -->

  <section class="section-cover" style="
        background-image: url(images/GuestRoom/GuestRoom.jpg);
        height: 800px;
        margin: 20px;
      "></section>
  <!-- END section -->

  <section class="section-cover" style="
        background-image: url(images/GuestRoom/GuestRoom1.jpg);
        height: 800px;
        margin: 20px;
      "></section>
  <!-- END section -->

  <section class="section-cover" style="
        background-image: url(images/GuestRoom/GuestRoom2.jpg);
        height: 800px;
        margin: 20px;
      "></section>
  <!-- END section -->

  <section class="section-cover" style="
        background-image: url(images/GuestRoom/GuestRoom3.jpg);
        height: 800px;
        margin: 20px;
      "></section>
  <!-- END section -->

  <section class="section-cover" style="
        background-image: url(images/GuestRoom/GuestRoom4.jpg);
        height: 800px;
        margin: 20px;
      "></section>
  <!-- END section -->

  <section class="section-cover" style="
        background-image: url(images/GuestRoom/GuestRoom5.jpg);
        height: 800px;
        margin: 20px;
      "></section>
  <!-- END section -->

  <section class="section-cover" style="
        background-image: url(images/GuestRoom/GuestRoom6.jpg);
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

  <script>
    function showPrice() {
    var vroom = parseInt(document.getElementById("room").value);
    var vguest = parseInt(document.getElementById("guest").value);
    var button = document.getElementById("button");

    var varr = parseInt(document.getElementById("arrival_date").value.split("/")[1]);
    var m_varr = parseInt(document.getElementById("arrival_date").value.split("/")[0]);
    var y_varr = parseInt(document.getElementById("arrival_date").value.split("/")[2]);

    var vdpt = parseInt(document.getElementById("departure_date").value.split("/")[1]);
    var m_vdpt = parseInt(document.getElementById("departure_date").value.split("/")[0]);
    var y_vdpt = parseInt(document.getElementById("departure_date").value.split("/")[2]);

    var ldate = new Date(y_varr,m_varr,0).getDate();
    var range = vdpt - varr;
    var vprice = 100*vroom + 50*vguest;
    var mrange = m_vdpt - m_varr;
   
    
    if (isNaN(range)){
      document.getElementById("price").innerHTML = ""
      button.style.display = "none";
      document.getElementById("alert").innerHTML = "Date fields are blank!";
    }
    else if (m_vdpt < m_varr || y_vdpt < y_varr){
      document.getElementById("price").innerHTML = ""
      button.style.display = "none";
      document.getElementById("alert").innerHTML = "Departure Date should after Arrival Date!";
    }
    else if(m_vdpt == m_varr && vdpt <= varr){
      document.getElementById("price").innerHTML = ""
      button.style.display = "none";
      document.getElementById("alert").innerHTML = "Departure Date should after Arrival Date!";
  
    }
    else if (vguest < 1) {
      document.getElementById("price").innerHTML = ""
      button.style.display = "none";
      document.getElementById("alert").innerHTML = "Number of guest have to be greater than 0!";
    }
    else if (vguest > vroom*8){
      document.getElementById("price").innerHTML = ""
      button.style.display = "none";
      document.getElementById("alert").innerHTML = "Maximum number of guests per room is 8!";
    }

    else{
      if (m_vdpt > m_varr ){
        range = ldate - varr + vdpt;

        if (range > 30|| mrange > 1 ){
          document.getElementById("price").innerHTML = ""
          button.style.display = "none";
          document.getElementById("alert").innerHTML = "The maximum rental day is 30";
        }
        else{

          button.style.display = "block";
          document.getElementById("alert").innerHTML = "";
          if (vguest <= vroom*2) {
            vprice = 100*vroom*range ;
          } else {
            vprice = (100*vroom + 50*vguest - 100*vroom)*range;
          }
          document.getElementById("price").value = vprice;
          document.getElementById("price").innerHTML = "$" + vprice;
        }
      }
      else{

        button.style.display = "block";
        document.getElementById("alert").innerHTML = "";
        if (vguest <= vroom*2) {
          vprice = 100*vroom*range ;
        } else {
          vprice = (100*vroom + 50*vguest - 100*vroom)*range;
        }
        // document.getElementById("price").value = vprice;
        document.getElementById("cost").value = vprice;
        document.getElementById("price").innerHTML = "$" + vprice;
      }
    }    
}
  </script>

  <script src="js/main.js"></script>
</body>

</html>