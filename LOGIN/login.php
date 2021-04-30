<?php 

require("con_db.php");

    if (isset($_POST['login'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "SELECT * FROM `users` WHERE email= '$email' ";
        $query_result = mysqli_query($conection, $query);
        $res = mysqli_fetch_array($query_result);

        if ($res == null) {
            $_SESSION['message'] = "Invalid email";
            $_SESSION['message_type'] = "warning";
        
            header('Location: index.php');
           
           
            
        } else {
            $hashed_password = $res['password'];
            if (password_verify($password, $hashed_password) == 1) {
                echo $res['id_user'];
                header("Location: ../CRUD\index.php?id=".$res['id_user']."&col=default");
            } else {
                $_SESSION['message'] = "Invalid password";
                $_SESSION['message_type'] = "warning";
        
                header('Location: index.php');
            }
        }
    }

    ?>