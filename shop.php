<?php
session_start();
// session_destroy();
?>
<!DOCTYPE html>
<html>

<head>
    <title>shop</title>
    <link rel="stylesheet" href="css/style.css">
    
    <script src="https://kit.fontawesome.com/6409754f41.js" crossorigin="anonymous"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    
    <style>
        .category .box-container {
            display: -ms-grid;
            display: grid;
            -ms-grid-columns: (minmax(16rem, 1fr))[auto-fit];
            grid-template-columns: repeat(auto-fit, minmax(16rem, 1fr));
            gap: 1.5rem;
            padding: 4rem 0;
        }

        .category .box-container .box {
            text-align: center;
            text-transform: lowercase;
        }

        .category .box-container .box img {
            height: 15rem;
        }

        .category .box-container .box h3 {
            font-size: 2rem;
            margin: 1rem 0;
            color: #666;
        }

        /* for navbar css: */


        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap');
        /* *{
        margin: 0;
        padding: 0;
        outline: none;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
        } */
        body{
        background: #f2f2f2;
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
        /* }
        .content{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        }
        .content header{
        font-size: 30px;
        font-weight: 700;
        }
        .content .text{
        font-size: 30px;
        font-weight: 700;
        }
        .content .space{
        margin: 10px 0;
        } */



    </style>
  
</head>
<?php
    // print_r($_SESSION['cart'])
    $count = 0;
    if (isset($_SESSION['cart'])) {
        $count = count($_SESSION['cart']);
    }
    ?>
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
            <li class="nav-item dropdown"">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"  style="color:black">
                    Shop
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="f&v.html">Fruits & Vegetables</a></li>
                    <li><a class="dropdown-item" href="d&b.html">Dairy & Bakery</a></li>
                    <li><a class="dropdown-item" href="dryfruit.html">Dry Fruit</a></li>
                </ul>
            </li>
            
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

       
         <a href="cart.php" style="padding-left: 40px;"><i class="fa-solid fa-cart-shopping fa-2x">  <?php echo $count; ?> </i></a>

      </nav>
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">BigMart</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Shop
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="f&v.html">Fruits & Vegetables</a></li>
                            <li><a class="dropdown-item" href="d&b.html">Dairy & Bakery</a></li>
                            <li><a class="dropdown-item" href="dryfruit.html">Dry Fruit</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled"><i class="fa-solid fa-cart-shopping">  <?php echo $count; ?> </i></a>
                    </li>
                </ul>
                <form class="d-flex" action="searchresult.php" method="post">
                    <input class="form-control me-1" type="search" id="search" name="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav> -->
    


    <div class="heading">
        <h1 style="font-style: italic;">our shop</h1>
    </div>

    <section class="category">



        <div class="box-container">

            <a href="f&v.html" class="box">
                <img src="image/cat-1.png" alt="">
                <h3>fruits and vegetables</h3>
            </a>

            <a href="d&b.html" class="box">
                <img src="image/cat-2.png" alt="">
                <h3>Dairy and Bakery</h3>
            </a>

            <a href="dryfruit.html" class="box">
                <img src="image/cat-3.png" alt="">
                <h3>dryfruit</h3>
            </a>


        </div>

    </section>

    <section class="products">


        <div class="box-container">

            <!--fruit/vege-->

            <div class="box">
                <form action="manage_cart.php" method="post">
                    <div class="image">
                        <img src="image/product-1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Banana</h3>
                        <div class="price">&#8377 20</div>
                        <!-- <a href="" id="banana"><h2>add to cart</h2></a> -->
                        <button type="submit" class="btn btn-primary btn-block" name="Add_To_Cart">add to cart</button>
                        <input type="hidden" value="banana" name="Item_Name">
                        <input type="hidden" value="20" name="Price">

                    </div>
                </form>
            </div>
            <div class="box">
                <form action="manage_cart.php" method="post">
                    <div class="image">
                        <img src="image/apple-removebg-preview.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Apple</h3>
                        <div class="price">&#8377 50</div>
                        <button type="submit" class="btn btn-primary" name="Add_To_Cart">add to cart</button>
                        <input type="hidden" value="apple" name="Item_Name">
                        <input type="hidden" value="50" name="Price">
                    </div>
                </form>
            </div>


            <div class="box">
                <form action="manage_cart.php" method="post">
                    <div class="image">
                        <img src="image/orane.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Orange</h3>
                        <div class="price">&#8377 55</div>
                        <button type="submit" class="btn btn-primary" name="Add_To_Cart">add to cart</button>
                        <input type="hidden" value="orange" name="Item_Name">
                        <input type="hidden" value="55" name="Price">
                    </div>
                </form>
            </div>


            <div class="box">
                <form action="manage_cart.php" method="post">
                    <div class="image">
                        <img src="image/onion.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Onion</h3>
                        <div class="price">&#8377 35</div>
                        <button type="submit" class="btn btn-primary" name="Add_To_Cart">add to cart</button>
                        <input type="hidden" value="onion" name="Item_Name">
                        <input type="hidden" value="35" name="Price">

                    </div>
                </form>
            </div>

            <div class="box">
                <form action="manage_cart.php" method="post">
                    <div class="image">
                        <img src="image/potato.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>potato</h3>
                        <div class="price">&#8377 30</div>
                        <button type="submit" class="btn btn-primary" name="Add_To_Cart">add to cart</button>
                        <input type="hidden" value="potato" name="Item_Name">
                        <input type="hidden" value="30" name="Price">
                    </div>
                </form>
            </div>




            <!--dairy-->

            <div class="box">
                <form action="manage_cart.php" method="post">
                    <div class="image">
                        <img src="image/milk.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Milk</h3>
                        <div class="price">&#8377 40</div>
                        <button type="submit" class="btn btn-primary" name="Add_To_Cart">add to cart</button>
                        <input type="hidden" value="milk" name="Item_Name">
                        <input type="hidden" value="40" name="Price">

                    </div>
                </form>
            </div>

            <div class="box">
                <form action="manage_cart.php" method="post">
                    <div class="image">
                        <img src="image/curd.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>curd</h3>
                        <div class="price">&#8377 45</div>
                        <button type="submit" class="btn btn-primary" name="Add_To_Cart">add to cart</button>
                        <input type="hidden" value="curd" name="Item_Name">
                        <input type="hidden" value="45" name="Price">

                    </div>
                </form>
            </div>

            <div class="box">
                <form action="manage_cart.php" method="post">
                    <div class="image">
                        <img src="image/panner.png" alt="">
                    </div>
                    <div class="content">
                        <h3>paaner</h3>
                        <div class="price">&#8377 70</div>
                        <button type="submit" class="btn btn-primary" name="Add_To_Cart">add to cart</button>
                        <input type="hidden" value="paneer" name="Item_Name">
                        <input type="hidden" value="70" name="Price">

                    </div>
                </form>
            </div>

            <div class="box">
                <form action="manage_cart.php" method="post">
                    <div class="image">
                        <img src="image/bread.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>bread</h3>
                        <div class="price">&#8377 37</div>
                        <button type="submit" class="btn btn-primary" name="Add_To_Cart">add to cart</button>
                        <input type="hidden" value="bread" name="Item_Name">
                        <input type="hidden" value="37" name="Price">

                    </div>
                </form>
            </div>

            <!--dryfruit-->

            <div class="box">
                <form action="manage_cart.php" method="post">
                    <div class="image">
                        <img src="image/cashew.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>cashew</h3>
                        <div class="price">&#8377 150</div>
                        <button type="submit" class="btn btn-primary" name="Add_To_Cart">add to cart</button>
                        <input type="hidden" value="cashew" name="Item_Name">
                        <input type="hidden" value="150" name="Price">
                    </div>
                </form>
            </div>

            <div class="box">
                <form action="manage_cart.php" method="post">
                    <div class="image">
                        <img src="image/almond.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Almond</h3>
                        <div class="price">&#8377 180</div>
                        <button type="submit" class="btn btn-primary" name="Add_To_Cart">add to cart</button>
                        <input type="hidden" value="Almond" name="Item_Name">
                        <input type="hidden" value="180" name="Price">

                    </div>
            </div>

            <div class="box">
                <form action="manage_cart.php" method="post">
                    <div class="image">
                        <img src="image/dates.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>dates</h3>
                        <div class="price">&#8377 180</div>
                        <button type="submit" class="btn btn-primary" name="Add_To_Cart">add to cart</button>
                        <input type="hidden" value="dates" name="Item_Name">
                        <input type="hidden" value="180" name="Price">

                    </div>
                </form>
            </div>

            <div class="box">
                <form action="manage_cart.php" method="post">
                    <div class="image">
                        <img src="image/raisins.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>raisins(Kishmish)</h3>
                        <div class="price">&#8377 200</div>
                        <button type="submit" class="btn btn-primary" name="Add_To_Cart">add to cart</button>
                        <input type="hidden" value="kishmish" name="Item_Name">
                        <input type="hidden" value="200" name="Price">

                    </div>
                </form>
            </div>
        </div>

    </section>

</body>

</html>