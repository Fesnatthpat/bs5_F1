<?php

session_start();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sign-in.css">
    <link rel="stylesheet" href="sign-in.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php include("nav.php") ?>
        <main class="form-signin w-100 m-auto my-5">
            <form action="register_db.php" method="POST">
                <div class="card card-body shadow-sm">
                    <h1 class="h3 mb-3 fw-normal">Sign Up</h1>

                    <?php if (isset($_SESSION['success'])) { ?>
                        <div class="alert alert-success" role="alert">
                            <?php
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);

                            ?>
                        </div>
                    <?php } ?>

                    <?php if (isset($_SESSION['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);

                            ?>
                        </div>
                    <?php } ?>

                    <div class="form-floating">
                        <input type="text" class="form-control my-2" name="username" placeholder="Enter your username">
                        <label for="username">username</label>
                    </div>

                    <div class="form-floating">
                        <input type="email" class="form-control my-2" name="email" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" class="form-control my-2" name="password" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" class="form-control my-2" name="confirm_password" id="floatingPassword" placeholder="Confirm Password">
                        <label for="floatingPassword">Confirm Password</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary" name="register" type="submit">Sign in</button>
                </div>
                <!-- <p class="mt-5 mb-3 text-muted">© 2017–2022</p> -->
            </form>
        </main>

        <?php include("footer.php") ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>