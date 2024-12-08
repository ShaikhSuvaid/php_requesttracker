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
<div id="container" style="position: relative;bottom: -40;height: 1050px;width: 100%;box-shadow: 0px 0px 10px 5px #183A1D;border-radius:20px">
<form action="redt.php" method="POST">
<input type="hidden" name="reqid" value="<?=$row['reqid'];?>">
<table style="position: relative; left: 20px;bottom: -8;">
<tr>
<td><strong>Name</strong></td>
<td><input type="text" class="txt" style="background-color: #75a3a3;" value="<?= $row['name']?>" readonly></td>
<td><strong>E-mail Id</strong></td>
<td><input type="email" class="txt" style="background-color: #75a3a3;" value="<?=$row['email']?>" readonly></td>
<td><strong>Contact No</strong></td>
<td><input type="number" class="txt" style="background-color: #75a3a3;" value="<?= $row['contact'] ?>" readonly></td>
</tr>
<tr>
<td><strong>Department</strong></td>
<td><input type="text" class="txt" style="background-color: #75a3a3;" value="<?= $row['dept'] ?>" readonly></td>
<td><strong>Designation</strong></td>
<td><input type="text" class="txt" style="background-color: #75a3a3;" value="<?= $row['designation']?>" readonly></td>
</tr>
<td><strong>Assassa Type</strong></td>
<td><input type="text" class="txt" style="background-color: #75a3a3;" value="<?= $row['assassa']?>" readonly></td>
<td><strong>Department</strong></td>
<td><input type="email" class="txt" style="background-color: #75a3a3;" value="<?=$row['department']?>" readonly></td>
<td><strong>Item Category</strong></td>
<td><input type="text" class="txt" style="background-color: #75a3a3;" value="<?= $row['itmcgr'] ?>" readonly></td>
</tr>
<tr>
<td><strong>Area</strong></td>
<td><input type="text" class="txt" style="background-color: #75a3a3;" value="<?= $row['area'] ?>" readonly></td>
<td><strong>City</strong></td>
<td><input type="text" class="txt" style="background-color: #75a3a3;" value="<?= $row['city']?>" readonly></td>
</tr>
<tr>
<td><strong>Delivery Address</strong></td>
<td><input type="text" class="txxt" value="<?= $row['dadd'] ?>" name="dadd"></td>
</tr>
<tr>
<td><strong>State</strong></td>
<td><input type="text" class="txt" style="background-color: #75a3a3;" value="<?= $row['state']?>" readonly></td>
<td><strong>Region</strong></td>
<td><input type="text" class="txt" style="background-color: #75a3a3;" value="<?= $row['region']?>" readonly></td>
</tr>
<tr>
<td><strong>To_E-mail Id</strong></td>
<td><input type="email" class="txxt" style="background-color: #75a3a3;" value="<?=$row['remail']?>" readonly></td>
</tr>
<tr>
<td><strong>Cc_E-mail Id's</strong></td>
<td><input type="email" class="txxt" style="background-color: #75a3a3;" value="<?=$row['ccemail']?>" readonly></td>
</tr>
<tr>
<td><strong>Details</strong></td>
<td><input type="text" class="txxt" value="<?= $row['details'] ?>" name="details"></td>
</tr>
<tr>
<td><strong>Quotation</strong></td>
<td><input type="text" class="txt" value="<?= $row['quote'] ?>" name="quote"></td>
</tr>
<tr>
<td><strong>Vendor 1</strong></td>
</tr>
<td><strong>Name</strong></td>
<td><input type="text" class="txt" value="<?= $row['vnameone']?>" name="vnameone"></td>
<td><strong>Contact No.</strong></td>
<td><input type="tel" class="txt" value="<?= $row['vphoneone']?>" name="vphoneone"></td>
<td><strong>Quotation Amount</strong></td>
<td><input type="number" class="txt" value="<?= $row['oqa']?>" name="oqa"></td>
</tr>
<tr>
<td><strong>Vendor 2</strong></td>
</tr>
<td><strong>Name</strong></td>
<td><input type="text" class="txt" value="<?= $row['vnametwo']?>" name="vnametwo"></td>
<td><strong>Contact No.</strong></td>
<td><input type="text" class="txt" value="<?= $row['vphonetwo']?>" name="vphonetwo"></td>
<td><strong>Quotation Amount</strong></td>
<td><input type="number" class="txt" value="<?= $row['tqa']?>" name="tqa"></td>
</tr>
<tr>
<td><strong>Vendor 3</strong></td>
</tr>
<td><strong>Name</strong></td>
<td><input type="text" class="txt" value="<?= $row['vnamethree']?>" name="vnamethree"></td>
<td><strong>Contact No.</strong></td>
<td><input type="text" class="txt" value="<?= $row['vphonethree']?>" name="vphonethree"></td>
<td><strong>Quotation Amount</strong></td>
<td><input type="number" class="txt" value="<?= $row['thqa']?>" name="thqa"></td>
</tr>
<tr>
<td><strong>Current Status</strong></td>
<td><input type="text" class="txxt" value="<?= $row['chstat']?>" name="chstat"></td>
</tr>
<tr>
<td><strong>Request Handler</strong></td>
<td><input type="text" class="txt" value="<?= $row['chhand']?>" name="chhand"></td>
</tr>
<tr>
<td><strong>Final Vendor</strong></td>
<td><input type="text" class="txt" value="<?= $row['finven']?>" name="finven"></td>
<td><strong>PO Amount</strong></td>
<td><input type="text" class="txt" value="<?= $row['finpay']?>" name="finpay"></td>
</tr>
</table><br><br>
<table>
<td><a href="dashboard.php" class="btn" style="position: relative; left: 650px;bottom: -4;outline:none;border:none;background-color: #4d4dff;color: white;">Return to Dashboard</a></td>
</table>
<table>
    <tr>
    <center><input type="submit" class="btn" value="UPDATE" style="position: relative; left: -80px;bottom: 30;width:100px; height:30px;outline:none;border:none;background-color: #4d4dff;" name="update"/></center>
    </tr>
</table>
</form>
</div><br><br>
</body>
</html>
<?php

if(isset($_POST['update'])){
    $reqid=$_POST['reqid'];
    $dadd=$_POST['dadd'];
    $details=$_POST['details'];
    $quote=$_POST['quote'];
    $vnameone=$_POST['vnameone'];
    $vphoneone=$_POST['vphoneone'];
    $vnametwo=$_POST['vnametwo'];
    $vphonetwo=$_POST['vphonetwo'];
    $vnamethree=$_POST['vnamethree'];
    $vphonethree=$_POST['vphonethree'];

    $qr="UPDATE requests SET dadd='$dadd', details='$details', quote='$quote', vnameone='$vnameone', vphoneone='$vphoneone', vnametwo='$vnametwo', vphonethree='$vphonethree' WHERE reqid='$reqid'";
    $qr_run=mysqli_query($conn,$qr);

    if($qr_run)
    {
        echo "Form Details Successfully Updated!". '<br>' . '<a href="dashboard.php">Back To Home Page</a>';
    }else{
        echo "Form Details Updation Failed!". '<br>' . '<a href="dashboard.php">Back To Home Page</a>';
    }
}
?>