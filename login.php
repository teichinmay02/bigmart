<!DOCTYPE html>
<html>
<head>
    <title>shop</title>

    <style>

        .form-control {
            height: 40px;
            box-shadow: none;
            color: #969fa4;
        }
        .form-control:focus {
            border-color: #5cb85c;
        }
        .form-control, .btn {        
            border-radius: 3px;
        }
        .signup-form {
            width: 450px;
            margin: 0 auto;
            /* padding: 1px 0; */
            font-size: 15px;
        }
        .signup-form form {
            color: #999;
            border-radius: 3px;
            margin-bottom: 15px;
            background: #f2f3f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }
        .signup-form .form-group {
            margin-bottom: 20px;
        }
        .signup-form .btn {        
            font-size: 16px;
            font-weight: bold;		
            min-width: 140px;
            outline: none !important;
        }
        
        .signup-form a {
            color: #fff;
            text-decoration: underline;
        }
        .signup-form a:hover {
            text-decoration: none;
        }
        .signup-form form a {
            color: #5cb85c;
            text-decoration: none;
        }	
        .signup-form form a:hover {
            text-decoration: underline;
        }  




        
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
        background: #f2f3f7;
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
        color: #1e232b;
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

    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script type="text/javascript">
        function checkform()
        {
            var uid=document.getElementById("uid").value;
            var pass=document.getElementById("pass").value;
            
            //alert('hh');
            if(uid.length<1)
            {
                alert('enter First Name');
                return false;
            }
            else if(pass.length<1)
            {
                alert('enter Last Name');
                return false;
            }
            
            else{
                return true;
            }
        }

        function chngcolorover()
        {
            document.getElementById('subbtn').style.color='green';
        }

        function chngcoloroverr()
        {
            document.getElementById('resbtn').style.color='green';
        }
   

        function textclroverf()
        {
            document.getElementById('fname').style.backgroundColor='#00b4d8';
        }

        function textclroverl()
        {
            document.getElementById('lname').style.backgroundColor='#00b4d8';

        }
        function textclroverem()
        {
            document.getElementById('email').style.backgroundColor='#00b4d8';

        }

        function textclroveru()
        {
            document.getElementById('uid').style.backgroundColor='#00b4d8';

        }

        function textmouseout()
        {
            document.getElementById('fname').style.backgroundColor='white';
            document.getElementById('lname').style.backgroundColor='white';
            document.getElementById('email').style.backgroundColor='white';
            document.getElementById('uid').style.backgroundColor='white';
            document.getElementById('subbtn').style.color='white';
            document.getElementById('resbtn').style.color='white';

        }
       
    </script>    

</head>
<body style="background-image: url('images/upbg.jpg');">
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

       
</nav>
<center>
<div class="signup-form">

    <br><br><br><br>
    <br>
    <form action="loginconfig.php" class="login-form"  method="POST" style="padding-top: 30px;" >
    <h2>Login</h2>
    <br>
		<div class="form-group">
            <input type="text" class="form-control" name="user" id="uid" placeholder="User-id" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Password" required="required">
        </div>        
        
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">login</button>
        
        <Button type="reset" value="reset" class="btn btn-outline-primary" >Reset</Button>
        <br><br>New user? Register and create your account <a href="signup.php">Register</a>
    </div>
    </form>
    
</div>
</center>
</body>
</html>


