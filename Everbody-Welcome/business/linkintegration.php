<?php

// Set your API access token
$access_token = "1e46d40bf5c59cbd3a54c2a25fdca46e13ca2d68";

// Set the URL you want to shorten
$url = "https://www.example.com";

// Build the API endpoint URL
$endpoint = "https://api-ssl.bitly.com/v4/shorten";

// Set the request headers
$headers = array(
    "Authorization: Bearer " . $access_token,
    "Content-Type: application/json",
);

// Set the request body
$body = array(
    "long_url" => $url,
);

// Encode the request body as JSON
$body_json = json_encode($body);

// Create a new cURL resource
$curl = curl_init();

// Set the cURL options
curl_setopt_array($curl, array(
    CURLOPT_URL => $endpoint,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $body_json,
    CURLOPT_HTTPHEADER => $headers,
));

// Send the request and get the response
$response = curl_exec($curl);

// Close the cURL resource
curl_close($curl);

// Decode the response JSON
$response_json = json_decode($response, true);

// Get the shortened URL from the response
$short_url = $response_json["link"];

// Use the shortened URL in your PHP code as needed
echo "Short URL: " . $short_url;

?>