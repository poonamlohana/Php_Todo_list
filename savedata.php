<?php include 'config.php'; ?>
<?php
$name = $_POST['sname'];
$address = $_POST['saddress'];
$class = $_POST['sclass'];
$phone = $_POST['sphone'];


$sql = "insert into students (name,address,class,phone)values('{$name}','{$address}','{$class}','{$phone}')";
$result = mysqli_query($conn, $sql);
header("location: http://localhost/crud/index.php");
?>