<?php

$col= $_GET['col'];

if($col=="default"){
    $query = "SELECT * FROM tasks";
    $result_tasks = mysqli_query($conn, $query);
}else{
    $query = "SELECT * FROM tasks ORDER BY $col";
    $result_tasks = mysqli_query($conn, $query);
}

while ($row = mysqli_fetch_array($result_tasks)){ 
?>
    <tr>
        <td><?php echo $row['title'] ?></td>
        <td><?php echo $row['description'] ?></td>
        <td><?php echo $row['created_at'] ?></td>
        <td>
            <a href="controller/edit_task.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-secondary m-1"><i class="fas fa-pen"></i></a>
            <a href="controller/delete_task.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger m-1"><i class="fas fa-trash"></i></a>
        </td>
    </tr>
<?php }; 

?>

