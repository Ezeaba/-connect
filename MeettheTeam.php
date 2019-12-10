<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <title>DvCorp</title>
        <link rel="stylesheet" href="./Css/bootstrap.min.css"/>
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="./Css/theTeam.css"/>
        <link rel="shortcut icon" href="DVC.png" type="image/x-icon"/>
    </head>
    <body data-spy="scroll" data-target="#navbarSupportedContent">
        <div class="background">
            <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
                <!-- <div class="container"> -->
                    <a class="navbar-brand" href="index.php"><img src="DVC.png" height="30px" width="66px">Rea-Connekt</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                About Us
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Our Mission</a>
                                    <a class="dropdown-item" href="#">The Team</a>
                                    </div>                                
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Categories
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Agriculture</a>
                                    <a class="dropdown-item" href="#">Engineering</a>
                                    <a class="dropdown-item" href="#">Handicrafts</a>
                                    <a class="dropdown-item" href="#">Sciences</a>
                                    <a class="dropdown-item" href="#">software</a>
                                </div>
                        </ul>

                        <ul class="navbar-nav nav navbar-right">
                            <!-- <li class="mr-2">
                                <a class="nav-link" href="DvCorpSignUp.php">SignUp
                                    <i class="fa fa-user-plus"></i>
                                </a>                                
                            </li> -->
                            <li class="mr-5">
                            <?php
                                if (isset($_SESSION['username'])){
                                echo "<a class='nav-link' href='./includes/logout.php'>Logout
                                <i class='fa fa-user'></i></a>";
                                }else{
                                    echo "<a class='nav-link' href='DvCorpLogin.php'>Login
                                <i class='fa fa-user'></i></a>";
                                }
                            ?>
                            </li>
                            </li>

                        </ul>
                    </div>
                
                <!-- </div> -->
                   
            </nav>
           <br><br><br> 

                
            <div class="container" id="Team">
                <div class="col-12 text-center">
                    <h3 class="heading">Meet the Team</h3>
                    <div class="heading-underline"></div>
                </div>
                    <div class="row padding">
                        <div class="col-sm-4">
                            <div class="card text-center">
                                <img class="card-img-top" src="./img/dvangel.jpg">
                                <div class="card-body">
                                    <h4>Ezeaba Chukwuemeka Evangel</h4>
                                    <p>Has a Bacherlor's degree in Architecture</p>
                                    <p>Graphic Designer</p>
                                    <p>Web Developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                                <div class="card text-center">
                                    <img class="card-img-top" src="./img/Oche.jpg">
                                    <div class="card-body">
                                        <h4>Ogwuche Oche Emmanuel</h4>
                                        <p>Studies Physics in </p>
                                        <p>University of Abuja</p>
                                        <p>Web Developer</p>
                                    </div>
                                </div>
                        </div>
                        <div class="col-sm-4">
                                <div class="card text-center">
                                    <img class="card-img-top" src="./img/solomon.jpg">
                                    <div class="card-body">
                                        <h4>Amadi Solomon Chidiebere</h4>
                                        <p>Has a Bacherlor's degree in Architecture</p>
                                        <p>Web Developer</p>
                                        <p>Digital Marketer</p>
                                    </div>
                                </div>
                            </div>
                    </div>
            </div>
                  
                <br>
  
       
                <div>
            <footer>
                <ul class="nav">
                    <li class="nav-item">
                      <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="DvCorpAboutUs.php">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php" onclick="press()">Subscribe</a>
                    </li>
                  </ul>

        <div class="row">
            <div class="col-md-4">
            <form>
    <h4><a name="contact"></a>Contact us</h4><br>
  <div class="form-row">
      <div class="form-group col-md-6">
      <label for="inputEmail4">Firstname</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Firstname">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Lastname</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Lastname">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Email</label>
    <input type="email" class="form-control" id="inputAddress" placeholder="example@gmail.com">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Phone Nunber</label>
    <input type="number" class="form-control" id="inputAddress2" placeholder="Phone Number">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Message</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Type Message">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
            </div>
            <div class="col-md-4">
            <div class="contact">
            <h3><a name="contact"></a>Address</h3><br><br>
                  <p>ReaTech Office <p>Makrafi Plaza, Kaduna, Nigeria. <p>reatech@gmail.com  <p>Visit us at <a href="https://web.facebook.com/ezeaba.chukwuemeka">Facebook</a><p>Phone: 08119698166</p><p><span style="text-align: end">&copy;2019. All Rights Reserved</span></p>
                  <div class="social">
                    <a href="facebook.com"><img src="facebook-logo-png-9.png" width="40px" height="40px"></a>
                    <a href="twitter.com"><img src="twitter_PNG32 (1).png" width="40px" height="40px"></a>
                    <a href="youtube.com"><img src="youtube_PNG15.png" width="40px" height="40px"></a>
                    <a href="linkedin.com"><img src="linkedIn_PNG38.png" width="40px" height="40px"></a>
    </div>
                </div>
            <div class="col-md-4">

            </div>

        </div>
                  
                  <br>
                  
                </div>
                
    

                  <br>
            </footer>
        </div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="./javaScript/bootstrap.min.js" type="text/javaScript"></script>
            <script type="text/javascript" src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
        <script type="text/javascript">
            $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
                autoplay:1,
            responsive:{
                0:{
                items:1
                },
                600:{
                items:3
                },
                1000:{
                items:5
                }
            }
            });
        </script>

            <script src="./javaScript/landing.js" type="text/javaScript"></script>
    </body>



</html>