<html>
    
    <head>
        <link rel="stylesheet" href="css/style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        

        
    <style>body {
        background-image: url("images/upbg.jpg");
    }
        
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
            text-decoration: black;
            margin: 0 auto;
            /* padding: 1px 0; */
            font-size: 15px;
            opacity: 0.9;
        }
        .signup-form h2 {
            color: black;
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
            color:black;
            margin-bottom: 30px;
            text-align: center;
        }
        .signup-form form {
            color: black;
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
            color: black;
            text-decoration: underline;
        }
        .signup-form a:hover {
            text-decoration: none;
        }
        .signup-form form a {
            color: black;
            text-decoration: none;
        }	
        .signup-form form a:hover {
            text-decoration: underline;
        }  

        
        
    </style>
    
    </head>
    <body>
        <div class="signup-form">

            <br>
            <br>
            <form action="inv.php" class="login-form"  method="POST" style="padding-top: 30px;" >
            <h2>Checkout</h2>
            <p class="hint-text">Enter your shipping details and other details.</p>
                <!-- <h1>Welcome to BigMart </h1><br> -->
                <br><div class="form-group">
                    <div class="row">
                        <div class="col"><input type="text" class="form-control" name="fname" placeholder="First Name" required="required"></div>
                        <div class="col"><input type="text" class="form-control" name="lname" placeholder="Last Name" required="required"></div>
                    </div>        	
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="email" required="required" >
                </div>
    
        
                
                <div class="form-group">
                    <textarea class="form-control" id="addr" name="addr" placeholder="Address" required="required" rows="4" cols="50"></textarea>
                </div>
        
                <div class="form-group">
                    <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Pincode" required="required" >
                </div>
                      
                <div class="form-group">
                    <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
                </div>

                
                <div class="form-group">
                    <input type="hidden" id="grandtotal" value="<?php echo $_POST['gtotal']; ?>" name="grandtotal">
                    <!-- <button type="submit" id="rzp-button1" oncl class="btn btn-success btn-lg btn-block">Pay <?php echo $_POST['gtotal'];?></button> -->
                    <button type="submit" class="btn btn-success btn-lg btn-block">Pay <?php echo $_POST['gtotal'];?></button>

                <Button type="reset" value="reset" class="btn btn-outline-primary">Reset</Button></div>
            </form>
        <!--#00b4d8-->
        </div>
    
    </body>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script>
        var options = {
            "key": "rzp_test_buwq2Rog4l5rqo", // Enter the Key ID generated from the Dashboard
    "amount": "<?php echo $_POST['gtotal'] * 100;?>", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "BigMart",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    "order_id": "", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler": function (response){
        jQuery.ajax({
            type:"POST",
            url:"payment.php",
            data:"pay_id="+response.razorpay_payment_id+"&amount",
            success:function(result){
                window.location.href="inv.php"
            }
        })
    },
    "prefill": {
        "name": "",
        "email": "",
        "contact": ""
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};

var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
        alert(response.error.code);
        alert(response.error.description);
        alert(response.error.source);
        alert(response.error.step);
        alert(response.error.reason);
        alert(response.error.metadata.order_id);
        alert(response.error.metadata.payment_id);
});
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
        </script>
</html>