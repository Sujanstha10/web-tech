<?php
require('connection.php');
$id=$_REQUEST['id'];
$query = "SELECT * from Students1 where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);

print_r($row);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>form</title>
</head>
<body>
    <form method="POST" action="#">
        <label for="">Name:</label>
        <input type="text" name="name" value="<?php echo $row["name"] ?>" /><br>

         <label for="">Email:</label>
        <input type="email" name="email" value="<?php echo $row["email"] ?>"><br><br>

        <label for="">Address:</label>
        <input type="text" name="address" value="<?php echo $row["address"] ?>"/><br>

        <label for="">Gender:</label>
        <input type="radio" name="gender" value="female" <?php echo ($row['gender'] == "female") ? 'checked' : ''?> >Female
        <input type="radio" name="gender" value="male" <?php echo ($row['gender'] == "male") ? 'checked' : ''?>>Male
        <input type="radio" name="gender" value="other" <?php echo ($row['gender'] == "others") ? 'checked' : ''?>>Other<br><br>

        <label for="">Contact:</label>
        <input type="number" name="number" value="<?php echo $row["contact"] ?>"/><br><br>

        <button type="submit" name="submit" >Submit</button>
    </form>


</body>
</html>