<?php
$apiKey = "rzp_test_buwq2Rog4l5rqo";
?>
<form action="" method="POST">
    <script
        src="https://checkout.razorpay.com/v1/checkout.js"
        data-key="rzp_test_buwq2Rog4l5rqo" // Enter the Test API Key ID generated from DashboardSettings → API Keys
        data-amount="10000" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
        data-currency="INR"// You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
        data-id="<?php echo 'OID'.rand(10,100).'END'; ?>"// Replace with the order_id generated by you in the backend.
        data-buttontext="Pay with Razorpay"
        data-name="BigMart"
        data-description=""
        data-image="https://example.com/your_logo.jpg"
        data-prefill.name=""
        data-prefill.email=""
        data-theme.color=""
    >
</script>
    <input type="hidden" custom="Hidden Element" name="hidden">
    </form>