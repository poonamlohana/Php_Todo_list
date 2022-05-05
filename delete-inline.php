<?php include 'config.php'; ?>
<?php
$deletedata = $_GET['did'];
$sql = "delete from students where id = {$deletedata}";
$result = mysqli_query($conn, $sql);
header("location: http://localhost/crud/index.php");

?>