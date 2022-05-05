<?php include 'config.php'; ?>
<?php
$idedit = $_POST['sid'];
$name = $_POST['sname'];
$address = $_POST['saddress'];
$class = $_POST['sclass'];
$phone = $_POST['sphone'];

$sql="update students set name='{$name}',address='{$address}',class='{$class}',phone='{$phone}' where id= {$idedit}";
$result = mysqli_query($conn, $sql);
header("location: http://localhost/crud/index.php")
?>