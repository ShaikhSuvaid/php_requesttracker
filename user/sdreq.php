<?php include "../auth/auth.php";?>
<?php
if(isset($_POST["rd"]))
{header('location:dashboard.php');}
if(isset($_POST["lg"]))
{header('location:uslogout.php');}
if(isset($_POST["sd"]))
{header('location:trckus.php');}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Request Details</title>
        <link rel="stylesheet" href="https://maxccdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></head>
        <style>
        body{
    background-color: #808080;
    background-image: url("imm.png");
  background-repeat: no-repeat;
  background-position: left top;
  background-size: 300px 70px;
}
.btn{
    width: 10%;
    height: 4%;
    border: 1px solid red;
    border-radius: 05px;
    padding: 5px 2px 5px 2px;
    box-shadow: 2px 2px 2px 2px;
    margin: 10px 0px 15px 0px;
    position: relative; bottom: -80px;
}
.txt{
    width: 15%;
    height: 5%;
    border: 1px solid black;
    border-radius: 05px;
    padding: 5px 2px 5px 2px;
    margin: 10px 0px 15px 0px;
}</style>
<body>
<?php
$dt = $_GET['data'];
$sql = "SELECT * FROM `requests` WHERE reqid=$dt";
$res = mysqli_query($conn, $sql);
if($res){
    $row = mysqli_fetch_assoc($res);
    echo $row['name'];
}
?>
<form name="form1" action=""  method="post">
<input type="submit" class="btn" style="position: relative; left:30px;bottom: 7;width:120px;outline:none;border:none;background-color: #b35900;" name="sd" value="Return to Request">
<input type="submit" class="btn" style="position: relative; left:60px;bottom: 7;width:140px;outline:none;border:none;background-color: #ffcc80;" name="rd" value="Return to Dashboard">
<input type="submit" class="btn" style="position: relative; left:110px;bottom: 7;width:100px;outline:none;border:none;background-color: #cc0000;" name="lg" value="Logout">
</form> 

</body>
</html>