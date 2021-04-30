<?php include('db.php') ?>

<?php include('includes/header.php'); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="controller/save_task.php" method="POST">
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
            <?php include('includes/messages.php') ?>
        </div>
        <div class="col-md-8">
            <table class="table table-borded">
                <thead>
                    <tr>
                        <th scope="col"><a href="index.php?col=title">Title</a></th>
                        <th scope="col"><a href="index.php?col=description">Description</a></th>
                        <th scope="col"><a href="index.php?col=created_at">Created at</a></th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include('controller/fill_table.php'); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>