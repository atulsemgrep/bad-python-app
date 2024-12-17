<?php

// Define the URL and credentials
$url = "https://example.com/api/resource";
$username = "admin";
$password = "34kj4uhfu34h!!";

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url); // Set the URL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response instead of printing it
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC); // Use Basic Authentication
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password"); // Set the username and password

// Optional: Set additional headers (if needed)
$headers = [
    "Accept: application/json",
    "Content-Type: application/json"
];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// Execute the HTTP request
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    echo "Error: " . curl_error($ch);
} else {
    // Get the HTTP status code
    $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    echo "HTTP Status: $http_status\n";
    echo "Response: $response\n";
}

// Close the cURL session
curl_close($ch);


?>
