<?php

include('db.php');

if(isset($_POST['save_task'])){
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $query = "INSERT INTO tasks(title, description) VALUES ('$title', '$description')";
    $result= mysqli_query($conn, $query);
    if(!$result) {
        die("Query failed");
    }

    $_SESSION['message'] = "Task saved succesfully";
    $_SESSION['message_type'] = "success";

    header("Location: index.php");
}
