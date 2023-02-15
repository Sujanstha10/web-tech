<?php
    include 'connection.php';

    if(isset($_POST['submit'])){
            $studentName=$_POST['name'];
            $studentEmail=$_POST['email'];
            $studentNumber=$_POST['number'];
            $studentAddress=$_POST['address'];
            $studentGender=$_POST['gender'];


            echo $studentName;
            echo $studentEmail;
            echo $studentNumber;
            echo $studentAddress;
            echo $studentGender;

    


        $query= "INSERT INTO `students1` (`name`,`email`,`address`,`contact`,`gender`) 
                VALUES ('$studentName','$studentEmail','$studentAddress','$studentNumber','$studentGender')";

        if(mysqli_query($conn,$query))
        {
        echo "<script>alert('New record inserted')</script>";
        }
        else
        {
            echo "error".mysqli_error($conn);
        }
        }
        mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>form</title>
</head>
<body>
    <form method="POST" action="#">
        <label for="">Name:</label>
        <input type="text" name="name"><br><br>

         <label for="">Email:</label>
        <input type="email" name="email"><br><br>

        <label for="">Address:</label>
        <input type="text" name="address"><br><br>

        <label for="">Gender:</label>
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other<br><br>

        <label for="">Contact:</label>
        <input type="number" name="number"><br><br>

        <button type="submit" name="submit">Submit</button>
    </form>


</body>
</html>