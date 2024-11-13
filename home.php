<?php
if(!empty($_SESSION['user_id'])){
    $user_fullName = $_SESSION['user_fullName'];
    $user_email = $_SESSION['user_email'];
    $user_role = $_SESSION['user_role'];
    $user_image = $_SESSION['user_image'];

    echo "Welcome, " . htmlspecialchars($user_fullName) . "!";
    echo "<br>Email: " . htmlspecialchars($user_email);
    echo "<br>Role: " . htmlspecialchars($user_role);
    echo "<br>Image: " . htmlspecialchars($user_image);
}
?>