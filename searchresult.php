<html>
    <head>
        
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>
    </head>
    <body>

        <br><br>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12 text-center border rounded bg-light'>
                    <h1>Search Result for <?php
                    $search = $_POST['search']; 
                    echo $search;
                    ?></h1>
                </div>
                <br><br>
                <div class='col-lg-12'>
                    <table class='table'>
                        <thead class='text-center'>
                          <tr>
                            <th scope='col'>Sr No.</th>
                            <th scope='col'>Name</th>
                            <th scope='col'>Price</th>
                            <th scope='col'>Add to Cart</th>
                          </tr>
                        </thead>
                        <tbody class='text-center'>
                            <?php 
                            $dbhost= 'localhost';
                            $dbName= 'bigmart';
                            $user= 'root';
                            $pass= 'root';
                            $sr=0;
                        
                            $conn = mysqli_connect($dbhost,$user,$pass,$dbName); 
                        
                            if(!$conn)
                            {
                                echo "Connection Failed";
                            }
                            $sql = "select * from products where name = '$search' or color = '$search' or taste = '$search' or prize ='$search' ";  
                            $result = $conn->query($sql);  
                            while($row=$result->fetch_assoc())
                            {
                            
                            ?>
                            <tr>
                                <td><?php echo $sr=$sr+1; ?></td>
                                <td>
                                    <?php 
                                    $rname=$row['Name'];
                                    echo $rname;?>
                                    
                                </td>
                                <td><?php echo $row['Prize'];?></td>
                                <td><form action="manage_cart.php" method="POST">
                                    <button type="submit" class="btn btn-primary btn-block"  name="Add_To_Cart">add to cart</button>
                                        <input type="hidden" value="<?php echo $rname;?>" name="Item_Name">
                                        <input type="hidden" value="<?php echo $row['Prize'];?>" name="Price">
                                    </form>
                                </td>
                            </tr>
                            <?php 
                            }
                            ?>
                        </tbody>
                      </table>
                </div>
                
                </div>
            </div>
        </div>

    </body>
</html>
          