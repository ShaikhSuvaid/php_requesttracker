<?php include "../auth/auth.php";?>
<html>
<head><title>Registered Users</title>
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
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
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