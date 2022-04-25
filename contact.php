<!DOCTYPE html>
<html>
<head>
    <title>contact</title>

    <link rel="stylesheet" href="css/style.css">
    <style>
                
        .contact .icons-container {
        display: -ms-grid;
        display: grid;
        -ms-grid-columns: (minmax(29rem, 1fr))[auto-fit];
            grid-template-columns: repeat(auto-fit, minmax(29rem, 1fr));
        gap: 1.5rem;
        }

        .contact .icons-container .icons {
        text-align: center;
        text-transform: lowercase;
        border: 0.1rem solid rgba(0, 0, 0, 0.1);
        padding: 2rem;
        }

        .contact .icons-container .icons i {
        height: 6rem;
        width: 6rem;
        line-height: 6rem;
        font-size: 2.5rem;
        background: #ADD8E6;
        color: #fff;
        border-radius: 50%;
        }

        .contact .icons-container .icons h3 {
        color: #222;
        font-size: 2rem;
        padding: 1rem 0;
        font-style: italic;
        }

        .contact .icons-container .icons p {
        color: #666;
        font-size: 1.5rem;
        line-height: 2;
        }

        .contact .row {
        display: flex;
        gap: 2.5rem;
        margin-top: 2rem;
        
        }


        .contact .row form {
        padding-left: 10rem;
        padding-right: 10rem    ;
        border: 0.1rem solid rgba(0, 0, 0, 0.1);
        }

        .contact .row form h3 {
        font-size: 2.5rem;
        font-style: italic;
        padding-bottom: 1rem;
        color: #222;
        }

    </style>

</head>
<body>
    



<div class="heading">
    <h1 style="font-style: italic;">contact us</h1>
</div>

<section class="contact">

    <div class="icons-container">

        <div class="icons">
            <h3>our number</h3>
            <p>+91-9867624128</p>
        </div>

        <div class="icons">
            <h3>our email</h3>
            <p>chinmayt09@gmail.com</p>
            <p>chinmay.teli@somaiya.edu</p>
        </div>

        <div class="icons">
            <h3>our address</h3>
            <p>13,Smruti,</p>
            <p>Tejpal Scheme Road No.5,</p>
            <p>Vile Parle East,Mumbai-400057</p>
        </div>

    </div>

    <div class="row">

        <form action="" enctype="multipart/form-data" method="POST">
            <br><br>
            <h3>Feedback</h3>
            <div>
                <input type="text" placeholder="enter your name" >
                <input type="text" placeholder="enter your email" ><br><br>
            </div>
            <div>
                <input type="text" placeholder="enter your number">
                <input type="text" placeholder="enter your subject"><br><br>
            </div>
            <textarea placeholder="your message/feedback" cols="46  " rows="10"></textarea>
            <h4>Facing any issue? send us the screenshot we will work upon it:
            <input type="file" name="image" >
                        
            <?php
                if(isset($_FILES['image']))
                {
                    $errors=array();
                    $file_name = $_FILES['image']['name'];
                    $file_size = $_FILES['image']['size'];
                    $file_tmp = $_FILES['image']['tmp_name'];
                    $file_type = $_FILES['image']['type'];
                    // $file_ext= strtolower(end(explode('.',$file_name)));
                    $file_ext=explode('.',$file_name);
                    $fileext=strtolower(end($file_ext));
                    $expensions=array('jpeg','jpg','png');

                    if(in_array($file_ext,$expensions)==true)
                    {
                        $errors[]="extension not allowed, only jpeg/png file allowes";
                    }

                    if($file_size > 2097152)
                    {
                        $errors[]='File must be exactly 2MB';
                    }

                    if(empty($errors)==true)
                    {
                        move_uploaded_file($file_tmp,"issues/".$file_name);
                        echo "Image received. we will work upon the issue and getback to you soon";
                    }
                    else
                    {
                        print_r($errors);
                    }
                }
            ?>
                        
            
            <br></h4>
            <br><center><button type="submit" value="send" class="btn"></center></button>
        </form>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.0193951152196!2d72.84889231491888!3d19.106805055968522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9cab65fc0c1%3A0xfa9484daefe4695!2sSmruti%20Apartment%2C%20Tejpal%20Road%2C%20Vishnu%20Prasad%20Society%2C%20Navpada%2C%20Netaji%20Subhash%20Nagar%2C%20Vile%20Parle%2C%20Mumbai%2C%20Maharashtra%20400057!5e0!3m2!1sen!2sin!4v1642915059662!5m2!1sen!2sin" width="600" height="450" style="border:0;"></iframe>

    </div>

</section>


</body>
</html>
