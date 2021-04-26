<?php
include("db.php");

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

if (isset($_POST['update'])){
    $id = $_GET['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $query = "UPDATE `tasks` SET title = 'title', description = '$description' WHERE id = $id";
    mysqli_query($conn, $query);
    header("Location: index.php");
}
?>

<?php include("includes/header.php") ?>
<div class="container p-4">
    <div class="col-md-4 mx-auto">
        <div class="card card-body">
            <form action="edit_task.php?id=<?php echo $_GET['id']?>" method="POST">
                <div class="input-group mb-3">
                    <input type="text" value="<?php echo $title ?>" name="title" class="form-control"
                        placeholder="Task title" autofocus>
                </div>
                <div class="input-group mb-3">
                    <textarea name="description" rows="2"
                        placeholder="Task Description" class="form-control"><?php echo $description ?></textarea>
                </div>
                 <button type="submit" name="update" class="btn btn-success">Update</button>
            </form>

        </div>


    </div>

</div>

<?php include("includes/footer.php") ?>