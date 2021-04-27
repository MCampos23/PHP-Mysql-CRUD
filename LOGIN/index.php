<?php include("includes/header.php") ?>


<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto mt-5 text-center">
                <div class="card card-body bg-secondary">
                    <h1>Login:</h1>
                    <form method="POST" action="index.php">
                        <div class="input-group mb-3 mt-3">
                            <input type="text" class="form-control" name="email" placeholder="e-mail" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="password" placeholder="password" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                        <button class="btn btn-primary" type="submit" name="login">Enter</button>
                        <p class="p-2"><a href="signup.php">Create an account</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php require("con_db.php") ?>
    <?php
    if (isset($_POST['login'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "SELECT `password` FROM `users` WHERE email= '$email' ";
        $query_result = mysqli_query($conection, $query);
        var_dump($query_result);

        $res = mysqli_fetch_array($query_result);
        echo $res['email'];
        $hashed_password = $res['password'];

        if (password_verify($password, $hashed_password)==1){
            
            header("Location: app.php");
        }
        else{
            echo "Contraseña no válida";
            echo $res['email'];
        }
        }
      
    ?>
    <?php include("includes/footer.php") ?>

<!--
        email   num     num     let     let
        pass    num     let     num     let
                Sí      Sí      no      no
    -->