<?php
// echo "Show Queries";

// Website Settings

$query = "SELECT * FROM website_settings";
$show_website_settings = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($show_website_settings)) {
    $ws_title = $row['ws_title'];
    $ws_description = $row['ws_description'];
    $ws_keywords = $row['ws_keywords'];
    $ws_logo = $row['ws_logo'];
    $ws_url = $row['ws_url'];
    $ws_contact = $row['ws_contact'];
    $ws_pp = $row['ws_pp'];
}
?>