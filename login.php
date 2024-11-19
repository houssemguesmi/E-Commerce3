<?php
global $con;
include('connect.php');
$response = ['status' => 'error', 'message' => 'Invalid credentials.'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_fullName'] = $user['fullName'];
            $_SESSION['user_username'] = $user['username'];
            $_SESSION['user_role'] = $user['role'];
            $_SESSION['user_image'] = $user['image'];
            $response = ['status' => 'success', 'message' => 'Login successful.'];
            echo json_encode($response);
            exit;
        }
    }
}else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if(!empty($_SESSION['user_id'])){
        header('Location: /E-Commerce3/');
    }
}

?>

<div id="login-container">
    <form id="loginForm" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="row">
            <div class="col-11"></div>
            <div class="col-1">
                <button type="submit" class="btn btn-outline-primary">Login</button>
            </div>
        </div>
    </form>
</div>
