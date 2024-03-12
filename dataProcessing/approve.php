<?php
// approve.php
require '/home/genegree/guestbook.php';


// Process approval
if (isset($_GET["token"])) {
    $token = $_GET["token"];

    // Update the 'approved' field in the database
    $sql = "UPDATE guestbook SET approved = 1 WHERE token = '$token'";
    $result = mysqli_query($cnxn, $sql);

    echo "Thank you! The guestbook message has been approved.";
} else {
    echo "Invalid token.";
}

?>

