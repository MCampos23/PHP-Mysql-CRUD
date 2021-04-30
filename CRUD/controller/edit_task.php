<?php include("../db.php");?>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM `tasks` WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $title = $row['title'];
        $description = $row['description'];
    }
};

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    if ($title != "" && $description != "") {
        $query = "UPDATE `tasks` SET title = '$title', description = '$description' WHERE id = $id";
        mysqli_query($conn, $query);
        $_SESSION['message'] = "Task edited succesfully";
        $_SESSION['message_type'] = "success";     
    } else {
        $_SESSION['message'] = "Please complete the fields";
        $_SESSION['message_type'] = "warning";
    }
}
?>

<?php include("../views/edit_task_view.php")?>