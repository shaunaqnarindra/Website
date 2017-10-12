<html>
  <!--CDN -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
    rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"
    rel="stylesheet" type="text/css">
    <style>
    .pos
    {
       margin-bottom:200px;
    }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="homepage.php" class="navbar-brand">EscrowPay</a>
            </div>
            <div>
                <ul class = "nav navbar-nav navbar-right">
                <li><a href="homepage.php">HOME</a></li>
                <li><a href="ourTeam.php">OUR TEAM</a></li>
                <li><a href="ourServices.php">OUR SERVICES</a></li>
                <li><a href="contactUs.php">CONTACT US</a></li>
                <li class = "active"><a href="signUp.php">SIGN UP</a></li>
                <li><a href="logIn.php">LOG IN</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class = "container-fluid">
        <div class = "row" style="background-image: url('signwall.jpg')">
           <div class = "row">
            <div class = "col-md-12 text-center">
                <br>
                <h1><font color = "white">SIGN UP</h1>
                <h6>
                <?php
                    $a = $_POST['pass'];
                    $b = $_POST['pass_c'];
                    if($a == $b)
                    {
                            echo "welcome!";
                    }
                    else if($a <> $b)
                    {
                       echo " Kindly  try  again  as  the  passwords  didn't  match";
                    }

                    if($_POST && ($a == $b))
                    {
                            print_r($_SESSION);
                            $handle = fopen("s.rtf", "r");
                            echo fread($handle);
                            $servername = "localhost";
                            $username = "Shaunaq"; //kmvstudents
                            $password = "key123";
                            $db = "user_shaunaq";
                            // Create connection
                            $conn = new mysqli($servername, $username, $password,$db);

                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            } 
                            echo "Connected successfully";
                            
                            
                            $fname = $_POST['fname'];
                            $lname = $_POST['lname'];
                            $addr = $_POST['addr'];
                            $email = $_POST['email'];
                            $pasword = $_POST['pass'];
                            $sql = "INSERT INTO user VALUES ('$fname', '$lname', '$addr', '$email', '$pasword')";
                            if(mysqli_query($conn,$sql))
                           {
                                echo "Your account has been successfuly added";
                            }
                            else
                            {
                                echo " There was some error, kindly try some other time";
                            }

                    }
                ?>
                </h6>               
            </div>
           </div>
           <div class = "row">
               <br><br>
               <div class = "col-md-4">
                </div>
                   <form class = "col-md-4" method="post">
                       <div class="form-group">
                            <input type="text" class="form-control input-lg" placeholder="First Name" name = "fname"><br>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" placeholder="Last Name" name = "lname"><br>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" placeholder="Address" name = "addr"><br>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control input-lg" placeholder="Email" name = "email"><br>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control input-lg" placeholder="Password" name = "pass"><br>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control input-lg" placeholder="Confirm password" name = "pass_c">
                        </div><br>
                        <div class="form-group">
                            <button class="btn btn-primary btn-lg btn-block">Submit</button>
                        </div>
                </form>
            <div class = "col-md-4">
            </div>
            <div class = "row">
                <div class = "col-md-12">
                    <br> <br>
                </div>
            </div>
        </div>
    </div>
    <footer>
      <div class="section">
      <div class="container-fluid">
        <div class="row text-bottom">
          <div class="col-xs-3 text-center">
            <a href = "https://www.instagram.com/shaunaqnarindra/?hl=en"><i class="fa fa-5x fa-fw fa-instagram"></i></a>
          </div>
          <div class="col-xs-3 text-center">
            <a href="https://twitter.com/shaunaqnarindra"><i class="fa fa-5x fa-fw fa-twitter"></i></a>
          </div>
          <div class="col-xs-3 text-center">
            <a href="https://www.facebook.com/shaunaqnarindra"><i class="fa fa-5x fa-fw fa-facebook"></i></a>
          </div>
          <div class="col-xs-3 text-center">
            <a href="https://www.linkedin.com/in/shaunaq-narindra-179a5647/"><i class="fa fa-5x fa-fw fa-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>
    </footer>
</body>a
</html>