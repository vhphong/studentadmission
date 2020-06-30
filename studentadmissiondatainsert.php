<?php
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $class = $_POST['class'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];

    $dbconnect = mysqli_connect('localhost', 'root', '','dbcourse');
    $sql = mysqli_query($dbconnect, "INSERT INTO admission(sid, name, class, dob, address)
                                     VALUES('', '$name', '$class', '$dob', '$address')");
    if ($sql){
      echo "Data inserted successfully";
    }
    else {
      echo "Failed insertion";
    }
  }
 ?>
