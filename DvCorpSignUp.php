<!DOCTYPE html>
<html>
    <head>
        <title>DvCorp</title>
        <link rel="stylesheet" href="./Css/bootstrap.min.css"/>
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="./Css/SignUp.css"/>
        <link rel="shortcut icon" href="DVC.png" type="image/x-icon"/>
    </head>
    <body>
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
                                    <a class="dropdown-item" href="DvCorpAboutUs.php">Our Mission</a>
                                    <a class="dropdown-item" href="MeettheTeam.php">The Team</a>
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
                            <li class="mr-5">
                                <a class="nav-link" href="DvCorpLogin.php">Login
                                    <i class="fa fa-user"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                
                <!-- </div> -->
                   
            </nav>
            <br>
            <br>
            <br>
            <br>

            <div class="container">
                    <form class="needs-validation" novalidate method="POST" action="./includes/signup.php">
                        <div class="form-row">
                              <div class="col-md-4 mb-3">
                                <label for="validationCustom01">First name</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="firstname" required>
                                <div class="valid-feedback">
                                  Looks good!
                                </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                <label for="validationCustom02">Middle name</label>
                                <input type="text" class="form-control" id="validationCustom02" placeholder="Middle name" name="middlename" required>
                                <div class="valid-feedback">
                                  Looks good!
                                </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                <label for="validationCustomUsername">Last Name</label>
                                <div class="input-group">
                                <input type="text" class="form-control" id="validationCustom03" placeholder="Last name" name="lastname" required>
                                  <div class="invalid-feedback">
                                    Please choose a username.
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                      <label for="validationCustom04">Email Address</label>
                                      <input type="text" class="form-control" id="validationCustom04" placeholder="Email Address" name="email" required>
                                      <div class="valid-feedback">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationCustomUsername">Username</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        </div>
                                        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" name="username" required>
                                        <div class="invalid-feedback">
                                          Please choose a username.
                                        </div>
                                      </div>
                                    </div>
                        </div>
                        <!-- <div class="form-row">
                                <div class="col-md-6 mb-3">
                                  <label for="Age">Age</label>
                                  <input type="text" class="form-control" id="Age" placeholder="Your Age" name="age" required>
                                  <div class="valid-feedback">
                                    Looks good!
                                  </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="Age">Gender</label>
                                    <input type="text" class="form-control" id="Age" placeholder="Gender" name="gender" required>
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                  </div>
                    </div> -->
                    
                    <div class="form-row">
                                <div class="col-md-6 mb-3">  
                        <label for="validationCustom05">Password</label>
                            <input type="password" class="form-control" id="validationCustom05" placeholder="Password" name="password" required>
                                </div>
                                <div class="col-md-6 mb-3"> 
                            <label for="validationCustom05">Confirm Password</label>
                            <input type="password" class="form-control" id="validationCustom05" placeholder="Confirm Password" name="password_repeat" required>
                                </div>
                    </div>
                          <!-- <div class="form-row">
                              <div class="col-md-6 mb-3">
                                <label for="validationCustom03">City</label>
                                <input type="text" class="form-control" id="validationCustom03" placeholder="City" name="city" required>
                                <div class="invalid-feedback">
                                  Please provide a valid city.
                                </div>
                              </div>
                              
                              <div class="col-md-3 mb-3">
                                <label for="validationCustom04">State</label>
                                <input type="text" class="form-control" id="validationCustom04" placeholder="State" name="state" required>
                                <div class="invalid-feedback">
                                  Please provide a valid state.
                                </div>
                              </div>
                              <div class="col-md-3 mb-3">
                                <label for="validationCustom05">Zip</label>
                                <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" name="zip" required>
                                <div class="invalid-feedback">
                                  Please provide a valid zip.
                                </div>
                              </div>
                            </div> -->
                            <!-- <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                  Agree to terms and conditions
                                </label>
                                <div class="invalid-feedback">
                                  You must agree before submitting.
                                </div>
                              </div> -->
                              <button class="btn btn-primary" type="submit" name="signup-submit" >Submit form</button>
                  
                            </div>
                            
                          </form>
                          <?php
                if(isset($_GET['signup'])){
                    if($_GET['signup'] == "success"){
                        echo '<p class= "msg"> <h2 style ="color:green;">Congratulations</h2>';
                    }
                }
                 ?>         
                          <script>
                          // Example starter JavaScript for disabling form submissions if there are invalid fields
                          (function() {
                            'use strict';
                            window.addEventListener('load', function() {
                              // Fetch all the forms we want to apply custom Bootstrap validation styles to
                              var forms = document.getElementsByClassName('needs-validation');
                              // Loop over them and prevent submission
                              var validation = Array.prototype.filter.call(forms, function(form) {
                                form.addEventListener('submit', function(event) {
                                  if (form.checkValidity() === false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                  }
                                  form.classList.add('was-validated');
                                }, false);
                              });
                            }, false);
                          })();
                          </script>    
            </div>
            <br><br>          

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
            <script src="./javaScript/bootstrap.min.js"></script>
    </body>



</html>