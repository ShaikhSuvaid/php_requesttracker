<?php include "../auth/auth.php";?>
<html>
<head>
<title>Request Tracker</title>
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
.btn{
    width: 20%;
    height: 5%;
    border: 1px solid red;
    border-radius: 05px;
    padding: 5px 2px 5px 2px;
    box-shadow: 2px 2px 2px 2px;
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

<?php

if(isset($_POST['submit'])){
    $reqid=$_POST['reqid'];
    $exdt=$_POST['exdt'];
    $chacc=$_POST['chacc'];
    $hide=1;

    $qr="UPDATE requests SET exdt='$exdt', chacc='$chacc' WHERE reqid='$reqid'";
    $qr_run=mysqli_query($conn,$qr);

    if($qr_run)
    {
        echo "<script>alert('Details Submitted')
                window.location.href='dashboard.php';
                </script>";
    }else{
        echo "<script>alert('Details Not Submitted')
                window.location.href='dashboard.php';
                </script>";
    }
}

if(isset($_POST['insert'])){
    $reqid=$_POST['reqid'];
    $finven=$_POST['finven'];
    $finpay=$_POST['finpay'];
    $cosav=$_POST['cosav'];
    $cosavba=$_POST['cosavba'];
    $folpat=$_POST['folpat'];
    $hide=1;

    $qry="UPDATE requests SET finven='$finven', finpay='$finpay', cosav='$cosav', cosavba='$cosavba', folpat='$folpat' WHERE reqid='$reqid'";
    $qry_run=mysqli_query($conn,$qry);

    if($qry_run)
    {
        echo "<script>alert('Details Inserted')
                window.location.href='dashboard.php';
                </script>";
    }else{
        echo "<script>alert('Details Not Inserted')
                window.location.href='dashboard.php';
                </script>";
    }
}



if(isset($_POST['post'])){
    $reqid=$_POST['reqid'];
    $updt=$_POST['updt'];
    $chstat=$_POST['chstat'];
    $chhand=$_POST['chhand'];
    $remarks=$_POST['remarks'];
    $hide=1;

    $q="INSERT INTO remarks (reqid,chhand,chstat,remarks,updt) VALUES ('$reqid', '$chhand', '$chstat', '$remarks', '$updt')";
    $q_run=mysqli_query($conn,$q);

    if($q_run)
    {
        echo "<script>alert('Remarks Updated')
                window.location.href='dashboard.php';
                </script>";
    }else{
        echo "<script>alert('Remarks Not Updated')
                window.location.href='dashboard.php';
                </script>";
    }
}
if(isset($_POST['post'])){
    $reqid=$_POST['reqid'];
    $chstat=$_POST['chstat'];
    $chhand=$_POST['chhand'];
    $remarks=$_POST['remarks'];
    $hide=1;
    
    $qry="UPDATE requests SET chstat='$chstat', chhand='$chhand', remarks='$remarks' WHERE reqid='$reqid'";
    $qry_run=mysqli_query($conn,$qry);

    if($qry_run)
    {
        echo "<script>alert('Status Updated')
                window.location.href='dashboard.php';
                </script>";
    }else{
        echo "<script>alert('Status Not Updated')
                window.location.href='dashboard.php';
                </script>";
    }
}
?>
<?php if(!isset($hide)){?>
<div id="container" style="position: relative;bottom: -30;background-color: #ffff80;height: 850px;width: 80%;box-shadow: 0px 0px 10px 5px #183A1D;border-radius:20px">
<div class="page-content" style="position: relative; left: 30px;bottom: -8;color:#183A1D;font-size:24px">Request Details..</div>
<table style="position: relative; left: 20px;bottom: -8;">
<tr>
<td><strong>Name</strong></td>
<td><input type="text" class="txt" value="<?= $row['name']?>" readonly></td>
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
<td><input type="number" class="txt" value="<?= $row['oqa']?>" readonly></td>
</tr>
<tr>
<td><strong>Vendor 2</strong></td>
</tr>
<td><strong>Name</strong></td>
<td><input type="text" class="txt" value="<?= $row['vnametwo']?>" readonly></td>
<td><strong>Contact No.</strong></td>
<td><input type="text" class="txt" value="<?= $row['vphonetwo']?>" readonly></td>
<td><strong>Quotation Amount</strong></td>
<td><input type="number" class="txt" value="<?= $row['tqa']?>" readonly></td>
</tr>
<tr>
<td><strong>Vendor 3</strong></td>
</tr>
<td><strong>Name</strong></td>
<td><input type="text" class="txt" value="<?= $row['vnamethree']?>" readonly></td>
<td><strong>Contact No.</strong></td>
<td><input type="text" class="txt" value="<?= $row['vphonethree']?>" readonly></td>
<td><strong>Quotation Amount</strong></td>
<td><input type="number" class="txt" value="<?= $row['thqa']?>" readonly></td>
</tr>
</table>

</div><br><br>
<div id="container" style="position: relative;bottom: -30;height: 170px;background-color: #ffff80;width: 50%;box-shadow: 0px 0px 10px 5px #183A1D;border-radius:20px">
<div class="page-content" style="position: relative; left: 30px;bottom: -8;color:#183A1D;font-size:24px">Request Acceptance..</div>
<form action="dbdata.php" method="POST">
    <table>
        <tr>
        <td><strong>Action</strong></td>
        <td><select class="txt" name="chact">
        <option value="Accepted">Accept</option>
        <option value="Rejected">Reject</option>
        <td><strong>Expected Date</strong></td>
        <td><input type="date" name="exdt" class="txt" ></td>
        <br>
        <td><strong>Request Acceptor</strong></td>
    <td><select class="txt" name="chacc">
    <option value="Pending">--select--</option>
      <option value="Mahamood Jhopadi">Mahamood Jhopadi</option>
      <option value="Suvaid Shaikh">Suvaid Shaikh</option>
      <option value="Rafiq Chouhan">Rafiq Chouhan</option>
    </td>
        </tr>
    </table>
    <table>
        <tr>
        <input type="submit" class="btn" value="SEND MAIL" style="position: relative;left: 10; bottom: 0;width:100px; height:30px;outline:none;border:none;background-color: #4d94ff;" name="submit"/>
        <center><input type="submit" class="btn" value="INSERT" style="position: relative;bottom: 55;width:100px; height:30px;outline:none;border:none;background-color: #4d4dff;" name="submit"/></center>
        </tr>
    </table><br><br><br>
</from>
</div>
</div><br><br>
<div id="container" style="position: relative;bottom: -30;height: 420px;background-color: #ffff80;width: 50%;box-shadow: 0px 0px 10px 5px #183A1D;border-radius:20px">
<div class="page-content" style="position: relative; left: 30px;bottom: -8;color:#183A1D;font-size:24px">Request Tracking..</div>
<form action="dbdata.php" method="POST">
    <input type="hidden" name="reqid" value="<?=$row['reqid'];?>">
    <table><br>
    <tr>
    <td><strong>Update Date</strong></td>
    <td><input type="date" name="updt" class="txt" ></td>
    </tr>
    <tr>
    <td><strong>Request Handler</strong></td>
    <td><select class="txt" name="chhand">
    <option value="Pending">--select--</option>
      <option value="Mahamood Jhopadi">Mahamood Jhopadi</option>
      <option value="Suvaid Shaikh">Suvaid Shaikh</option>
      <option value="Rafiq Chouhan">Rafiq Chouhan</option>
    </td>
    <td><strong>Status</strong></td>
    <td>
      <select class="txt" name="chstat">
      <option value="2.1 - Need to discuss with requestor">Need to discuss with requestor</option>
      <option value="2.2 - BOQ Finalised">BOQ Finalised</option>
      <option value="3.1 - Details shared with Technical Team">Details shared with Technical Team</option>
      <option value="3.2 - Awaiting approval from Technical Team">Awaiting approval from Technical Team</option>
      <option value="3.3 - Technical Team approval received">Technical Team approval received</option>
      <option value="3.4 - BOQ finalised by Technical Team">BOQ finalised by Technical Team</option>
      <option value="4.1 - Details/BOQ shared with vendors">Details/BOQ shared with vendors</option>
      <option value="4.2 - Quotations awaited">Quotations awaited</option>
      <option value="4.3 - Awaiting quotations from other vendors">Awaiting quotations from other vendors</option>
      <option value="4.4 - Quotations Received">Quotations Received</option>
      <option value="4.5 - Verifying quotations with Requestor">Verifying quotations with Requestor</option>
      <option value="4.6 - Verifying quotations with Vendor">Verifying quotations with Vendor</option>
      <option value="4.7 - Quotations verified">Quotations verified</option>
      <option value="4.8 - Negotiating">Negotiating</option>
      <option value="5.1 - Comparison Prepared">Comparison Prepared</option>
      <option value="5.2 - Comparison shared with requestor">Comparison shared with requestor</option>
      <option value="5.3 - Comparison shared with requestor & technical team">Comparison shared with requestor & technical team</option>
      <option value="6.1 - Quotations Approved from Purchase Majlis">Quotations Approved from Purchase Majlis</option>
      <option value="6.2 - Awaiting approval from requestor">Awaiting approval from requestor</option>
      <option value="6.3 - Awaiting approval from Nigran/HOD/Region/State">Awaiting approval from Nigran/HOD/Region/State</option>
      <option value="6.4 - Awaiting approval from Technical Team">Awaiting approval from Technical Team</option>
      <option value="6.5 - Awaiting approval from Maliyat">Awaiting approval from Maliyat</option>
      <option value="6.6 - Approval received from requestor">Approval received from requestor</option>
      <option value="6.7 - Approval received from Nigran/HOD/Region/State">Approval received from Nigran/HOD/Region/State</option>
      <option value="6.8 - Approval received from Technical Team">Approval received from Technical Team</option>
      <option value="6.9 - Approval received from Maliyat">Approval received from Maliyat</option>
      <option value="7.1 - Awaiting Billing & Delivery Details">Awaiting Billing & Delivery Details</option>
      <option value="7.2 - Billing & Delivery Details Received">Billing & Delivery Details Received</option>
      <option value="7.3 - Order Confirmed/Placed with vendor">Order Confirmed/Placed with vendor</option>
      <option value="7.4 - PO to be prepared">PO to be prepared</option>
      <option value="7.5 - PO ready for authorised signatory">PO ready for authorised signatory</option>
      <option value="7.6 - PO to be shared for signature">PO to be sharedfor signature</option>
      <option value="7.7 - Signed PO received">Signed PO received</option>
      <option value="7.8 - Signed PO share with vendor">Signed PO share with vendor</option>
      <option value="7.9 - Requested vendor for PI">Requested vendor for PI</option>
      <option value="7.10 - Vendor initiated delivery">Vendor initiated delivery</option>
      <option value="7.11 - Vendor started the work">Vendor started the work</option>
      <option value="8.1 - Awaiting for PI">Awaiting for PI</option>
      <option value="8.2 - PI Received">PI Received</option>
      <option value="8.3 - PI shared with Requestor/Maliyat">PI shared with Requestor/Maliyat</option>
      <option value="8.4 - Waiting for advance payment">Waiting for advance payment</option>
      <option value="8.5 - Advance payment done">Advance payment done</option>
      <option value="8.6 - Awaiting for advance payment details from maliyat">Awaiting for advance payment details from maliyat</option>
      <option value="8.7 - Payment details shared with vendor">Payment details shared with vendor</option>
      <option value="8.8 - Vendor initiated delivery">Vendor initiated delivery</option>
      <option value="8.9 - Vendor started the work">Vendor started the work</option>
      <option value="9.1 - Delivery in process">Delivery in process</option>
      <option value="9.2 - Work in process">Work in process</option>
      <option value="9.3 - Material Delivered">Material Delivered</option>
      <option value="9.4 - Work Completed">Work Completed</option>
      <option value="10.1 - Invoice Received">Invoice Received</option>
      <option value="10.2 - Invoice Shared with Maliyat">Invoice Shared with Maliyat</option>
      <option value="10.3 - Final Payment Done">Final Payment Done</option>
      <option value="11.1 - Request Cancelled">Request Cancel</option>
      <option value="11.2 - Request Successfully Closed">Request Successfully Closed</option>
      <option value="11.3 - Request Approved & Closed">Request Approved & Closed</option>
      <option value="11.4 - Request Rejected">Request Rejected</option>
      </select>
    </td>
    </tr>
    </table><br><br>
    <div class="comment-input" style="height: 120px; position: relative; left:70px;bottom: 10;width: 500px;border-radius:10px;box-shadow:0px 0px 5px 2px #183A1D">
    <center><textarea class="txt" name="remarks" placeholder="Drop Remarks/Comments Here.." style="width:500px; height:100px;"></textarea></center><br><br>
    <center><button type="submit" name="post" class="btn" style="position: relative; left:10px;bottom: 7;width:150px; height:30px;outline:none;border:none;background-color: #ff9900;">STATUS UPDATE</button></center><br>
    </div>
    <br><br><br><br>
</form>
</div>
</div><br><br>
<div id="container" style="position: relative; left:700px;bottom: 630;height: 250px;background-color: #ffff80;width: 45%;box-shadow: 0px 0px 10px 5px #183A1D;border-radius:20px">
    <div class="page-content" style="position: relative; left: 30px;bottom: -8;color:#183A1D;font-size:24px">Order Details..</div>
    <div id="demo"></div><br>
    <form action="dbdata.php" method="POST">
    <input type="hidden" name="reqid" value="<?=$row['reqid'];?>">
    <table>
    <tr>
        <td><strong>Final Vendor</strong></td>
        <td><input type="text" name="finven" class="txt"></td>
        <td><strong>PO Amount</strong></td>
        <td><input type="text" name="finpay" class="txt" ></td>
        </tr>
    <tr>
        <td><strong>Cost Saving</strong></td>
        <td><input type="text" name="cosav" class="txt"></td>
        <td><strong>Cost Saving Base</strong></td>
        <td><input type="text" name="cosavba" class="txt" ></td>
    </tr><tr>
        <td><strong>Folder Path</strong></td>
        <td><input type="text" name="folpat" class="txt" ></td>
    </tr>
    </table>
    <table>
        <tr>
        <center><input type="submit" class="btn" value="SAVE" style="width:100px;position: relative;bottom: 20; height:30px;outline:none;border:none;background-color: #ff0000;" name="insert"/></center>
        </tr>
    </table>
    <table>
<tr><a href="dashboard.php" class="btn" style="position: relative;bottom: -500;outline:none;border:none;background-color: #4d4dff;color: white;">Return to Dashboard</a></tr>
</table>
    </form>
    </div>
</div>
</div>
<?php } ?>
</body>
</html>
