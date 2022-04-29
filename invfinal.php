<?php 

    session_start();
	// $sendemailto=$_SESSION['emial'];
	// echo $sendemailto;
    // require_once 'vendor/autoload.php';
    // use Dompdf\Dompdf;
    // include('config.php');

    // ob_start();

    // $html=file_get_contents('invfinal.php');

    // $dompdf=new Dompdf;
    // $dompdf->loadHtml($html);
    // $dompdf->setPaper('A4','portrait');
    // $dompdf->render();
    // $dompdf->stream('invoice.pdf');
	$date = date('d-m-y h:i:s');
?>

<html>
	<head>
	
	<link rel="stylesheet" href="css/style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
		<meta charset="utf-8" />
		<title>Invoice</title>

		<style>
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}

			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}
		</style>
	</head>

	<body>
		<div class="invoice-box">
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
									<!-- <img src="https://www.sparksuite.com/images/logo.png" style="width: 100%; max-width: 300px" /> -->
                           BigMart
								</td>

								<td>
									Invoice : <?php $rid=$_SESSION['randid']; echo $rid;?><br />
									Created: <?php echo $date ?><br />
									
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
									BigMart, Inc.<br />
									Vile Parle East<br />
									Mumbai-400057
								</td>

								<td>
									Acme Corp.<br />
									John Doe<br />
									john@example.com
								</td>
							</tr>
						</table>
					</td>
				</tr>


				<tr class="heading">
					<td>Item</td>
					<td>Price</td>
				</tr>

				<tr>
				<?php 
					if(isset($_SESSION['cart']))
					{
						foreach($_SESSION['cart'] as $key => $value)
						{
													
							$tprice=$value['Price'];
							$tquantity=$value['Quantity'];
							
							echo "
							<tr>
								<td>$value[Item_Name]</td>
								<td>$value[Price]</td>
							</tr>
							";
						}
					}
                ?>
				</tr>

				

				<tr class="total">

					<td></td>

					<td>

                    <?php 
                    include('config.php');
                    // include('inv.php');
                    
                    $sql = "select * from finalcheck where id = '$rid' ";  
                    $result = $conn->query($sql); 
					$t=0;
                    while($row=$result->fetch_assoc())
                    {
                        echo $row['total'];
						$t=$row['total'];
						$em=$row['email'];
						// $adr=$row['address'];
						$pincode=$row['pincode'];
						$fname=$row['fname'];
						$lname=$row['lname'];


                    }
                    ?>
                    </td>
				</tr>
			</table>
		</div>
        <!-- <?php 
        
        
        
	// include('pdf.php');
	// $file_name = md5(rand()) . '.pdf';
	// $html_code = '<link rel="stylesheet" href="bootstrap.min.css">';
	// $html_code .= fetch_customer_data($connect);
	// $pdf = new Pdf();
	// $pdf->load_html($html_code);
	// $pdf->render();
	// $file = $pdf->output();
	// file_put_contents($file_name, $file);
	
	// require 'class/class.phpmailer.php';
	// $mail = new PHPMailer;
	// $mail->IsSMTP();								//Sets Mailer to send message using SMTP
	// $mail->Host = 'smtp.gmail.com';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
	// $mail->Port = '80';								//Sets the default SMTP server port
	// $mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
	// $mail->Username = 'bigmart392@gmail.com';					//Sets SMTP username
	// $mail->Password = 'Bigmart@123';					//Sets SMTP password
	// $mail->SMTPSecure = 'SSL';							//Sets connection prefix. Options are "", "ssl" or "tls"
	// $mail->From = 'info@webslesson.info';			//Sets the From email address for the message
	// $mail->FromName = 'Webslesson.info';			//Sets the From name of the message
	// $mail->AddAddress('web-tutorial@programmer.net', 'Name');		//Adds a "To" address
	// $mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
	// $mail->IsHTML(true);							//Sets message type to HTML				
	// $mail->AddAttachment($file_name);     				//Adds an attachment from a path on the filesystem
	// $mail->Subject = 'Customer Details';			//Sets the Subject of the message
	// $mail->Body = 'Please Find Customer details in attach PDF File.';				//An HTML or plain text message body
	// if($mail->Send())								//Send an Email. Return true on success or false on error
	// {
	// 	$message = '<label class="text-success">Customer Details has been send successfully...</label>';
	// }
	// unlink($file_name); -->



        
        ?>
        
				<button name="action" class="btn btn-danger" value="PDF Send" onclick="window.print();"></button>
		
		<!-- <form action="" method="post"> -->
		
                    
                    <!-- <button type="submit" id="rzp-button1" class="btn btn-success btn-lg btn-block">Pay <?php echo  $total;?></button> -->
                    

		<!-- </form> -->
		
		

		<button onclick="window.print()" id="invbtn">get invoice</button>
		<div style="visibility: hidden;">
		<?php
        

		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;
		require 'PHPMailer-master/src/Exception.php';
		require 'PHPMailer-master/src/PHPMailer.php';
		require 'PHPMailer-master/src/SMTP.php';

		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->Mailer = "smtp";

		$mail->SMTPDebug  = 1;  
		$mail->SMTPAuth   = TRUE;
		$mail->SMTPSecure = "tls";
		$mail->Port       = 587;
		$mail->Host       = "smtp.gmail.com";
		$mail->Username   = "telichinmay02@gmail.com";
		$mail->Password   = "Rooptex@141997";

		$mail->IsHTML(true);
		$mail->AddAddress("$em", "Chinmay teli");
		$mail->SetFrom("telichinmay02@gmail.com", "Chinmay Teli");
		// $mail->AddReplyTo("reply-to-email@domain", "reply-to-name");
		// $mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
		$mail->Subject = "Order Details Bigmart";
		$content = "<b>Your invoice number is :".$rid."<br>Name: ".$fname." ".$lname."<br> Total Price is : ".$t."<br>pincode: ".$pincode."";
		$mail->MsgHTML($content); 
		if(!$mail->Send()) 
		{
			
			
		} else 
		{
			echo "Email sent successfully";
		}
      ?>

		</div>
	</body>
	
</html>
<script>
// var prtContent = document.getElementById("invbtn");
// var WinPrint = window.open('invfinal.php', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
// WinPrint.document.write(prtContent.innerHTML);
// WinPrint.document.close();
// WinPrint.focus();
// WinPrint.print();
// WinPrint.close();
</script>

