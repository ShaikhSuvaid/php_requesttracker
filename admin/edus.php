<?php include "../auth/auth.php";?>
<?php require('dbconn.php'); ?>
<html>
    <head>
        <title>Edit User</title>
        <link rel="stylesheet" href="stylee.css">
    </head>
    <body>
        <header>
            <h2>Edit User</h2>
        </header>
        <?php
        $name = $_GET['name'];
        $qry = "SELECT * FROM regus WHERE name='$name'";
        $rs = mysqli_query($conn, $qry);
        $dt = mysqli_fetch_array($rs);
        ?>
        <input type="hidden" name="name" value="<?php echo $name;?>">
            <div class="oreh">
                <div class="form-box">
                        <form id="register" class="input-grp" method="post" action="updus.php">
                        <input type="text" class="input-field" placeholder="Name" name="name" value="<?php echo $dt['name'];?>" required>
                        <input type="email" class="input-field" placeholder="E-mail I'd" name="email" value="<?php echo $dt['email'];?>" required>
                        <input type="number" class="input-field" placeholder="Contact No." name="contact" value="<?php echo $dt['contact'];?>" required>
                        <input type="text" class="input-field" placeholder="Department" name="dept" value="<?php echo $dt['dept'];?>" required>
                        <input type="text" class="input-field" placeholder="Designation" name="designation" value="<?php echo $dt['designation'];?>" required>
                        <input type="text" class="input-field" placeholder="Office Location" name="offlocation" value="<?php echo $dt['offlocation'];?>" required>
                        <input type="password" class="input-field" placeholder="Password" name="password" required>
                        <input type="checkbox" class="chech-box"><span>Are you sure you want to update details.</span>
                    </form>
                </div>
                <div class="button-box">
                        <div id="bn"></div>
                        <button type="button">Cancel</button>
                        <button type="button">Update</button>
                    </div>
            </div>
            
    </body>
</html>