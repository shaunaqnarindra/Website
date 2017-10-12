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
            <!-- Logo -->
            <div class="navbar-header">
                <a href="homepage.php" class="navbar-brand">EscrowPay</a>
            </div>
            <div>
                <ul class = "nav navbar-nav navbar-right">
                <li><a href="homepage.php">HOME</a></li>
                <li><a href="ourTeam.php">OUR TEAM</a></li>
                <li><a href="ourServices.php">OUR SERVICES</a></li>
                <li><a href="contactUs.php">CONTACT US</a></li>
                <li><a href="signUp.php">SIGN UP</a></li>
                <li class ="active"><a href="logIn.php">LOG IN</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class = "container-fluid" style = "background-image: url('abc.jpg')">
        <div class = "row">
            <div class = "col-md-12 text-center">
                <br>
                <h1><b><font color = "white">WELCOME BACK!</b></h1>
                <br><br><br><br>   
                <?php
                if($_POST)
                {
                $servername = "localhost";
                $username = "Shaunaq";
                $password = "key123";
                $db = "user_shaunaq";

                $conn = new mysqli($servername, $username, $password,$db);
                if ($conn->connect_error) 
                {
                    die("Connection failed: " . $conn->connect_error);
                } 
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $sql = "SELECT fname from user where email = '$email' and pass = '$pass'";
                $result = mysqli_query($conn,$sql);
                if($result)
                {
                               
                                $row = $result->fetch_object();
                                if($row->fname)
                                {
                                echo 'Welcome'.$row->fname; 
                                }
                                else
                                {
                                    echo "user not registered";
                                }
                }
                else
                {
                                echo "Wrong email or password";
                }
            }
        ?>
            </div>
        </div>
        <div class = "row">
            <div class = "col-md-5">
            <div class = "row">
                <blockquote>
                    <img src ="100.png" height = 100 width = 100> 
                Earn 3X on your deposits now!
                </blockquote>
            </div><br>
             <div class = "row">
                <blockquote class = "blockquote-reverse">
                    <img src ="cash.png" height = 100 width = 100> 
                Get instant benefits from our newest schemes and strategies
                </blockquote>
            </div>
             <div class = "row">
                <blockquote>
                    <img src ="img.png" height = 100 width = 100> 
                Carry out smooth barter with our latest tech
                </blockquote>
            </div>
            </div>
            <div class = "col-md-3">
                </div>
            <form class="col-md-4 text-left" method = "POST">
                <div class = "form-group">
                    <img src = "us.png" class = "img-responsive img-cicle center-block" height = 200 width = 200>
                </div>
                <div class="form-group text-left">
                    <input type="text" class="form-control input-lg" placeholder="Email" name= "email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control input-lg" placeholder="Password" name = "pass">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-lg btn-block">Sign In</button>
                    <span class="pull-right"><a href="#">New Registration</a></span>
                </div>
             </form>
        </div>
        
        <br><br><br><br><br>
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
</body>
</html>
            
