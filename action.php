<?php

 if(!empty($_POST['grandTotal'])){
 
    $payment = $_POST['grandTotal'];
  
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payment-requests/');
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER,
                array("X-Api-Key:<Your API KeY OF Instamojo>",
                    "X-Auth-Token:<Your Auth Token>"));
    $payload = Array(
        'purpose' => 'Business',
        'amount' => $payment,
        'phone' => 'Your Phone',
        'buyer_name' => 'John Doe',
        'redirect_url' => 'http://localhost/php_payment/Response.php',
        'send_email' => true,
        'webhook' => 'http://www.example.com/webhook/',
        'send_sms' => true,
        'email' => 'Your Registered Email of Instamojo',
        'allow_repeated_payments' => false
    );
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
    $response = curl_exec($ch);
    curl_close($ch); 
    $response = json_decode($response);

    $result = $response->payment_request;

    $data = $result->longurl;

    header("Location:$data"); 

    // echo'<pre>';
    // print_r($data);
 }
 else
 {
    echo "Error OR form Empty";
 }

?>