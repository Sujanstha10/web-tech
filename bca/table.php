<?php
include 'connection.php';
 $query = "SELECT *FROM `students1`";

 $data=$conn->query($query);
 print_r($data);echo('<br>');echo('<br>');

 $data1=mysqli_fetch_row($data);
 print_r($data1);echo('<br>');echo('<br>');



 $data2 = mysqli_fetch_array($data);
 print_r($data2);echo('<br>');echo('<br>');


 $data2= mysqli_fetch_assoc($data);
 print_r($data2);echo('<br>');echo('<br>');
?>


