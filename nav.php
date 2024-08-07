<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-2 mb-4 border-bottom">
    <a href="index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <h1>F1</h1>
    </a>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="#" class="nav-link px-2 link-primary">Features</a></li>
        <li><a href="#" class="nav-link px-2 link-primary">Pricing</a></li>
        <li><a href="#" class="nav-link px-2 link-primary">FAQs</a></li>
        <li><a href="#" class="nav-link px-2 link-primary">About</a></li>
    </ul>

    <div class="col-md-3 text-end">
        <?php if (!isset($_SESSION['user_id'])) { ?>
            <a href="login.php" type="button" class="btn btn-outline-primary me-2">Sign-In</a>
            <a href="register.php" type="button" class="btn btn-outline-primary me-2">Sign-Up</a>


        <?php } else { ?>
            <a href="logout.php" type="button" class="btn btn-outline-danger me-2">Logout</a>
        <?php } ?>
    </div>
</header>