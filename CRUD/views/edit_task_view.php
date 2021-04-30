<?php include("../includes/header.php") ?>
<div class="container p-4">
    <div class="col-md-4 mx-auto">
        <div class="card card-body">
            <form action="../controller/edit_task.php?id=<?php echo $_GET['id'] ?>" method="POST">
                <div class="input-group mb-3">
                    <input type="text" value="<?php echo $title ?>" name="title" class="form-control" placeholder="Task title" autofocus>
                </div>
                <div class="input-group mb-3">
                    <textarea name="description" rows="2" placeholder="Task Description" class="form-control"><?php echo $description ?></textarea>
                </div>
                <button type="submit" name="update" class="btn btn-success">Update</button>
                <a class="btn btn-primary" href="../index.php?col=default">Go back to list</a>
            </form>
        </div>
        <?php include('../includes/messages.php') ?>
    </div>
</div>

<?php include("../includes/footer.php") ?>