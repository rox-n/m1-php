<?php

/* web page that stores cookies on the client's computer; stored data expires in 5';
check if the stored information is available after the 5'.
*/


$cookie_nume = "user";
$cookie_valoare = "John Doe";

// Check if the cookie has already been set
if(!isset($_COOKIE[$cookie_nume])) {
    // Set cookies to expire in 5 minutes
    setcookie($cookie_nume, $cookie_valoare, time() + 300, "/");
    $cookie_status = "Cookie named '" . $cookie_nume . "' is set with value: " . $cookie_valoare;
} else {
    // Cookie is already set, now check if it has expired or not
    $cookie_status = "Cookie named '" . $cookie_nume . "' is available with value: " . $_COOKIE[$cookie_nume];
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Cookie tema</title>
</head>
<body>
    <h1> ex 1: PHP Cookie - stored and available</h1>
    <p><?= $cookie_status; ?></p>

    <p><strong>Reload this page after 5 minutes</strong> to check if the cookie has expired.</p>

    <?php
    // Check if the cookie has expired
    if (!isset($_COOKIE[$cookie_nume])) {
        echo "<p>The cookie has either not been set or has expired.</p>";
    } else {
        echo "<p>The cookie is still active.</p>";
    }
    ?>
</body>
</html>