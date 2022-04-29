<!-- <?php
    include('config.php');
?> -->
<?php 
    session_start();
    //echo "<script>alert('Welcome ".$_SESSION['uid']."')</script>";
    
    if (!isset($_COOKIE['count'])) 
    { 
        echo "Welcome! This is the first time ."; 
        $cookie = 1;
        setcookie("count", $cookie,time() + 3600);
    }
    else
    {
        $cookie = ++$_COOKIE['count'];
        setcookie("count", $cookie,time() + 3600); 
        echo "You have viewed this page ".$_COOKIE['count']." times."; 
    }
?>
<!DOCTYPE html>
<head>
    <title>home</title>

    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/6409754f41.js" crossorigin="anonymous"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- <p><a href="page1.php"> Go to Login Page </a> </p> -->

    <style>
        
        input[type=text] {
        width: 130px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        background-color: white;
        background-position: 10px 10px; 
        background-repeat: no-repeat;
        padding: 12px 20px 12px 40px;
        transition: width 0.4s ease-in-out;
        }

        input[type=text]:focus {
        width: 30%;
        }

                
        .banner-container {
        display: grid;
        -ms-grid-columns: (minmax(32rem, 1fr))[auto-fit];
            grid-template-columns: repeat(auto-fit, minmax(32rem, 1fr));
        gap: 1rem;
        }

        .banner-container .banner {
        position: relative;
        /* height: 25rem; */
        overflow: hidden;
        padding-top: 10rem;
        }


        .banner-container .banner img {
        height: 100%;
        width: 100%;
        }

        .banner-container .banner .content {
            position: absolute;
            top: 50%;
            left: 2rem;
            padding-top: 0px;
            padding-bottom: 35px;
        }

        .banner-container .banner .content span {
        color: #666;
        font-size: 1.5rem;
        }

        .banner-container .banner .content h3 {
        font-size: 2rem;
        padding-top: .5rem;
        color: #222;
        }

        .banner-container .banner .content .btn {
        padding: .8rem 2.5rem;
        }


        nav{
        /* background: #171c24; */
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        height: 70px;
        padding: 0 100px;
        }
        nav .logo{
        font-size: 30px;
        font-weight: 600;
        letter-spacing: -1px;
        }
        nav .nav-items{
        display: flex;
        flex: 1;
        padding: 0 0 0 40px;
        }
        nav .nav-items li{
        list-style: none;
        padding: 0 15px;
        }
        nav .nav-items li a{

        font-size: 18px;
        font-weight: 500;
        text-decoration: none;
        }
        nav .nav-items li a:hover{
        color: #ff3d00;
        }
        nav form{
        display: flex;
        height: 40px;
        padding: 2px;
        min-width: 18%!important;
        border-radius: 2px;
        border: 1px solid rgba(155,155,155,0.2);
        }
        nav form .search-data{
        width: 100%;
        height: 100%;
        padding: 0 10px;
        
        font-size: 17px;
        border: none;
        font-weight: 500;
        background: none;
        }
        nav form button{
        padding: 0 15px;
        
        font-size: 17px;
        background: #ff3d00;
        border: none;
        border-radius: 2px;
        cursor: pointer;
        }
        nav form button:hover{
        background: #e63600;
        }

        nav .search-icon{
        width: 40px;
        text-align: center;
        margin: 0 50px;
        font-size: 18px;
        color: #fff;
        cursor: pointer;
        display: none;
        }
        nav .menu-icon span,
        nav .cancel-icon,
        nav .search-icon{
        display: none;
        }
        @media (max-width: 1245px) {
        nav{
            padding: 0 50px;
        }
        }
        @media (max-width: 1140px){
        nav{
            padding: 0px;
        }
        nav .logo{
            flex: 2;
            text-align: center;
        }
        nav .nav-items{
            position: fixed;
            z-index: 99;
            top: 70px;
            width: 100%;
            left: -100%;
            height: 100%;
            padding: 10px 50px 0 50px;
            text-align: center;
            background: #14181f;
            display: inline-block;
            transition: left 0.3s ease;
        }
        nav .nav-items.active{
            left: 0px;
        }
        nav .nav-items li{
            line-height: 40px;
            margin: 30px 0;
        }
        nav .nav-items li a{
            font-size: 20px;
        }
        nav form{
            position: absolute;
            top: 80px;
            right: 50px;
            opacity: 0;
            pointer-events: none;
            transition: top 0.3s ease, opacity 0.1s ease;
        }
        nav form.active{
            top: 95px;
            opacity: 1;
            pointer-events: auto;
        }
        nav form:before{
            position: absolute;
            content: "";
            top: -13px;
            right: 0px;
            width: 0;
            height: 0;
            z-index: -1;
            border: 10px solid transparent;
            border-bottom-color: #1e232b;
            margin: -20px 0 0;
        }
        nav form:after{
            position: absolute;
            content: '';
            height: 60px;
            padding: 2px;
            background: #1e232b;
            border-radius: 2px;
            min-width: calc(100% + 20px);
            z-index: -2;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
        nav .menu-icon{
            display: block;
        }
        nav .search-icon,
        nav .menu-icon span{
            display: block;
        }
        nav .menu-icon span.hide,
        nav .search-icon.hide{
            display: none;
        }
        nav .cancel-icon.show{
            display: block;
        }
        }
        
        nav .logo.space{
        color: red;
        padding: 0 5px 0 0;
        }
        @media (max-width: 980px){
        nav .menu-icon,
        nav .cancel-icon,
        nav .search-icon{
            margin: 0 20px;
            /* margin: top right bottm left */
        }
        nav form{
            right: 30px;
        }
        }
        @media (max-width: 350px){
        nav .menu-icon,
        nav .cancel-icon,
        nav .search-icon{
            margin: 0 10px;
            font-size: 16px;
        }}


    </style>

</head>
<body>
    

<nav>
         <div class="menu-icon">
            <span class="fas fa-bars"></span>
         </div>
         <div class="logo">
            BigMart
         </div>
         <div class="nav-items">
            <li><a href="home.php" style="color:black">Home</a></li>
            <!-- dropdown code here: -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"  style="color:black">
                    Shop
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="shop.php">All items</a></li>
                    <li><a class="dropdown-item" href="f&v.html">Fruits & Vegetables</a></li>
                    <li><a class="dropdown-item" href="d&b.html">Dairy & Bakery</a></li>
                    <li><a class="dropdown-item" href="dryfruit.html">Dry Fruit</a></li>
                </ul>
            </li>
            <li><a href="contact.php" style="color:black">Contact us</a></li>
            
         </div>
         <div class="search-icon">
            <span class="fas fa-search"></span>
         </div>
         <div class="cancel-icon">
            <span class="fas fa-times"></span>
         </div>
         <form action="searchresult.php" method="POST">
            <input type="search" class="search-data" placeholder="Search"  type="search" id="search" name="search" >
            <button type="submit" class="fas fa-search"></button>
         </form>


</nav>

<section class="home">

    <div class="slides-container">

        <div class="slide active">
            <div class="content">
                <span style="font-style: italic;">fresh and organic Fruits and Vegetables</span>
                <h3 style="font-style: italic; font-size: 6rem; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">upto 50% off</h3>
                <br><br><a href="shop.php" class="btn btn-success" style="font-style: italic;">shop now</a>
            </div>
            <div class="image">
                <img src="image/home-img-1.png" alt="">
            </div>
    </div>


</section>

<br><br>
<center>
<!-- <form action="search.html" method="get">
    <input type="text" name="srch" placeholder="Search...">
</form> -->
</center>

<section class="banner-container">

    <div class="banner">
        <img src="image/banner-1.jpg" alt="">
        <div class="content">
            <span>Fruit and Vegetables</span>
            <h3>upto 50% off</h3>
            <a href="f&v.html" class="btn btn-success">shop now</a>
        </div>
    </div>

    <div class="banner">
        <img src="image/banner-2.jpg" alt="">
        <div class="content">
            <span>Dairy and Bakery</span>
            <h3>upto 50% off</h3>
            <a href="d&b.html"class="btn btn-success">shop now</a>
        </div>
    </div>

    <div class="banner">
        <img src="image/banner-3.jpg" alt="">
        <div class="content">
            <span>dryfruit</span>
            <h3>upto 50% off</h3>
            <a href="dryfruit.html"class="btn btn-success">shop now</a>
        </div>
    </div>

</section>



</body>
</html>


