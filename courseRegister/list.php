<?php
//Header
include_once "db_connect.php";
include_once "header.php";
?>

<!-- Start Content -->
<h4>List of Users</h4>

<table class ="table table-bordered">
<thead class="table-dark">
<th>ID</th>
<th>Username</th>
<th>Fullname</th>
<th>Status</th>
<th>Action</th>
</thead>
<tbody>

    <?php
    $sql = "SELECT * from tblUser";
    $result = mysqli_query($conn,$sql);

    while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['username'];?></td>
        <td><?php echo $row['fullname'];?></td>
        <td><?php echo $row['isActive'] ? 'Active' : 'Inactive';?></td>
        <td>
            <a href="update.php" class="btn btn-primary"> Update </a> &nbsp;
            <a href="delete.php" class="btn btn-danger"> Delete </a></td>
    </tr>

    <?php }  ?>


</tbody>

</table>

<?php
include_once "footer.php";
?>