<?php include("includes/header.php") ?>
<?php require("con_db.php") ?>



<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto mt-5 text-center">
                <div class="card card-body bg-secondary">
                    <h1>Register:</h1>
                    <form method="post" action="signup.php">
                        <div class="input-group mb-3 mt-3">
                            <input type="text" class="form-control" name="email" placeholder="e-mail" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="password" placeholder="password" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="confirm_password" placeholder="confirm password" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                        <button class="btn btn-primary" type="submit" name="login">Create</button>
                        <p class="p-2">Already have an account? <br><a href="index.php">Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['login'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        if (findRepeatMail($email, $conection) == 1) {
            echo "This email already exists";
        } else {

            if ($password == $confirm_password) {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $query = "INSERT INTO `users`( `email`, `password`) VALUES ('$email','$hashed_password')";
                $query_result = mysqli_query($conection, $query);

                header("Location: index.php");
            }
        }
    }
    function findRepeatMail($em, $conection){
        $sql = "SELECT * FROM users WHERE email=$em";
        $result = mysqli_query($conection, $sql);
        if (mysqli_num_rows($result) > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    ?>
    <?php include("includes/footer.php") ?>