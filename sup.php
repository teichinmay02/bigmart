<html>
    
<head>
    <title>shop</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
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

    <a>please confirm your details</a>
    Name:<?php $_POST["fname"]; echo" "; $_POST["lname"];   ?><br>
    email:<?php $_POST["email"];   ?><br>
    userid:<?php $_POST["uid"];   ?><br>

</body>
</html>