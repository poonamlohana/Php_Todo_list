<?php include 'config.php'; ?>
<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <?php
            $sql = "select * from class ";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
            ?>
                <select name="sclass">
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <option value="<?php echo $row['cid'] ?>"><?php echo $row['cname'] ?></option>

                    <?php } ?>
                </select>
            <?php } ?>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <input class="submit" type="submit" value="Save" />
    </form>
</div>
</div>
</body>

</html>