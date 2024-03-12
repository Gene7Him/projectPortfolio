<?php
// guestbook_display.php
require '/home/genegree/guestbook.php';


// Retrieve approved guestbook messages
$sql = "SELECT * FROM guestbook WHERE approved = 1 ORDER BY timestamp DESC";
$result = mysqli_query($sql);

if ($result->num_rows > 0) {
    echo "<div class='guestbook-messages'>";
    echo "<h3>Approved Messages</h3>";

    while ($row = $result->fetch_assoc()) {
        echo "<div class='message'>";
        echo "<strong>{$row['name']}</strong> - {$row['timestamp']}<br>";
        echo nl2br($row['message']); // Display line breaks
        echo "</div>";
    }

    echo "</div>";
} else {
    echo "<p>No approved messages yet.</p>";
}


?>

