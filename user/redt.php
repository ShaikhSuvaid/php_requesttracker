<?php include "../auth/auth.php";?>
<html>
<head>
<title>Request Details</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudfare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/reset.css" rel="stylesheet" type="text/css">
<style>
body{
    background-color: #808080;
    background-image: url("imm.png");
  background-repeat: no-repeat;
  background-position: left top;
  background-size: 300px 70px;
}
.txt{
    width: 100%;
    height: 5%;
    border: 1px solid green;
    border-radius: 05px;
    padding: 5px 2px 5px 2px;
    margin: 10px 0px 15px 0px;
}
.txxt{
    width: 300%;
    height: 5%;
    border: 1px solid green;
    border-radius: 05px;
    padding: 5px 2px 5px 2px;
    margin: 10px 0px 15px 0px;
}
.btn{
    width: 20%;
    height: 5%;
    border: 1px solid red;
    border-radius: 05px;
    padding: 5px 2px 5px 2px;
    box-shadow: 2px 2px 2px 2px;
    margin: 10px 0px 15px 0px;
}
</style>
</head>
<body>
<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="SELECT * FROM requests WHERE reqid='$id'";

    $query_r=mysqli_query($conn,$query);

    if(mysqli_num_rows($query_r)>0){
        foreach($query_r as $row){
            ?>
            <div id="container" style="position: relative; left: 300px;bottom: -10;color:#183A1D;height: 40px;width: 60%;box-shadow: 0px 0px 10px 5px #183A1D;border-radius:15px">
        <center><h1><strong>Request ID : <?=$row['reqid'];?> : درخواست کی شناخت</strong></h1></center></div>
        
            <?php
        }
    }else{
        echo "No Record Found";
    }
}

?>
<div id="container" style="position: relative;bottom: -30;height: 850px;width: 100%;box-shadow: 0px 0px 10px 5px #183A1D;border-radius:20px">
<table style="position: relative; left: 20px;bottom: -8;">
<tr>
<td><strong>Name</strong></td>
<td><input type="text" class="txt" value="<?= $row['name']?>" readonly></td>
<td><strong>E-mail Id</strong></td>
<td><input type="email" class="txt" value="<?=$row['email']?>" readonly></td>
<td><strong>Contact No</strong></td>
<td><input type="number" class="txt" value="<?= $row['contact'] ?>" readonly></td>
</tr>
<tr>
<td><strong>Department</strong></td>
<td><input type="text" class="txt" value="<?= $row['dept'] ?>" readonly></td>
<td><strong>Designation</strong></td>
<td><input type="text" class="txt" value="<?= $row['designation']?>" readonly></td>
</tr>
<td><strong>Assassa Type</strong></td>
<td><input type="text" class="txt" value="<?= $row['assassa']?>" readonly></td>
<td><strong>Department</strong></td>
<td><input type="email" class="txt" value="<?=$row['department']?>" readonly></td>
<td><strong>Item Category</strong></td>
<td><input type="text" class="txt" value="<?= $row['itmcgr'] ?>" readonly></td>
</tr>
<tr>
<td><strong>Area</strong></td>
<td><input type="text" class="txt" value="<?= $row['area'] ?>" readonly></td>
<td><strong>City</strong></td>
<td><input type="text" class="txt" value="<?= $row['city']?>" readonly></td>
</tr>
<tr>
<td><strong>Delivery Address</strong></td>
<td><input type="text" class="txxt" value="<?= $row['dadd'] ?>" readonly></td>
</tr>
<tr>
<td><strong>State</strong></td>
<td><input type="text" class="txt" value="<?= $row['state']?>" readonly></td>
<td><strong>Region</strong></td>
<td><input type="text" class="txt" value="<?= $row['region']?>" readonly></td>
</tr>
<tr>
<td><strong>To_E-mail Id</strong></td>
<td><input type="email" class="txxt" value="<?=$row['remail']?>" readonly></td>
</tr>
<tr>
<td><strong>Cc_E-mail Id's</strong></td>
<td><input type="email" class="txxt" value="<?=$row['ccemail']?>" readonly></td>
</tr>
<tr>
<td><strong>Details</strong></td>
<td><input type="text" class="txxt" value="<?= $row['details'] ?>" readonly></td>
</tr>
<tr>
<td><strong>Quotation</strong></td>
<td><input type="text" class="txt" value="<?= $row['quote'] ?>" readonly></td>
</tr>
<tr>
<td><strong>Vendor 1</strong></td>
</tr>
<td><strong>Name</strong></td>
<td><input type="text" class="txt" value="<?= $row['vnameone']?>" readonly></td>
<td><strong>Contact No.</strong></td>
<td><input type="tel" class="txt" value="<?= $row['vphoneone']?>" readonly></td>
<td><strong>Quotation Amount</strong></td>
<td><input type="number" class="txt" value="<?= $row['oqa']?>" name="oqa"></td>
</tr>
<tr>
<td><strong>Vendor 2</strong></td>
</tr>
<td><strong>Name</strong></td>
<td><input type="text" class="txt" value="<?= $row['vnametwo']?>" readonly></td>
<td><strong>Contact No.</strong></td>
<td><input type="text" class="txt" value="<?= $row['vphonetwo']?>" readonly></td>
<td><strong>Quotation Amount</strong></td>
<td><input type="number" class="txt" value="<?= $row['oqa']?>" name="oqa"></td>
</tr>
<tr>
<td><strong>Vendor 3</strong></td>
</tr>
<td><strong>Name</strong></td>
<td><input type="text" class="txt" value="<?= $row['vnamethree']?>" readonly></td>
<td><strong>Contact No.</strong></td>
<td><input type="text" class="txt" value="<?= $row['vphonethree']?>" readonly></td>
<td><strong>Quotation Amount</strong></td>
<td><input type="number" class="txt" value="<?= $row['oqa']?>" name="oqa"></td>
</tr>
</table>
<td><a href="dashboard.php" class="btn" style="position: relative; left: 650px;bottom: 1;outline:none;border:none;background-color: #4d4dff;color: white;">Return to Dashboard</a></td>
</div><br><br>
</body>
</html>