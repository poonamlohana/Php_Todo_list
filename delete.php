<?php include 'config.php'; ?>
<?php include 'header.php'; ?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
    <?php
    if (isset($_POST['deletebtn'])) {
    $delete = $_POST['sid'];
        $sql = "delete from students where id = {$delete}";
        $result = mysqli_query($conn, $sql);
        header("location: http://localhost/crud/index.php");
    }

    ?>
</div>
</div>
</body>

</html>