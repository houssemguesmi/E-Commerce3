<?php
$baseDir = __DIR__;
$imagePath = 'includes/logo.png';
$imagePath2 = 'includes/small-logo.png';

if(!empty($_SESSION['user_image'])){
    $user_image = $_SESSION['user_image'];
}


?>
<div class="navbar-container">
    <!-- Navbar -->
    <div
            class="collapse"
            id="navbarToggleExternalContent"
            data-bs-theme="dark"
    >
        <div class="bg-dark p-4">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <button
                            class="navbar-toggler"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#navbarTogglerDemo03"
                            aria-controls="navbarTogglerDemo03"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="/E-Commerce3/">
                        <img id="navbar-logo" src="<?php echo $imagePath; ?>"/>
                    </a>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/E-Commerce3/"
                                >Home</a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/E-Commerce3/products">Our products</a>
                            </li>

                        </ul>
                        <?php
                        if (!empty($user_image)) {
                            echo '<div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                               <img id="user_profile_image" src="' . $user_image . '" alt="Profile Image">
                            </button>
                            <ul class="dropdown-menu">
                                <li>';
                            include 'includes/logout.php';
                            echo    '</li>
                            </ul>
                        </div>';
                        } else {
                            echo '<a href="/E-Commerce3/login"><i id="user-icon" class="bi bi-person-circle"></i></a>';
                        }
                        ?>



                    </div>
                </div>
            </nav>
        </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarToggleExternalContent"
                    aria-controls="navbarToggleExternalContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <a
                    class="navbar-brand"
                    style="margin-right: auto; margin-left: 50px"
                    href="/E-Commerce3"
            >
                <img id="navbar-small-logo" src="<?php echo $imagePath2; ?>"/>
            </a>
        </div>
    </nav>
    <!-- Content -->
