<?php
// Create a curl handle to a non-existing location
$ch = curl_init('arts.esy.es');

// Execute
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_exec($ch);

// Check if any error occurred
if(curl_errno($ch))
{
    echo 'Curl error: ' . curl_error($ch);
}

// Close handle
curl_close($ch);
?>