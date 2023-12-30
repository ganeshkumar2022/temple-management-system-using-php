<?php

$api_key = 'rzp_test_LCgSD8rroIUFNI'; // Replace with your Razorpay API key
$payment_id = 'pay_NIE71Zxo82vx9U'; // Replace with the payment ID you want to retrieve details for

$url = 'https://api.razorpay.com/v1/payments/' . $payment_id;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Basic ' . base64_encode($api_key . ':'),
]);

$response = curl_exec($ch);
curl_close($ch);

if ($response) {
    $transaction_details = json_decode($response, true);
    // Process $transaction_details as needed
    var_dump($transaction_details); // Example: Displaying the transaction details
} else {
    // Handle API request failure
    echo "Failed to fetch transaction details.";
}
?>
