<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // You can add additional processing here, such as sending an email
    
    // For this example, let's just display the submitted data
    echo "<h2>Thank you, $name!</h2>";
    echo "<p>Your message has been received:</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Message:</strong> $message</p>";
}
?>
