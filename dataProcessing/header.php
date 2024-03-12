<?php
// header.php
setcookie("guestbook_greeting", "Hello, $name!", time() + 3600, "/", "gene7@greenriverdev.com");
// Check if the greeting cookie is set
if (isset($_COOKIE["guestbook_greeting"])) {
    $greeting = $_COOKIE["guestbook_greeting"];
    echo "<div>$greeting</div>";
}
?>
