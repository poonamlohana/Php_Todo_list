<?php include 'config.php'; ?>
<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
    $editdata = $_GET['eid'];
    $sql = "select * from students where id = {$editdata}";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {

    ?>
        <form class="post-form" action="updatedata.php" method="post">
            <div class="form-group">
                <label>Name</label>
                <?php
                while ($row = mysqli_fetch_array($result)) {


                ?>
                    <input type="hidden" name="sid" value="<?php echo $row['id'] ?>" />
                    <input type="text" name="sname" value="<?php echo $row['name'] ?>" />
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="saddress" value="<?php echo $row['address'] ?>" />
            </div>
            <div class="form-group">
                <label>Class</label>
                <?php
                    $sql1 = "select * from class ";
                    $result1 = mysqli_query($conn, $sql1);
                    if (mysqli_num_rows($result1) > 0) {
                ?>
                    <select name="sclass">
                        <?php
                        while ($row1 = mysqli_fetch_array($result1)) {
                            if($row['class'] == $row1['cid']) {
                                $select = "selected";
                            } else {
                                $select = "";
                            }
                        ?>
                           
                       <option <?php echo  $select ?> value="<?php echo $row1['cid'] ?>"><?php echo $row1['cname'] ?></option>
                       <?php  } ?>

                    </select>
                <?php } ?>
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" name="sphone" value="<?php echo $row['phone'] ?>" />
            </div>
            <input class="submit" type="submit" value="Update" />
        </form>
    <?php  } ?>
</div>
</div>
<?php } ?>
</body>

</html>