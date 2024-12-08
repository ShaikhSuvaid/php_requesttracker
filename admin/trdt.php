<?php include "../auth/auth.php";?>
<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="SELECT * FROM requests WHERE reqid='$id'";

    $query_r=mysqli_query($conn,$query);

    if(mysqli_num_rows($query_r)>0){
        foreach($query_r as $row){
            ?>
            <div id="container" style="position: relative; left: 430px;bottom: -10;color:#183A1D;height: 40px;width: 40%;box-shadow: 0px 0px 10px 5px #183A1D;border-radius:15px">
        <center><h1><strong>Track Request</strong></h1></center></div>
            <div id="container" style="position: relative; left: 300px;bottom: -10;color:#183A1D;height: 40px;width: 60%;box-shadow: 0px 0px 10px 5px #183A1D;border-radius:15px">
        <center><h1><strong>Request ID : <?=$row['reqid'];?> : درخواست کی شناخت</strong></h1></center></div>
        
            <?php
        }
    }else{
        echo "No Record Found";
    }
}

?>
<html>
<head>
<title>Track Request</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<body>
<style>
  body {
    background-color: #808080;
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
table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
}
th, td {
    text-align: left;
    padding: 8px;
}
tr:nth-child(even) {
  background-color: #D6EEEE;}
</style>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<br><br><br><br><br><br>
<table style="position: relative;bottom: 40;" class="table table-striped table-hover">
<thead>
    <tr>
        <th scope="col">Status Date</th>
        <th scope="col">Status</th>
        <th scope="col">Request Handler</th>
        <th scope="col">Remarks</th>
        </tr>
</thead>
<tbody>
<?php
if(isset($_GET['id'])){
$id=$_GET['id'];
$i=1;
$qry = "SELECT * FROM remarks WHERE reqid='$id' Order By crdt DESC";
$res=mysqli_query($conn,$qry);
$count=(mysqli_num_rows($res));
if ($count > 0) {
  while ($row = mysqli_fetch_array($res)) {
    ?>
    <tr class="table-active">
    <td><?php echo $row['updt'];?></td>    
    <td><?php echo $row['chstat'];?></td>
    <td><?php echo $row['chhand'];?></td>
    <td><?php echo $row['remarks'];?></td>
    </tr>
    <?php $i++;}} else{
    echo "Request Pending";
  }}
?>
</tbody>
</table>
<td><a href="dashboard.php" class="btn" style="position: relative; left: 650px;bottom: 1;outline:none;border:none;background-color: #4d4dff;color: white;">Return to Dashboard</a></td>
</body>
</html>