<?php

include "connection.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn,"DELETE FROM Students1 WHERE Students1.id = '$id'"); // delete query


// if($del)
// {
//     mysqli_close($db); // Close connection
//     header("location:table.php"); // redirects to all records page
//     exit;  
// }
// else
// {
//     echo "Error deleting record"; // display error message if not delete
// }
?>
