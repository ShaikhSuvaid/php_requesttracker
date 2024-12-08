<?php include "../auth/auth.php";?>
<?php
if(isset($_POST["lg"]))
{
    header('location:uslogout.php');
}
if(isset($_POST["tu"]))
{
    header('location:trckus.php');
}
?>
<html>
<head><title>User | Dashboard</title>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div id="container" style="position: relative; left: 100px;bottom: -60;color:#183A1D;height: 40px;width: 90%;box-shadow: 0px 0px 10px 5px #183A1D;border-radius:15px">
<center><h1>Welcome to User Dashboard : <?php echo $_SESSION['email']?> : یوزر ڈیش بورڈ میں خوش آمدید</h1></center>
</div>
<style>
  body {
  background-image: url("imm.png");
  background-repeat: no-repeat;
  background-position: left top;
  background-size: 250px 55px;
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
table{
  min-width: max-content;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th {
    position: sticky;
    top:0;
    text-align: left;
    padding: 10px;
    background: #b3ccff;
}
td {
    text-align: left;
    padding: 10px;
}
th:nth-child(1),
td:nth-child(1){
  position: sticky;
  left: 0;
}
th:nth-child(2),
td:nth-child(2){
  position: sticky;
  left: 60px;
}
th:nth-child(3),
td:nth-child(3){
  position: sticky;
  left: 110px;
}
th:nth-child(4),
td:nth-child(4){
  position: sticky;
  left: 260px;
}

td:nth-child(1),
td:nth-child(2),
td:nth-child(3),
td:nth-child(4){
  background: #80aaff;
}
th:nth-child(1),
th:nth-child(2),
th:nth-child(3),
th:nth-child(4){
  z-index: 2;
}
tr:nth-child(even) {
  background-color: #D6EEEE;}
.table-wrapper {
  max-height: 500px;
  overflow-y: scroll;
  margin: 10px;
  }
  .outer-wrapper{
    border: 1px solid black;
    box-shadow: 0px 0px 3px black;
    margin: 10px;
    border-radius: 5px;
    max-width: fit-content;
  }
</style>
</head>
<body>
<form id="nr" action="reqpg.php" method="post">
<button type="submit" class="btn" style="position: relative; left:50px;bottom: -60;width:100px; height:30px;outline:none;border:none;background-color: #009900;" name="nr">New Request</button>
</form>
<form name="form1" action="" method="post">
<input type="submit" class="btn" style="position: relative; left:200px;bottom: 10;width:105px; height:30px;outline:none;border:none;background-color: #751aff;" name="tu" value="Search Request">
<input type="submit" class="btn" style="position: relative; left:260px;bottom: 10;width:100px; height:30px;outline:none;border:none;background-color: #cc0000;" name="lg" value="Logout">
</form>
<div id="container" style="position: relative; left: 400px;bottom: 30;color:#183A1D;height: 40px;width: 40%;box-shadow: 0px 0px 10px 5px #183A1D;border-radius:15px">
<center><h1>Your Requests...آپ کی درخواستیں</h1></center>
</div>
<div class="outer-wrapper">
<div class="table-wrapper">
<table style="position: relative;bottom: 0;" class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Sr No.</th>
      <th scope="col">View</th>
      <th scope="col">Request Date</th>
      <th scope="col">Request Id</th>
      <th scope="col">Action</th>
      <th scope="col">Request Acceptor</th>
      <th scope="col">Request Handler</th>
      <th scope="col">Status</th>
      <th scope="col">Remarks</th>
      <th scope="col">Name</th>
      <th scope="col">Department</th>
      <th scope="col">City</th>
      <th scope="col">Item Category</th>
      <th scope="col">Quotations</th>
      <th scope="col">Lowest Quote</th>
      <th scope="col">Expected Date</th>
      <th scope="col">Final Vendor</th>
      <th scope="col">PO Amount</th>
    </tr>
  </thead>
<tbody>
<?php
$i=1;
$qry = "SELECT * FROM requests WHERE `email`='$_SESSION[email]'";
$res=mysqli_query($conn,$qry);
$count=(mysqli_num_rows($res));
if ($count > 0) {
  while ($row = mysqli_fetch_array($res)) {
    ?>
    <tr class="table-active">
    <th scope="row"><?php echo $i; ?> <a href="trdt.php?id=<?php echo $row['reqid'];?>"><i class='fas fa-map-marker' style='font-size:15px;color:black;text-shadow:2px 2px 4px #000000'></i></a></th>
    <td><a href="redt.php?id=<?php echo $row['reqid'];?>" class="btn" style="outline:none;border:none;background-color: #009900;color: white;">View</a></td>
    <td><?php echo $row['date'];?></td>    
    <td><?php echo $row['reqid'];?></td>
    <td><?php echo $row['chact'];?></td>
    <td><?php echo $row['chacc'];?></td>
    <td><?php echo $row['chhand'];?></td>
    <td><?php echo $row['chstat'];?></td>
    <td><?php echo $row['remarks'];?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['department'];?></td>
    <td><?php echo $row['city'];?></td>
    <td><?php echo $row['itmcgr'];?></td>
    <td><?php echo $row['quote'];?></td>
    <td><?php echo $row['lquote'];?></td>
    <td><?php echo $row['exdt'];?></td>
    <td><?php echo $row['finven'];?></td>
    <td><?php echo $row['finpay'];?></td>
    </tr>
    <?php $i++;}} else{
    echo "No Request Found!";
  }
?>
</tbody>
</table>
</div>
</div>
</body>
</html>