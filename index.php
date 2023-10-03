<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/Harina.jpg" type="image/x-icon">
    <title>Harina Cafe</title>
    <link rel="stylesheet" href="./css/style.css">
    <!-- bootstrap links -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <!-- fonts links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- this is icons link -->
</head>
<body>
    <div class="all-content">
        <!-- navbar start -->
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid">
              <a class="navbar-brand" href="" id="logo"><img src="./images/Harina.jpg" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fa-solid fa-bars" style="color: white; font-size: 23px;"></i></span>
              </button> 
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#gallery">Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

        <!-- navbar end -->

        <!-- home section start -->
        <section id="home">
            <div class="content">
                <h3>Coffee Is <br> Always a Good Idea</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, labore
                    <br>ipsum dolor sit amet consectetur.
                </p>
                <a href="menu.php"><button id="btn">Order Now</button></a>
            </div>
        </section>
        <!-- home section end -->

        <!-- about section start -->
        <section id="about">
            <div class="container">
                <div class="heading">About <span>Us</span></div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <img src="./images/coffee.jpg" alt="">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h3>What Makes Our Coffee Special?</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium sapiente delectus voluptatum est ipsa, vero quibusdam quos veniam sequi quae Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, est?
                            <br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad iusto voluptatum eligendi nisi consectetur suscipit modi ab, incidunt totam adipisci.
                            <br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad iusto voluptatum eligendi nisi consectetur suscipit modi ab, incidunt totam adipisci.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- about section end -->
<br>
        <!-- top card start -->
        <section id="top-cards">
          <div class="heading2">Top <span>Categories</span></div>
          <div class="container">
            <div class="row">

              <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                  <img src="./images/Tea.jpg" alt="">
                </div>
              </div>

              <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                  <img src="./images/aroma.jpg" alt="">
                </div>
              </div>

              <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                  <img src="./images/4.jpg" alt="">
                </div>
              </div>

            </div>
          </div>
        </section>
        <!-- top card end -->

<!-- menu -->
<section class="menu" id="menu">
  <div class="container">
  <div class="heading3">Menu</div>
</div>
  <div class="container" id="container2">
  <div class="row">
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/Macaroons.jpg" alt="">
        <div class="card-body">
            <h3>French Macaroons</h3>
            <p><span class="fa-solid fa-cart-shopping"></span></p>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/BlueberryCheesecake.jpg" alt="">
        <div class="card-body">
          <h3>Blueberry Cheesecake</h3>
          <p><span><i class="fa-solid fa-cart-shopping"></i></span></p>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/egg pie.jpg" alt="">
        <div class="card-body">
          <h3>Egg Pie</h3>
          <p><span><i class="fa-solid fa-cart-shopping"></i></span></p>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/LEMON MERINGUE.jpg" alt="">
        <div class="card-body">
          <h3>Lemon Meringue</h3>
          <p><span><i class="fa-solid fa-cart-shopping"></i></span></p>
        </div>
      </div>
    </div>
  </div>

  <div class="row" style="margin-top: 50px;">
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/BROWNIES CHEESECAKE.jpg" alt="">
        <div class="card-body">

          <h3>Brownies Cheesecake</h3>
          <p><span><i class="fa-solid fa-cart-shopping"></i></span></p>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/FRENCH ECLAIRS.jpg" alt="">
        <div class="card-body">
          <h3>French Eclairs</h3>
          <p><span><i class="fa-solid fa-cart-shopping"></i></span></p>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/JAPANESE TART.jpg" alt="">
        <div class="card-body">
          <h3>Japanese Tart</h3>
          <p><span><i class="fa-solid fa-cart-shopping"></i></span></p>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/PORTUGUESE TART.jpg" alt="">
        <div class="card-body">
          <h3>Portuguese Tart</h3>
         <p><span><i class="fa-solid fa-cart-shopping"></i></span></p>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<!-- menu -->
        <!-- our gallery start -->
        <div class="container" id="gallery">
          <div class="heading5"> Our <span>Gallery</span></div>

          <div class="row" style="margin-top: 30px;">
          
            <div class="col-md-4 py-3 py-md-0">
              <div class="card">
                <img src="./images/9.jpg" alt="">
              </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
              <div class="card">
                <img src="./images/10.jpg" alt="">
              </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
              <div class="card">
                <img src="./images/11.jpg" alt="">
              </div>
            </div>

          </div>

          <div class="row" style="margin-top: 30px;">
          
            <div class="col-md-4 py-3 py-md-0">
              <div class="card">
                <img src="./images/12.jpg" alt="">
              </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
              <div class="card">
                <img src="./images/13.jpg" alt="">
              </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
              <div class="card">
                <img src="./images/14.jpg" alt="">
              </div>
            </div>

          </div>
        </div>
        <!-- our gallery end -->

        <!-- contact start -->
        <section id="contact">
          <div class="container">
            <div class="row">

              <div class="col-md-7">
                <div class="heading6">Contact <span>Us</span></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, sapiente
                  <br>ipsum dolor sit amet consectetur.
                </p>
                <input type="text" class="form-control" placeholder="Name" aria-label="default input example"><br>
                <input type="email" class="form-control" placeholder="Email" aria-label="default input example"><br>
                <input type="number" class="form-control" placeholder="Phone" aria-label="default input example"><br>
                <button id="contact-btn">Send Message</button>
              </div>

              <div class="col-md-5" id="col">
                <h1 align="center">HARINA CAFE</h1>
                <p><i class="fa-regular fa-envelope"></i>&nbsp; - &nbsp;harinacafenaga@gmail.com</p>
                <p><i class="fa-solid fa-phone"></i>&nbsp; - &nbsp;92000000000000000</p>
                <p><i class="fa-solid fa-building-columns"></i>&nbsp; - &nbsp; NARRA STREET MARIANO VILLAGE MAGSAYSAY AVENUE NAGA CITY</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et expedita temporibus culpa error ea praesentium.</p>
              </div>

            </div>
          </div>
        </section>
        <!-- contact end -->

        <!-- footer start -->
        <footer id="footer">
          <div class="footer-logo text-center"><img src="./images/Harina.jpg" alt=""></div>
          <div class="socail-links text-center">
            <a href="https://www.facebook.com/HarinaByMikawali"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/harinacafenaga/"><i class="fa-brands fa-instagram"></i></a>
          </div>

          <div class="copyright text-center">
            &copy; Copyright <strong> <span>Harina Cafe</span></strong>. All Rights reserved
          </div>
        </footer>
        <!-- footer end -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>