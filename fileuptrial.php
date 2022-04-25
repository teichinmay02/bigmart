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
            move_uploaded_file($file_tmp,"images/".$file_name);
            echo "success";
        }
        else
        {
            print_r($errors);
        }
    }
?>
<html>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="image" />
            <input type="submit" value="submit">
        </form>
    </body>
</html>