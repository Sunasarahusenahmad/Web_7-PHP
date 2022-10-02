<?php
?>


<!DOCTYPE html>
<html>
<head>

    <title>index website</title>
</head>
<style>
    html{
        scroll-behavior: smooth;
    }
    *{
        margin: 0;
        padding: 0;
        list-style: none;
        text-decoration: none;
    }
    .container{
        display: flex;
        width: 100%;
        height: 80px;
        
        color: black;
    }
    
    .nav_icon{
        display: flex;
    }
    
     .nav_li{
        margin-top: 29px;
        padding: 0 18px;
        font-size: 20px;
        font-family:'Times New Roman', Times, serif;
        font-weight: bold;
        letter-spacing: 1px;
    }


    a{
        color: black;
    }
    a:hover{
        color: #92D202;
    } 
       a:active{
        color:blue;
    }

    .header{
        height: 70px;
        background-color: black;
    }
    .hh1{
        display: flex;
        
    }
    .hh3{
        width: 15%;
        color: white;
        padding-top: 20px;
        display: flex;
        opacity: .80;
        
    }
    .hf{
        color: white;
    }
    .hf:hover{
        color: #92D202;
    }
    .first_sec_img{
        position: absolute;
        background-size: cover;
        width: 100%;
    }
    .first_sec_con{
        position: relative;
        color: white;
        padding-left: 100px;
    }
    .first_sec_con2{
        padding-left: 0px;
        font-size: 14px;
        font-family:sans-serif;
        font-weight: lighter;
        
        padding: 4px 0;
    }
    .first_sec_con3{
        position: relative;
        height: 45px;
        width: 170px;
        background-color: #92D202;
        color: white;
        margin-left: 100px;
        margin-top: 100px;
        text-align: center;

    }
    .first_sec_con3:hover{
        background-color: #ff8800;
    }
    .sec_sec_con1{
        height: 190px;
        background: white;
        position: relative;
        margin-top: 108px;

    }
    .sec_sec_con1 h2{
        padding-left: 100px;
        padding-top: 75px;
        font-size: xx-large;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .sec_sec_con2{
        position: relative;
        height: 45px;
        width: 170px;
        background-color: #92D202;
        color: white;
        text-align: center;
        margin-top: 185px;
        margin-left: 300px;
    }
    .sec_sec_con2:hover{
        background-color: #ff8800;
    }
    .thir_sec_con1{
        height: 85vh;
        display: flex;
        color: white;
    }
    .thir_con1{
        width: 50%;
        background:url('footer-bg.jpg');
        background-size: cover;
        opacity: .80;
    }
    .thir_con2{
        width: 50%;
        background-color: #92D202;
    }
    .th1{
        margin-left: 80px;
        margin-top: 10px;
    }
    .th1 p {
        font-size: large;
        font-family:sans-serif;
        font-weight:lighter;
        text-transform: uppercase;
    }
    .th1 b{
        font-size: xx-large;
        font-family:'Times New Roman', Times, serif;
        font-weight: bolder;
        color: #92D202;
    }
    .th2{
        margin-left: 100px;
        margin-top: 50px;
    }
    .th2 p{
        font-family:'Times New Roman', Times, serif;
        font-size:medium ;
        padding: 7px 0;
    }
    .thbtn{
        height: 40px;
        width: 120px;
        background-color: #92D202;
        margin-top: 40px;
    }
    .thbtn2{
        height: 40px;
        width: 120px;
        background-color: black;
        margin-top: 40px;
        color: white;
    }
    .tha1:hover{
        background-color: #5b8006;
    }
    .tha2:hover{
        background-color: rgb(54, 53, 53);
    }
    .for_main{
        display: flex;
        margin-top: 70px;
    }
    .for_con_1{
        margin-left: 190px;
     
        width: 39%;
    }
    .for2{
        color: #92D202;
        font-size: 50px;
        font-family:'Times New Roman', Times, serif;
        font-weight: bolder;
        
    }
    .for1{
        font-size: 26px;
        font-family:'Times New Roman', Times, serif;

    }
    .for_con_2{
        width: 2%;
        opacity: .30;
        margin-left: 20px;

    }
    .for_con_3{
        margin-left: 40px;
        margin-right: 140px;
        font-family:'Times New Roman', Times, serif;
        text-align: justify;
        opacity: .70;
    }
    .fiv_con{
        width: 100%;
        height: 100vh;
        background: url('key.jpg');
        background-repeat: no-repeat;
        background-size:cover;
    }
    .fiv_h{
        margin-left: 400px;
        font-family:sans-serif;
        text-transform: uppercase;
        font-size: 30px;
        padding-top: 100px;
    }
    .fiv_mcon{
        width: 350px;
        height: 140px;
        background-color: white;
        display: flex;
    }
    .fiv_mcon h3{
        font-size: 16px
    }
    .fiv_mcon:hover{
        background-color:#92D202;

    }
    .six_main{
        height: 170px;
        display: flex;
    }
    .six_con1{
        width: 72%;
        background-color: #303030;
        padding:  50px 100px;
    }
    .six_con1 p{
        color: white;
        font-size: xx-large;
        font-family:'Times New Roman', Times, serif;
        
    }
    .six_con2{
        width: 28%;
        background-color: #92D202;
        padding-left: 30px;
        padding-top: 50px;
    }
    .six_con2 p{    
        font-size: xx-large;
        font-family:'Times New Roman', Times, serif;
        font-weight: bolder;
        
        
    }
    .six_con2 p a {
        color: white;
    }
    .six_con2 p a:hover{
        color: #ff8800;
    }
    .seven{
        height: 80px;
        width: 100%;
        background: url('footer-bg.jpg');
        display: flex;
        color: white;
    }
   
</style>
<body>

    <header class="header">
        <div class="hh1">
            <div style="width: 50%;">

            </div> 
            <div class="hh3">
                <div style="padding-right: 10px;"> <img src="z/8.svg" alt="" height="20px"  ></div><div> <a href="" class="hf">(+91) 9157037748 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</a> </div>

            </div>  
            <div class="hh3">
                <div style="padding-right: 10px;"> <img src="z/8.svg" alt="" height="20px"  ></div><div> <a href="" class="hf">(+91) 9104190049 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</a> </div>
            </div>
            <div class="hh3">
                <div style="padding-right: 10px; text-decoration: none;"> <img src="z/9.svg" alt="" height="20px"  ></div><div> <a href="mailto: sunasarahusenahmad@gmail.com" class="hf">sunasarahusenahmad@gmail.com &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </div>
            </div>         
        </div>

    </header>

    <nav>
        <div class="container">
            <div>
            <h1 style="margin-top: 15px; margin-left: 60px; font-size: xx-large; font-family: 'Courier New', Courier, monospace;"> <a href="index,.html" > <img src="logo.png" alt="" height="50px" width="200px"> </a></h1>
        </div>
            <div style="margin-left: 45%;">

                <ul class="nav_icon">
                    <li class="nav_li"> <a href="index.php" aria-current="page">Home</a></li>
                    <li class="nav_li"> <a href="about.php"> About</a></li>
                    <li class="nav_li"> <a href="contact.php">Contact Us</a></li>
                    <li class="nav_li"> <a href="#product" >services</a></li>
                </ul>
            </div>

        </div>

    </nav>

    

    <section class="first_sec">
       <img src="slider1.jpg" class="first_sec_img" alt="">
       <div class="first_sec_con" style="padding-top: 100px; font-size: 30px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; letter-spacing: 2px;">
        Get Excellent <br> Service Support  <strong style="color: #92D202;"> Your IT Need </strong>

        <br>
        <br>
       <p class="first_sec_con2"> &#10004;&nbsp;&nbsp;&nbsp;Website And Software Development</p>
       <p class="first_sec_con2"> &#10004;&nbsp;&nbsp;&nbsp;Android | IOS Development </p>
       <p class="first_sec_con2"> &#10004;&nbsp;&nbsp;&nbsp;Digital Marketing - SEO | SEM | SMM </p>
       <p class="first_sec_con2"> &#10004;&nbsp;&nbsp;&nbsp;CCTV Solution</p>
       </div>
       <div class="first_sec_con3">
         <p style="padding-top: 10px; font-size: 20px;" >  <a href="contact.php" style="text-decoration: none; color: white;"> Inquiry Now </a></p>
       </div>
    </section>


    <section style="display: flex; margin-top: 8px; background: url('bg.png'); background-size: cover;">
        
        <div class="sec_sec_con1" style="background: url('bg.png'); background-size: cover;">
            <h2>No more wait. <span style="color: #92D202;">Valuda's </span>  here to Help You.</h2>

        </div>
        <div class="sec_sec_con2" >
            <p style=" font-size: 20px; margin-top: 10px;" >  <a href="contact.php" style="text-decoration: none; color: white;"> Inquiry Now </a></p>
          </div>
      
    </section>

    <section>

        <div class="thir_sec_con1">
            <div class="thir_con1">
                <div class="th1" style="display: flex;">
                    <div>
                    <img src="c.png" style="margin-top: 40px; opacity: .90;" alt="" height="130px" width="150px">
                </div>
            <div>
                    <p style="margin-top: 80px;">Create your COMPANY'S WEBSITE with </p>
                    <b>VALUDA'S</b>
                </div>
                <br>
            </div>
                    <hr style="margin-top: 15px; opacity: .30; margin-left: 100px; " width="460px" >
                <div class="th2">
                    <p>&#10097; &nbsp; &nbsp;   Professional Design- build your professional site.</p>
                    <p>&#10097; &nbsp; &nbsp;   Dynamic Content - Easy Customization.</p>
                    <p>&#10097; &nbsp; &nbsp;   FREE domain, hosting, database, FTP account</p>
                
                    <p style="padding-top: 30px; color: #92D202;">&nbsp;  &nbsp; &nbsp;    Starting at Just Rs. 10000/- only.</p>
                    <div class="thbtn tha1">
                        <p  style="padding-left: 20px; padding-top: 10px; font-family:'Times New Roman', Times, serif;" > <a href="static.php" style="color: white; "  >Read More </a> </p>
                    </div>
                </div>

            </div>
            <div class="thir_con2">

                <div class="th1" style="display: flex;">
                    <div>
                    <img src="ss.png" style="margin-top: 40px; margin-left: -38px; opacity: .90;" alt="" height="130px" width="180px">
                </div>
            <div>
                    <p style="margin-top: 80px;">Easy Create, Manage & Sell </p>
                    <b style="color: rgb(7, 7, 7);">Online Store</b>
                </div>
                <br>
            </div>    

                    <br>
                    <hr style="margin-top: -2px; opacity: 1; margin-left: 100px; " width="460px" >
                    <div class="th2">
                    <p>&#10097; &nbsp; &nbsp;   Sale Your Product Online by your own Shop E-commerce Store</p>
                    <p>&#10097; &nbsp; &nbsp;   SHIP ANYWHERE with flexible rates.</p>
                    <p>&#10097; &nbsp; &nbsp;   SAVE MONEY with free hosting and unlimited bandwidth (1 year ).</p>
                
                    <p style="padding-top: 30px; color: #050505;">&nbsp;  &nbsp; &nbsp;    Starting at Just ₹ 25,000/-  only.</p>
                    <div class="thbtn2 tha2">
                        <p style="padding-left: 20px; padding-top: 10px; font-family:'Times New Roman', Times, serif;" > <a href="dynamic.php" style="color: white;" > Read More </a> </p>
                    </div>
                </div>

            </div>


            </div>

        </div>
    </section>


    <section style="background: url('bg.png'); background-size:cover; padding-top: 1px; padding-bottom: 1px;">
        <div class="for_main" >
        <div class="for_con_1" >
            <p class="for1">WELCOME TO</p>
            <p class="for2">VALUDA'S</p>

        </div>
        <div class="for_con_2">
            <hr width="0px" size="100px" >
        </div>
        <div class="for_con_3">
            <p>Valuda's Technology Park is an Emerging IT Company In India. We are the one stop solution For All your IT Related Services & Support. We Provide Services including Website & Software Development ,Web Hosting,  Digital Marketing  ,ERP Solutions,  cctv Solutions etc.</p>
        </div>

        </div>  

        <hr style="margin-top: 40px; width: 74%; margin-left: 14%; margin-bottom: 10px; opacity: .30;">
    </section>

    <section>
        <div class="fiv_con" id="product">

            <h1 class="fiv_h">services provide by <span style="color: #92D202;">valuda's? </span> </h1>
            
            <div style="display: flex; margin: 50px 100px;" >
                <div class="fiv_mcon">
                   
                    <div style="padding: 26px; " >
                        <img src="z/1.svg" height="35px" width="35px" alt="">
                    </div>
                    <div style="padding-top: 26px; ">
                        <h3>Web Development </h3>
                        <p style="opacity: .60; margin-top: 10px;">CMS Deveopment | E-Commerce Deveopment | WordPress | JAVA </p>
                    </div>

                </div>
                <div class="fiv_mcon" style="margin-left: 50px;">
                    <div style="padding: 26px; " >
                        <img  src="z/2.svg" height="35px" width="35px" alt="">
                    </div>
                    <div style="padding-top: 26px; ">
                        <h3>ANDROID | IOS DEVELOPMENT </h3>
                        <p style="opacity: .60; margin-top: 10px;">Android App Development | iOS App Development | React Native Apps  </p>
                    </div>

                   
                </div> 
                 <div class="fiv_mcon" style="margin-left: 50px;">
                    <div style="padding: 26px; " >
                        <img  src="z/3.svg" height="35px" width="35px" alt="">
                    </div>
                    <div style="padding-top: 26px; ">
                        <h3>ERP SOFTWARE </h3>
                        <p style="opacity: .60; margin-top: 10px;">Inventory Management | Restaurant Billing software etc. |  </p>
                    </div>

                   
                </div>
            </div>

             
            <div style="display: flex; margin: 50px 100px;" >
                <div class="fiv_mcon">
                   
                    <div style="padding: 26px; " >
                        <img src="z/4.svg" height="35px" width="35px" alt="">
                    </div>
                    <div style="padding-top: 26px; ">
                        <h3>DIGITAL MARKETING  </h3>
                        <p style="opacity: .60; margin-top: 10px;">SEO | SEM | SMM | SMO | ORM | PPC | CONTENT MARKETING ETC. </p>
                    </div>

                </div>
                <div class="fiv_mcon" style="margin-left: 50px;">
                    <div style="padding: 26px; " >
                        <img  src="z/5.png" height="35px" width="35px" alt="">
                    </div>
                    <div style="padding-top: 26px; ">
                        <h3>CCTV SOLUTION  </h3>
                        <p style="opacity: .60; margin-top: 10px;">Instant CCTV Solution for Your Shop | Offices | Building | Restaurant etc.  </p>
                    </div>

                   
                </div> 
                 <div class="fiv_mcon" style="margin-left: 50px;">
                    <div style="padding: 26px; " >
                        <img  src="z/6.svg" height="35px" width="35px" alt="">
                    </div>
                    <div style="padding-top: 26px; ">
                        <h3>HARDWARE SOLUTION</h3>
                        <p style="opacity: .60; margin-top: 10px;">Computer , Laptop, Printers Repairing with 100% Satisfaction Guarantee  </p>
                    </div>

                   
                </div>
            </div>
        
        
        </div>
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