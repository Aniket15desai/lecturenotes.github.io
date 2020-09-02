<?php
$insert = false;
if(isset($_POST['name'])){

    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to" .mysqli_connect_error());
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $sql = "INSERT INTO `submission_form`.`submission` (`Name`, `Email`, `Message`, `Date`) 
    VALUES ('$name', '$email', '$message', current_timestamp());";

    //echo $sql;

    if($con->query($sql)==true){
       // echo "Successfully Inserted";
       $insert = true;
    }
    else{
        "ERROR: $sql <br> $con->error ";
    }

    $con->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
    <script src="https://kit.fontawesome.com/f9cebb06b7.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <header>
    <nav class="menubar">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa fa-bars"></i>
        </label>
        <ul>
            <a href="#"><i class="fa fa-home"></i>Home</a>
            <a href="#B"><i class="fas fa-blog"></i>Blog</a>
            <a href="#A"><i class="fa fa-user"></i>About</a>
            <a href=""><i class="fa fa-phone"></i>Contact</a>
            <a class="fb" href="https://www.facebook.com"><i id="fb" class="fab fa-facebook"></i></a>
        </ul>
    </nav>
    <div class="header_content">
        <h2>The Travel Blog By Shubham Bhat</h2>
        <h1>Travel Blog</h1>
    </div>
    </header>
    <br id="B">
    <br>
    <div class="Blog">
        <h1>Blog</h1>
        <h3>Name Of the hotel</h3>
        <a href="hotel.html"><img src="Image/1.jpg" width="720px" height="460"></a>
        <p>Details about hotel</p>
        
        <h3>Name Of the hotel</h3>
        <a href="hotel1.html"><img src="Image/1.jpg"></a>
        <p>Details about hotel</p>

        <h3>Name Of the hotel</h3>
        <a href="hotel2.html"><img src="Image/1.jpg"></a>
        <p>Details about hotel</p>

        <h3>Name Of the hotel</h3>
        <a href="hotel3.html"><img src="Image/1.jpg"></a>
        <p>Details about hotel</p>

        <h3>Name Of the hotel</h3>
        <a href="hotel4.html"><img src="Image/1.jpg"></a>
        <p id="A">Details about hotel</p>
    </div>
    <br>
    <div class="About">
        <h1>About</h1>
        <h3>About Shubham Bhat</h3>
        <img src="Image/Shubham.jpg">
        <p>Details about shubham</p>
    </div>
    <div class="Contact">
       <h1>Contact</h1> 
       <form action="index.php" method="POST">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <input type="email" name="email" id="email" placeholder="Enter Your Email">
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter Your Message"></textarea>
            <button class="btn">Submit</button>
            <button class="reset">Reset</button>
            <?php
                if($insert == true){
                    echo "<h2 style='margin-left: 60px; margin-top:30px;'>Thanks For Submitting</h2>";
                }
            ?>
       </form>
    </div>
    <script href="index.js"></script>
</body>
</html>