<?php 
session_start();
?>

<html>
    <head>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>

        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center border rounded bg-light">
                    <h1>cart</h1>
                </div>
                <br><br>
                <div class="col-lg-9">
                    <table class="table">
                        <thead class="text-center">
                          <tr>
                            <th scope="col">Sr No.</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total price</th>
                            <th scope="col">Remove</th>
                          </tr>
                        </thead>
                        <tbody class="text-center">
                        <?php 
                        // <!-- $total=0; -->
                        if(isset($_SESSION['cart']))
                        {
                            foreach($_SESSION['cart'] as $key => $value)
                            {
                                // print_r($value);
                                $sr=$key+1;
                                                     
                                $tprice=$value['Price'];
                                $tquantity=$value['Quantity'];
                                // echo $tprice;
                                // echo $tquantity;
                                // <!-- $total=$total+$value['Price']; -->
                                echo "
                                <tr>
                                    <td>$sr</td>
                                    <td>$value[Item_Name]</td>
                                    <td>$value[Price]<input type='hidden' name='tprice' class='iprice' value='$value[Price]'></td>
                                    <td><input type='number' class='text-center iquantity' onchange='subTotal()' min='1' max='10' value='$value[Quantity]'>
                                    
                                    </td>
                                    <td class='itotal'>
                                    
                                    

                                    </td>

                                    <td>
                                    
                                    <form action='manage_cart.php' method='post'>
                                    <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>Remove</button>
                                    <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                    </form>

                                    </td>
                                </tr>
                                ";
                            }
                        }
                        ?>
                        </tbody>
                      </table>
                </div>

                <div class="col-lg-3">
                    <div class="border bg-light rounded p-4">
                    <h4>Total: </h4>
                    
                    <form action="payscript.php" method="post">

                        <h5>
                            <input id="gtotal" name="gtotal">
                        </h5>
                        
                        <input type="hidden" name="gtt" value="<?php echo $gtt; ?>" id="gtt">
                        <button type="submit" class="btn btn-primary btn-block">Pay Now</button>

                    </form>
                </div>
                </div>
            </div>
        </div>

        <form action="inv.php" method="post">

            <input type="hidden" id="Item_Name" name="Item_Name">
            <input type="hidden" id="amount" name="amount" value="">
            
            <input type="hidden" name="gtt" value="<?php echo $gtt; ?>" id="gtt">
            <!-- <input type="submit" value="inovice"> -->

        </form>


    <script>
        var t=0;
        var iprice=document.getElementsByClassName('iprice');
        var iquantity=document.getElementsByClassName('iquantity');
        var itotal=document.getElementsByClassName('itotal');
        var total=document.getElementById('gtotal');

        function subTotal()
        {
            t=0;
            for(i=0;i<iprice.length;i++)
            {   
                itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
                t=t+(iprice[i].value)*(iquantity[i].value);
                
            }
            document.getElementById("gtotal").value = t;   
        }


        subTotal();
    </script> 

    </body>
</html>