<?php
// guestbook_submit.php
require '/home/genegree/guestbook.php';


// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $token = bin2hex(random_bytes(7)); // Generate a unique token


    // Insert data into the guestbook table
    $sql = "INSERT INTO guestbook (name, email, message, token) VALUES ('$name', '$email', '$message', '$token')";
    $result = mysqli_query( $cnxn, $sql);

    // Send approval email
    $approval_link = "https://gene7.greenriverdev.com/projectPortfolio/dataProcessing/approve.php?token=$token";
    $subject = "Guestbook Message Approval";
    $message = "You have a new guestbook message from $name. Click the link below to approve:\n\n$approval_link";
    $headers = "From: faison.eugene@greenriver.edu"; // Update with your email address
    mail("faison.eugene@student.greenriver.edu", $subject, $message, $headers);

    // Set a cookie with the user's name
    setcookie("guestbook_greeting", "Hello, $name!", time() + 3600, "/", "gene7@greenriverdev.com"); // Cookie lasts for 1 hour
}


?>

