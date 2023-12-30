<?php

require('config.php');

session_start();

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    $html = "<p>Your payment was successful</p>
             <p>Payment ID: {$_POST['razorpay_payment_id']}</p>
             <p>Order ID: {$_SESSION['razorpay_order_id']}</p>
             <p>Signature: {$_POST['razorpay_signature']}</p>";


    $payment_id=$_POST['razorpay_payment_id'];
    $order_id=$_SESSION['razorpay_order_id'];
    $name=$_SESSION["name"];
    $email=$_SESSION["email"];
    $price=$_SESSION["price"];
    $pass_id=$_SESSION["pass_id"];
    include("../db.php");
    $sql="insert into payments (name,email,price,payment_id,order_id,pass_id) values ('$name','$email',$price,'$payment_id',
    '$order_id',$pass_id)";
    if(mysqli_query($con,$sql))
    {
        setcookie("success","Pass Verification completed",time()+3,"/");
        echo "<script>window.location.replace('../pass.php');</script>";
    }
    else
    {
        echo "Error :".mysqli_error($con);
    }

}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

//echo $html;
