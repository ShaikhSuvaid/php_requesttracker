<?php include "../auth/auth.php";?>
<?php
if(isset($_POST["ru"]))
{
  header('location: regusad.php');
}
if(isset($_POST["r"]))
{
  header('location: mdyreqs.php');
}
if(isset($_POST["lg"]))
{
  header('location: adlogout.php');
}
if(isset($_POST["ta"]))
{
    header('location:trckad.php');
}
?>
<html>
<head>
<title>Admin | Dashboard</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<body>
<div id="container" style="position: relative; left: 100px;bottom: -60;color:#183A1D;height: 40px;width: 90%;box-shadow: 0px 0px 10px 5px #183A1D;border-radius:15px">
<center><h1>Welcome to Admin Dashboard : <?php echo $_SESSION['email']?> : ایڈمن ڈیش بورڈ میں خوش آمدید</h1></center>
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
    top: 0;
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
td:nth-child(4){
  position: sticky;
  left: 210px;
}
td:nth-child(1),
td:nth-child(2),
td:nth-child(4) {
  background: #80aaff;
}
th:nth-child(1),
th:nth-child(2),
th:nth-child(3){
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
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
<form name="form1" action="" method="post">
<input type="submit" class="btn" style="position: relative; left:50px;bottom: -60;width:120px; height:30px;outline:none;border:none;background-color: #00b300;" name="ru" value="Registered Users">
<input type="submit" class="btn" style="position: relative; left:70px;bottom: -60;width:120px; height:30px;outline:none;border:none;background-color: #009900;" name="ta" value="Search Request">
<input type="submit" class="btn" style="position: relative; left:100px;bottom: -60;width:100px; height:30px;outline:none;border:none;background-color: #cc0000;" name="lg" value="Logout">
</form>
<div id="container" style="position: relative; left: 400px;bottom: -40;color:#183A1D;height: 40px;width: 40%;box-shadow: 0px 0px 10px 5px #183A1D;border-radius:15px">
<center><h1>All Requests...تمام درخواستیں</h1></center><br><br>
</div><br><br><br><br>
<div class="outer-wrapper">
<div class="table-wrapper">
<table style="position: relative;bottom: -20;" class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Sr No.</th>
      <th scope="col">Request Date</th>
      <th scope="col">Request Id</th>
      <th scope="col">Action</th>
      <th scope="col">Request Acceptor</th>
      <th scope="col">Request Handler</th>
      <th scope="col">Status</th>
      <th scope="col">Name</th>
      <th scope="col">Contact No.</th>
      <th scope="col">Department</th>
      <th scope="col">City</th>
      <th scope="col">Item Category</th>
      <th scope="col">Quotations</th>
      <th scope="col">Lowest Quote</th>
      <th scope="col">Expected Date</th>
      <th scope="col">View/Edit</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
<tbody>
<?php
$i=1;
$query="SELECT * FROM requests";
$res=mysqli_query($conn,$query);
$count=(mysqli_num_rows($res));
if ($count > 0) {
  while ($row = mysqli_fetch_array($res)) {
    ?>
    <tr class="table-active">
    <th scope="row"><?php echo $i; ?> <a href="trdt.php?id=<?php echo $row['reqid'];?>"><i class='fas fa-map-marker' style='font-size:15px;color:black;text-shadow:2px 2px 4px #000000'></i></a></th>
    <td><?php echo $row['date'];?></td>
    <input type="hidden" name="reqid" value="<?php echo $row['reqid'];?>">
    <td><?php echo $row['reqid'];?></td>
    <td><?php echo $row['chact'];?></td>
    <td><?php echo $row['chacc'];?></td>
    <td><?php echo $row['chhand'];?></td>
    <td><?php echo $row['chstat'];?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['contact'];?></td>
    <td><?php echo $row['department'];?></td>
    <td><?php echo $row['city'];?></td>
    <td><?php echo $row['itmcgr'];?></td>
    <td><?php echo $row['quote'];?></td>
    <td><?php echo $row['lquote'];?></td>
    <td><?php echo $row['exdt'];?></td>
    <td><center><a href="redt.php?id=<?php echo $row['reqid'];?>" class="btn" style="outline:none;border:none;background-color: #009900;color: white;">View</a></center></td>
    <td><a href="dbdata.php?id=<?php echo $row['reqid'];?>" class="btn" style="outline:none;border:none;background-color: #004d99;color: white;">Update</a></td>
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