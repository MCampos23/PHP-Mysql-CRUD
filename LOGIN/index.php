<?php 
include("includes/header.php");
include('con_db.php')
?>


<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto mt-5 text-center">
                <div class="card card-body bg-secondary">
                    <h1>Login:</h1>
                    <form method="POST" action="login.php">
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
                <?php include('includes/messages.php') ?>

            </div>
        </div>
    </div>
    <?php 

        
        ?>

    

    <?php include("includes/footer.php") ?>