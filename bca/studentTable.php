<?php
    include 'connection.php';
    $query = "SELECT *FROM `students1`";

    $data=$conn->query($query);

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<style>
    .edit{
        color:green;
    }
    .delete{
        color:red;
    }
</style>
<body>
    <table class="table" border=2px>
        <thead>
            <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Number</th>
                <th> Gender </th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>   
        </tbody>
            <?php
                while($res= mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $res['id'] ?></td>
                <td><?php echo $res['name'] ?></td>
                <td><?php echo $res['address'] ?></td>
                <td><?php echo $res['email'] ?></td>
                <td><?php echo $res['contact'] ?></td>
                <td><?php echo $res['gender'] ?></td>
                 <td> <a class="edit" href="studentUpdate.php?id=<?php echo $res['id']; ?>"> Edit </a> </td>
                <td> <a class="delete" href="studentDelete.php?id=<?php echo $res['id']; ?>"> Delete </a> </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>