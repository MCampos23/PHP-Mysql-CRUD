<?php include('db.php'); ?>

<?php include('includes/header.php'); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">


            <div class="card card-body">
                <form action="save_task.php" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" name="title" class="form-control" placeholder="Task title" autofocus>
                    </div>
                    <div class="input-group mb-3">
                        <textarea name="description" rows="2" placeholder="Task Description" class="form-control"></textarea>
                    </div>
                    <div class="d-grid gap-2">
                        <input type="submit" class="btn btn-success btn-block mb-3" value="Save Task" name="save_task">

                    </div>

                </form>

            </div>
            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show mt-3" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>


            <?php session_unset();
            } ?>
        </div>
        <div class="col-md-8">
            <table class="table table-borded">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM tasks";
                    $result_tasks = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($result_tasks)) { ?>
                        <tr>
                            <td><?php echo $row['title'] ?></td>
                            <td><?php echo $row['description'] ?></td>
                            <td><?php echo $row['created_at'] ?></td>
                            <td>
                                <a href="edit_task.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-secondary m-1"><i class="fas fa-pen"></i></a>
                                <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-danger m-1"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>




                    <?php } ?>


                </tbody>
            </table>



        </div>

    </div>
</div>

<?php include('includes/footer.php'); ?>