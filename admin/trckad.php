<?php include "../auth/auth.php";?>
<?php
if(isset($_POST["aj"]))
{
    header('location:dashboard.php');
}
if(isset($_POST["lg"]))
{
    header('location:adlogout.php');
}
?>
<html>
<head><title>Track Your Request</title>
<style>
  body{
    background-color: #808080;
    background-image: url("imm.png");
  background-repeat: no-repeat;
  background-position: left top;
  background-size: 300px 70px;
}
table, th, td {
  border: 1px solid white;
  border-collapse: collapse;
}
th, td {
    text-align: left;
    padding: 8px;
}
tr:nth-child(even) {
  background-color: #D6EEEE;}
  .btn{
    width: 10%;
    height: 4%;
    border: 1px solid red;
    border-radius: 05px;
    padding: 5px 2px 5px 2px;
    box-shadow: 2px 2px 2px 2px;
    margin: 10px 0px 15px 0px;
}
.txt{
    width: 15%;
    height: 5%;
    border: 1px solid black;
    border-radius: 05px;
    padding: 5px 2px 5px 2px;
    margin: 10px 0px 15px 0px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<center><h1>Welcome to Request Tracker</h1></center>
<div class="container">
<form method="post">
<input type="text" class="txt" placeholder="Search Request" name="trck">
<button class="btn" style="outline:none;border:none;background-color: #00b300;" name="search">Search</button>
</form>
</div>
<div>
<table class="table table-striped table-hover">
<?php
  if(isset($_POST['search'])){
    $search = $_POST['trck'];
    $sq="SELECT * FROM `requests` WHERE reqid like '%$search%' OR name like '%$search%'";
    $res=mysqli_query($conn,$sq);
    if($res){
      if(mysqli_num_rows($res)>0){
        echo '<thead>
        <tr>
        <th>Request Id</th>
        <th>Name</th>
        <th>Details</th>
        </tr>
        </thead>';
        while($r=mysqli_fetch_assoc($res)){
          echo '<tbody>
          <tr>
          <td><a href="sdreq.php?data='.$r['reqid'].'">'.$r['reqid'].'</td>
          <td>'.$r['name'].'</td>
          <td>'.$r['details'].'</td>
          </tr>
          </tbody>';
        }
      }
      else{
        echo 'Cannot Search!!, Try something else.';
      }
    }
  }
  ?>
</table>
</div><br><br>
<form name="form1" action="" method="post">
<input type="submit" class="btn" style="position: relative; left:60px;bottom: 7;width:140px;outline:none;border:none;background-color: #ffcc80;" name="aj" value="Return to Dashboard">
<input type="submit" class="btn" style="position: relative; left:110px;bottom: 7;width:100px;outline:none;border:none;background-color: #cc0000;" name="lg" value="Logout">
</form>
</body>
</html>