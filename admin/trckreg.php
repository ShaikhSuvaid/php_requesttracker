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
<head><title>Track Users</title>
<style>
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
body{
    background-color: #808080;
    background-image: url("imm.png");
  background-repeat: no-repeat;
  background-position: left top;
  background-size: 300px 70px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<center><h1>Welcome to Users Database</h1></center>
<div class="container">
<form method="post">
<input type="text" class="txt" placeholder="Search User" name="trck">
<button class="btn" style="position: relative;bottom: 2;outline:none;border:none;background-color: #00b300;" name="srch">Search</button>
</form>
</div>
<div>
<table class="table table-striped table-hover">
  <?php
  if(isset($_POST['srch'])){
    $srch = $_POST['trck'];
    $sq = "SELECT * FROM `regus` WHERE dept like '%$srch%' OR name like '%$srch%'";
    $re = mysqli_query($conn, $sq);
    if($re){
      if(mysqli_num_rows($re)>0){
        echo '<thead>
        <tr>
        <th>Name</th>
        <th>Department</th>
        </tr>
        </thead>';
        while($rw=mysqli_fetch_assoc($re)){
        echo '<tbody>
        <tr>
        <td>'.$rw['name'].'</td>
        <td>'.$rw['dept'].'</td>
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
<input type="submit" name="aj" class="btn" style="position: relative; left:30px;bottom: 7;width:140px;outline:none;border:none;background-color: #ffcc80;" value="Return to Dashboard">
<input type="submit" name="lg" class="btn" style="position: relative; left:70px;bottom: 7;width:140px;outline:none;border:none;background-color: #cc0000;" value="Logout">
</form>
</body>
</html>