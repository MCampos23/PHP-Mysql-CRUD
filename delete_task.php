<?php


include("db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM `tasks` WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (!$query) {
        die("Query Failed");
    } else {

        $_SESSION['message'] = "Task succesfully deleted";
        $_SESSION['message_type'] = "warning";
        header("Location: index.php");
    }
};
?>