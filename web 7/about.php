<?php
?>

<!DOCTYPE html>
<html>

<head>

    <title>About us</title>
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

    .fiv {
        height: 10px;
        background: url('bg.png');
    }






    .fs1 {
        background: url('about.png');
        height: 100vh;
        background-size: cover;
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
                <div> <a href="mailto: sunasarahusenahmad@gmail.com" class="hf">sunasarahusenahmad@gmail.com &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </div>
            </div>
        </div>

    </header>

    <nav>
        <div class="container">
            <div>
                <h1 style="margin-top: 15px; margin-left: 60px; font-size: xx-large; font-family: 'Courier New', Courier, monospace;"> <a href="index.php"> <img src="logo.png" alt="" height="50px" width="200px"> </a></h1>
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
            <div style="width: 500px; text-align: justify; padding-top: 250px; font-size: 20px; font-family:'Times New Roman', Times, serif;">
                <p style="margin-left: 90px; color: #ffe5ce;">
                    Valuda’s Technology Park is an Emerging IT Company In India. We are the one stop solution For All your IT Related Services & Support. We Provide Services including Website & Software Development ,Web Hosting, Digital Marketing ,ERP Solutions, cctv Solutions etc.
                </p>
            </div>
            <!--           
         <span style="width: 40px; height: 40px; background-color: black; margin-left: 1256px; margin-top: 1248px; opacity: 1;">
            <a href="contact.html">    gh</a>
            </span>
             -->

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
                <small style="margin-left: 100px;  ">© 2020 <a href="" style="color: #92D202;"> valudas.com </a>. All Rights Reserved.</small>
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