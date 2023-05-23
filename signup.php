<?php

@include 'setting.php';

if(isset($_POST['send'])){

  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['mail']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $repassword = mysqli_real_escape_string($conn, $_POST['password']);


  $insert = "INSERT INTO signup(username, mail, password, repassword) VALUES('$username', '$email', '$password', '$repassword')";
  mysqli_query($conn, $insert);

}else{
  echo "";
}
?>

<?php
  if($conn->connect_error){
    die('Connection Failed:' .$conn->connect_error);
  }

  $sql = "SELECT * FROM signup";
  $results = $conn->query($sql);

  if(!$results){
    die('No Record:' .$conn->connect_error);
  }
  $row=$results->fetch_assoc();
?>

<!-- ----------------------------- -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DiscountBaba</title>

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&display=swap" rel="stylesheet">

 


</head>
<body>
    <div class="container">
        <header>
            <div class="navbar">
                <div class="logo"> 
                    <a href="index.php" class="logoTxt">DiscountBaba</a> 
                </div>
                <ul class="links">
                    
                    <li><a href="index.php">Deals</a></li>
                    <li><a href="Catagories">Catagories</a></li>
                    <li><a href="Contract">Contract</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
                <a href="login.php" class="action_btn">Get Started</a>
                <div class="toggleBtn">
                    <i class="fa-solid fa-bars"></i>
                </div>


            </div>

            <div class="dropdown open">
                <ul class="links">
                    
                    <li><a href="index.php">Deals</a></li>
                    <li><a href="Catagories">Catagories</a></li>
                    <li><a href="Contract">Contract</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="login.php" class="action_btn">Get Started</a></li>

                </ul>
            </div>
        </header>

            <div class="signup">
                <h1>SignUp</h1>
                 <form id="login-form" action="signup.php" method="POST">
                    <input type="text" id="username" name="username" placeholder="Username" required>
                    <input type="email" id="mail" name="mail" placeholder="E-mail" required>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <input type="password" id="password" name="re-password" placeholder="Re Enter Password" required>
                    <button class="signup-btn" type="submit"  name="send">SignUp</button>
                </form>
                <div class="login">
                    <p>Already have an account? <a href="login.php">LogIn</a></p>
                </div>
                
            </div> 

        <footer class="signup-footer">
            <div class="footerContent">
                <h1>DiscountBaba</h1>
            <p>Welcome to DiscountBaba.com, here you will find every discount is available in any shops, resturents and hotels. 
               Enjoy your everyday discount from here. And if you have queries then please contact us. Thank You.
            </p>

            </div>

            <div class="socials">
                <ul class="social">
                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>

                </ul>
            </div>
        </footer>

        </div>


    </div>
   
   
   
<script src="index.js"></script>
</body>
</html>