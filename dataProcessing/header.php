<?php
// header.php

// Check if the greeting cookie is set
if (isset($_COOKIE["guestbook_greeting"])) {
    $greeting = $_COOKIE["guestbook_greeting"];
    echo "<div>$greeting</div>";
}
?>
