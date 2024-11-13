
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo 'here';
    session_unset();

    session_destroy();

    header("Location: /E-Commerce3/");
    exit;
}
?>
<form method="POST">
    <button id="logoutButton" type="submit" class="btn btn-outline-danger">Logout</button>
</form>
