<?php include 'config.php'; ?>
<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
    $sql = "select * from students join class where students.class= class.cid";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {


    ?>
        <table cellpadding="7px">
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Class</th>
                <th>Phone</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['address'] ?></td>
                        <td><?php echo $row['cname'] ?></td>
                        <td><?php echo $row['phone'] ?></td>
                        <td>
                            <a href='edit.php?eid=<?php echo $row['id'] ?>'>Edit</a>
                            <a href='delete-inline.php?did=<?php echo $row['id'] ?>'>Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php
    } ?>
</div>
</div>
</body>

</html>