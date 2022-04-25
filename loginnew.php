<!DOCTYPE html>
<html>
<head>
    <title>shop</title>

    <style>

/*         
        body {
            background-image: url("images/upbg.jpg");
        } */


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
        .signup-form h2 {
            color: #636363;
            margin: 0 0 15px;
            position: relative;
            text-align: center;
        }
        .signup-form h2:before, .signup-form h2:after {
            content: "";
            height: 2px;
            width: 30%;
            background: #d4d4d4;
            position: absolute;
            top: 50%;
            z-index: 2;
        }	
        .signup-form h2:before {
            left: 0;
        }
        .signup-form h2:after {
            right: 0;
        }
        .signup-form .hint-text {
            color: #999;
            margin-bottom: 30px;
            text-align: center;
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
        .signup-form input[type="checkbox"] {
            margin-top: 3px;
        }
        .signup-form .btn {        
            font-size: 16px;
            font-weight: bold;		
            min-width: 140px;
            outline: none !important;
        }
        /* .signup-form .row div:first-child {
            padding-right: 10px;
        }
        .signup-form .row div:last-child {
            padding-left: 10px;
        }    	 */
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
    </style>

    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script type="text/javascript">
        function checkform()
        {
            var fname=document.getElementById("fname").value;
            var lname=document.getElementById("lname").value;
            var email=document.getElementById("email").value;
            var uid=document.getElementById("uid").value;
            var pass=document.getElementById("pass").value;
            //alert('hh');
            if(fname.length<1)
            {
                alert('enter First Name');
                return false;
            }
            else if(lname.length<1)
            {
                alert('enter Last Name');
                return false;
            }
            else if(email.length<1)
            {
                alert('enter Email');
                return false;
            }
            else if(uid.length<5)
            {
                alert("userid too short");
                return false;
            }
            else if(uid.length>15)
            {
                alert('userid length exceeded. keep it below 15 characters');
                return false;
            }
           
            else if(pass.length<9)
            {
                alert("password too short");
                return false;
            }
            else if(pass.length>15)
            {
                alert('password length exceeded. keep it below 15 characters');
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
   
<header class="header">

    <a href="home.html" class="logo"> <i class="fas fa-shopping-basket"></i> BigMart </a>

    <nav class="navbar">
        <a href="home.html">home</a>
        <a href="shop.html">shop</a>
        <a href="d&b.html">Dairy and Bakery</a>
        <a href="f&v.html">Fruits and Vegetables</a>
        <a href="dryfruit.html">dryfruit</a>
        <a href="contact.html">contact</a>
    </nav>


</header>
<center>
<div class="signup-form">

    <br><br><br><br>
    <br>
    <form action="signupconfig.php" class="login-form"  method="POST" style="padding-top: 30px;" onsubmit=" return checkform();">
    <h2>Login</h2>
    <!-- <p class="hint-text">Create your account. It's free and only takes a minute.</p> -->
        <!-- <h1>Welcome to BigMart </h1><br>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="fname" placeholder="First Name" required="required"></div>
				<div class="col"><input type="text" class="form-control" name="lname" placeholder="Last Name" required="required"></div>
			</div>        	
        </div>

        
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>


        Gender:&nbsp;&nbsp; <input type="radio"name="gender" class="box" name="rmale" id="rmale" >&nbsp;Male
        &nbsp;&nbsp;<input type="radio"name="gender" class="box"  name="rfemale" id="rfemale">&nbsp; Female<br><br> -->
		<div class="form-group">
            <input type="text" class="form-control" name="uid" placeholder="User-id" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
        </div>        
        <!-- <div class="form-group">
			<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div> -->
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">login</button>
        </div>
        <Button type="reset" value="reset" class="btn btn-outline-primary" >Reset</Button>
    </form>
<!--#00b4d8-->
</div>
</center>
</body>
</html>

