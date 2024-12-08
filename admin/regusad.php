<?php include "../auth/auth.php";?>
<?php
if(isset($_POST["ru"]))
{
  header('location: dashboard.php');
}
if(isset($_POST["lg"]))
{
  header('location: adlogout.php');
}
if(isset($_POST["srg"]))
{
  header('location: trckreg.php');
}
?>
<html>
<head><title>Admin | Registered Users</title>
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
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
<html>
<head>
<style>
table, th, td {
  border: 1px solid white;
  border-collapse: collapse;
}
th, td {
    text-align: left;
    padding: 10px;
}
tr:nth-child(even) {
  background-color: #D6EEEE;}
  body{
    background-color: #808080;
    background-image: url("imm.png");
  background-repeat: no-repeat;
  background-position: left top;
  background-size: 300px 70px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
<br><br>
<form name="form1" action="" method="post">
<input type="submit" name="srg" class="btn" style="position: relative;bottom: -30;outline:none;border:none;background-color: #00b300;" value="Search User">
<input type="submit" name="ru" class="btn" style="position: relative; left:30px;bottom: -30;width:140px;outline:none;border:none;background-color: #ffcc80;" value="Return to Dashboard">
<input type="submit" name="lg" class="btn" style="position: relative; left:70px;bottom: -30;width:140px;outline:none;border:none;background-color: #cc0000;" value="Logout">
</form>
<center><h1>Registered Users</h1></center>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Sr No.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact No.</th>
      <th scope="col">Department</th>
      <th scope="col">Designation</th>
      <th scope="col">Office Location</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=1;
    $query="SELECT * FROM regus";
    $res=mysqli_query($conn,$query);
    $count=(mysqli_num_rows($res));
    if($count>0){
    while($row=mysqli_fetch_array($res))
    {
        
    ?>
    <tr class="table-active">
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['contact'];?></td>
      <td><?php echo $row['dept'];?></td>
      <td><?php echo $row['designation'];?></td>
      <td><?php echo $row['offlocation'];?></td>
      <td><a href="edus.php?name=<?php echo $row['name'];?>">Edit</a> | <a href="deus.php?name=<?php echo $row['name'];?>">Delete</a></td>
    </tr>
    <?php $i++;}}else{
        echo "No record found!";
    } ?>
  </tbody>
</table>
</body>
</html>
</body>
</html>