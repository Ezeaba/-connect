
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
                                    <a class="nav-link" href="DvCorpLogin.php">Login
                                        <i class="fa fa-user"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    
                    <!-- </div> -->
                    
            </nav>
                <br><br><br><br><br>
                <div class="container jumbotron" align="center" style="padding: 50px;">
                    <i class="fa fa-star fa-2x" data-index="0"></i>
                    <i class="fa fa-star fa-2x" data-index="1"></i>
                    <i class="fa fa-star fa-2x" data-index="2"></i>
                    <i class="fa fa-star fa-2x" data-index="3"></i>
                    <i class="fa fa-star fa-2x" data-index="4"></i>
                        
                </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script>
            var ratedIndex = -1, UserId = 0;

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
    
    </body>
</html>
