<?php
session_start();
require("./includes/BusinessFunction.php");
date_default_timezone_set('Africa/Lagos');

 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>DvCorp</title>
        <link rel="stylesheet" href="./Css/bootstrap.min.css"/>
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/BusinessPage.css"/>
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
                                    <a class="dropdown-item" href="SearchOutput.php?id=AutoService">Auto Services</a>
                                    <a class="dropdown-item" href="SearchOutput.php?id=Beauty">Beauty</a>
                                    <a class="dropdown-item" href="SearchOutput.php?id=Restaurants">Restaurants</a>
                                    <a class="dropdown-item" href="SearchOutput.php?id=Medical">Medical Services</a>
                                    <a class="dropdown-item" href="SearchOutput.php?id=HomeServices">Home services</a>
                                    <a class="dropdown-item" href="SearchOutput.php?id=Entertainment">Entertainment Centers</a>
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
                                    echo $_SESSION['username'];
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
            <br><br><br><br><br>
    <div class="container jumbotron">
        
        <div class="row">
            <div class="col-md-6">
                    <?php
                     $Busid = $row['id'];
                    ?>

                        <h1><?php echo $row['BusinessName']?></h1>
                        <p><?php echo $Busid ?> </p>
                        <p><?php echo $row['Address']?> </p>
                        <p><?php echo $row['Phone']?> </p>
                        <p><?php echo $row['Time']?></p>


                    </div>
                    <div class="col-md-6">
                        <div>
                        <iframe src="<?php echo $row['Map']?>"></iframe>
                        </div>
                    </div>
        </div>
    </div>
    <div class="#gallery container jumbotron">
	                        <h5>Photos<h5>
	                                                    
	                            <div class="gallery">
	                            <?php
	                            $id = $_GET['id'];
	                            
	                                // Include the database configuration file
	                                include_once './includes/databaseHandler.php';
	
	                                // Get images from the database
	                                $query = $con ->query("SELECT * FROM images WHERE BusinessId ='$id'");
	
	                                if($query->num_rows > 0){
	                                    while($row = $query->fetch_assoc()){
	                                        $imageURL = './photoGallery/'.$row["file_name"];
	                                ?>
	                                    <img src="<?php echo $imageURL; ?>" alt="" height="200px" width="300px"/>
	                                <?php }
	                                }else{ ?>
	                                    <p>No image(s) found...</p>
	                            <?php } ?> 
	                        
	                        <!-- to echo the image  -->
                                </div>
                                <!-- Button trigger modal -->
	                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
	                            Upload Image
	                            </button>
	

	                            <!-- Modal -->
	                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	                            <div class="modal-dialog modal-dialog-centered" role="document">
	                                <div class="modal-content">
	                                    <div class="modal-header">
	                                        <h5 class="modal-title" id="exampleModalCenterTitle">Upload Image</h5>
	                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                        <span aria-hidden="true">&times;</span>
	                                        </button>
	                                    </div>
	                                    <div class="modal-body">
	                                    <div id="content">
	                                        <?php $url = $row['id'];
	                                            $action = "./includes/Upload.php?id={$url}"
	                                        ?>
	                                        <form action="<?php echo $action ?>" method="post" enctype="multipart/form-data">
	                                            Select Image Files to Upload:
	                                            <input type="file" name="files[]" multiple >
	                                            <input type="submit" name="submit" value="UPLOAD">
	                                        </form>
	                                        </div>
	                                    </div>
	                                    <div class="modal-footer">
	                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                                    </div>
	                                </div>
	                            </div>
	                            </div>
	                    </div>
	                    <hr>



    <div class="container">
                <div class="row">
                    <div class="col-md-8 jumbotron">
                        <div id="details">
                            <h5 class="detailinfo">General Info:</h5><hr><span><?php echo $general?></span><br><br>
                            <h5>Hours:</h5><hr><span> <?php echo $Time?></span><br><br>
                            <h5>Services/Products:</h5><hr><span> <?php echo $Time?></span><br><br>
                            <h5>Payment Method:</h5><hr><span> <?php echo $payment?></span><br><br>
                            <h5>Neighborhood:</h5><hr><span> <?php echo $Neighbor?></span><br><br>
                            <h5>Other Links:</h5><hr><span> <?php echo $Links?></span><br><br>
                            <h5>Other Information:</h5><hr><span> <?php echo $OtherInfo?></span><br><br>
                        </div>
                    </div>
                </div>
    </div>

    <div class="container">

                <div class="row">
                    <div class="col-md-8 jumbotron">    
                    <h3 id="#reviews">REVIEWS</h3>
                    <hr>
                        <!-- <div class ="row" id="starrating">
                            <div class="col-md-4" align="center" style="padding: 50px;">
                                <h3 id="ratingHead">Hi<?php
                                echo " ".$_SESSION['username'].".";
                                ?></h3>
                                <p id="ratingText">Rate this Business!</p>
                            </div>
                            <div class="col-md-8" align="left" style="padding: 50px;" >
                                <h4>
                                    <i class="fa fa-star fa-2x" data-index="0"></i>
                                    <i class="fa fa-star fa-2x" data-index="1"></i>
                                    <i class="fa fa-star fa-2x" data-index="2"></i>
                                    <i class="fa fa-star fa-2x" data-index="3"></i>
                                    <i class="fa fa-star fa-2x" data-index="4"></i>
                                </h4>
                            </div>
                        </div> -->
                        <?php
                        if (isset($_SESSION['username'])){

                            $userid = $_SESSION['userid'];
                           
                    
                            echo "<div>
                                <form action='./includes/reviews.php?id={$Busid}' method='POST'>
                                <input type='hidden' name='userid' value='$userid'>
                                <input type='hidden' name='busid' value='$Busid'>
                                <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
                                <textarea class='form-control' rows='5' id='reviews' placeholder='Tell us what you think about this Business' name='review'></textarea>
                                <button type='submit' class='btn btn-primary' name='submit' id='reviewbtn'>Submit</button>
                                </form>
                            </div> <hr><br>";
                        }
                        ?>
                    
                    
                        <?php
                        function getcomments($con){
                        $id = $_GET['id'];   

                                $sql = "SELECT * FROM reviews ORDER BY date DESC";
                                $query = mysqli_query($con, $sql);
                                while($row = mysqli_fetch_assoc($query)){
                                    if($id == $row['businessid']){
                                    echo"<h5>".$row['username']."</h5>";
                                    echo $row['reviewText']."<br>";
                                    echo $row['date']."<br><br>";}
                                }   
                            }                   
                        
                        getcomments($con);
                        ?>
                    
                    
            </div>
        </div>

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
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script>
            var ratedIndex = -1, UserId = <?php echo $_SESSION['userid'];?>;

            $(document).ready(function() {
                resetStarColors();

                $('.fa-star').on('click', function(){
                    ratedIndex = parseInt($(this).data('index'));
                    saveToTheDB();
                })

                $('.fa-star').mouseover(function(){
                    resetStarColors();

                    var currentIndex = parseInt($(this).data('index'));

                    for (var i=0; i <= currentIndex; i++)
                        $('.fa-star:eq('+i+')').css('color', 'gold');

                });

                $('.fa-star').mouseleave(function(){
                    resetStarColors();

                    if (ratedIndex != -1)
                    for (var i=0; i <= ratedIndex; i++)
                        $('.fa-star:eq('+i+')').css('color', 'gold');
                });

            });

            function saveToTheDB(){
                $.ajax({
                    url: "./Srating.php",
                    method: "POST",
                    dataType: "json",
                    data: {
                        save: 1,
                        UserId: UserId,
                        ratedIndex: ratedIndex
                    }, success: function(r){
                        UserId = r.UserId;

                    }
                })
            }

            function resetStarColors(){
                $('.fa-star').css('color', 'white');
            }
        </script>
            <script>
            $(document).ready(function(){
                $('#insert').click(function(){
                    var image_name = $('#image').val();
                    if(image_name == ''){
                        alert("Select Image");
                        return false;
                    }
                    else{
                        var extension = $('image').val().split('.').pop().toLowerCase();
                        if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1){
                            alert('Invalid Image File');
                            $('#image').val('');
                            return false;
                        }
                    }
                });
            });
            </script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="./javaScript/bootstrap.min.js"></script>
            <script src="./javaScript/landing.js"></script>
    </body>



</html>