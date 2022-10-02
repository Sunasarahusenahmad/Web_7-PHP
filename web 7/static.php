<?php

if (isset($_POST['submit'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "valudas";


    $conn = mysqli_connect($server, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    }
    // echo "Connection success";

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $email = $_POST['email'];

    $sql = "INSERT INTO `valuda` (`firstname`, `lastname`, `address`, `email`) VALUES ('$fname',  '$lname', '$address', '$email')";
    echo $sql;


    if (mysqli_query($conn, $sql)) {
        header("location: success.php");
    } else {
        echo "Not success";
    }

    mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html>

<head>

    <title>static </title>
</head>
<style>
    html {
        scroll-behavior: smooth;
    }

    * {
        margin: 0;
        padding: 0;
        list-style: none;
        text-decoration: none;
    }

    .container {
        display: flex;
        width: 100%;
        height: 80px;

        color: black;
    }

    .nav_icon {
        display: flex;
    }

    .nav_li {
        margin-top: 29px;
        padding: 0 18px;
        font-weight: bold;
        font-size: 20px;
        font-family: 'Times New Roman', Times, serif;
        letter-spacing: 1px;
    }

    .hf {
        color: white;
    }

    .hf:hover {
        color: #92D202;
    }

    a {
        color: black;
    }

    a:hover {
        color: #92D202;
    }

    a:active {
        color: blue;
    }

    .header {
        height: 70px;
        background-color: black;
    }

    .hh1 {
        display: flex;
    }

    .hh3 {
        width: 15%;
        color: white;
        padding-top: 20px;
        display: flex;
        opacity: .80;

    }

    .six_main {
        height: 170px;
        display: flex;
    }

    .six_con1 {
        width: 72%;
        background-color: #303030;
        padding: 50px 100px;
    }

    .six_con1 p {
        color: white;
        font-size: xx-large;
        font-family: 'Times New Roman', Times, serif;
        font-weight: bolder;
    }

    .six_con2 {
        width: 28%;
        background-color: #92D202;
        padding-left: 30px;
        padding-top: 50px;
    }

    .six_con2 p {
        font-size: xx-large;
        font-family: 'Times New Roman', Times, serif;
        font-weight: bolder;

    }

    .six_con2 p a {
        color: white;
    }

    .six_con2 p a:hover {
        color: #ff8800;
    }

    .seven {
        height: 80px;
        width: 100%;
        background: url('footer-bg.jpg');
        display: flex;
        color: white;
    }



    .fs1 {
        background: url('stat.png');
        height: 100vh;
        background-size: cover;
        opacity: .80;


    }

    .fs2 {
        width: 50%;
        height: 60vh;

        margin-left: 150px;
        background: url('bg.png');
        opacity: .90;
        border-radius: 100px;
        padding-top: 50px;


    }

    .fs3 {
        font-size: x-large;
        padding-left: 72px;
    }

    .fsbtn {
        padding-left: 200px;
        margin-top: 50px;
    }

    .btn2 {
        padding: 10px 50px;
        background-color: #3b6c59;
        font-size: large;
        color: white;
        font-family: fantasy;
        border-radius: 20px;
        border-color: #ff8800;

    }

    .btn2:hover {
        background-color: #ff8800;
        border-color: #3b6c59;
    }

    .fiv {
        height: 10px;
        background: url('bg.png');
    }
</style>

<body>


    <header class="header">
        <div class="hh1">
            <div style="width: 50%;">

            </div>
            <div class="hh3">
                <div style="padding-right: 10px;"> <img src="z/8.svg" alt="" height="20px"></div>
                <div> <a href="" class="hf">(+91) 9157037748 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</a> </div>

            </div>
            <div class="hh3">
                <div style="padding-right: 10px;"> <img src="z/8.svg" alt="" height="20px"></div>
                <div> <a href="" class="hf">(+91) 9104190049 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</a> </div>
            </div>
            <div class="hh3">
                <div style="padding-right: 10px; text-decoration: none;"> <img src="z/9.svg" alt="" height="20px"></div>
                <div> <a href="mailto: sunasarahusenahmad@gmail.com" class="hf">sunasarahusenahmad@gmail.com
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </div>
            </div>
        </div>

    </header>

    <nav>
        <div class="container">
            <div>
                <h1 style="margin-top: 15px; margin-left: 60px; font-size: xx-large; font-family: 'Courier New', Courier, monospace;">
                    <a href="index,.html"> <img src="logo.png" alt="" height="50px" width="200px"> </a>
                </h1>
            </div>
            <div style="margin-left: 45%;">

                <ul class="nav_icon">
                    <li class="nav_li"> <a href="index.php"> Home </a></li>
                    <li class="nav_li"> <a href="about.php"> About</a></li>
                    <li class="nav_li"> <a href="contact.php">Contact Us</a></li>

                </ul>
            </div>

        </div>

    </nav>

    <section>

        <div class="fs1">
            <div style="padding-top: 22vh;">

            </div>
            <div class="fs2">
                <form action="" method="POST">
                    <span class="fs3">First name </span> <span class="fs3" style="padding-left: 195px;">Last name</span>
                    <div style="display: flex; margin-left: 70px; margin-top: 10px;">
                        <div style="width: 50%; padding:3;">
                            <input type="text" id="fname" name="fname" style="padding: 10px; width: 200px;">
                        </div>
                        <div style="width: 50%; padding: 3px;">
                            <input type="text" id="lname" name="lname" style="padding: 10px; width: 200px;">
                        </div>
                    </div>

                    <span class="fs3">Address </span>
                    <div style="margin-top: 10px; padding-bottom: 10px;">
                        <input type="text" id="address" name="address" style="padding: 10px; width: 503px; margin-left: 70px; ">
                    </div>

                    <span class="fs3">E-mail </span>
                    <div style="margin-top: 10px;">
                        <input type="email" id="email" name="email" style="padding: 10px; width: 503px; margin-left: 70px; ">
                    </div>

                    <div class="fsbtn">
                        <input class="btn2" name="submit" id="submit" type="submit" value="Submit your Information">
                    </div>
                </form>

            </div>
        </div>




    </section>
    <section class="fiv">

    </section>



    <section>

        <div class="six_main">
            <div class="six_con1">
                <p>Get Excellent Service and Support and Grow Your Business Online with Valuda's</p>

            </div>
            <div class="six_con2">
                <p>
                    <a href="contact.php">Connect With Us</a>
                </p>
            </div>
        </div>
    </section>

    <section>
        <div class="seven">

            <div style="padding-top: 30px; font-size: 18px;">
                <small style="margin-left: 100px;  ">© 2020 <a href="" style="color: #92D202;"> valudas.com </a>. All
                    Rights Reserved.</small>
            </div>
            <div style="padding-top: 30px; font-size: 18px;">
                <small style="margin-left:600px;">
                
                Design by @ Sunasara Husenahmad
                </small>
            </div>

        </div>
    </section>

</body>

</html>