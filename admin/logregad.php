<?php include "../auth/auth.php";?>
<?php

require('dbconn.php');

if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];

    $email=stripcslashes($email);
    $password=stripcslashes($password);
    $email=mysqli_real_escape_string($conn,$email);
    $password=mysqli_real_escape_string($conn,$password);

    $sql= "SELECT * FROM regad WHERE email='".$email."' AND binary password='".$password."' limit 1";

    $res=mysqli_query($conn,$sql);
    if($res){
        if(mysqli_num_rows($res)==1){
            $session_id=session_id();
            $_SESSION['auth']=$session_id;
            $res_fetch=mysqli_fetch_assoc($res);
            $_SESSION['loggedin']=true;
            $_SESSION['email']=$res_fetch['email'];
            header("location: dashboard.php");
            }
            else
            {
                echo "<script>alert('Invalid Details OR Email Not Registered')
                window.location.href='index.php';
                </script>";
            }
        }
        else
        {
            echo "<script>alert('Email not registered')</script>";
        }
    
}else{
        echo "<script>alert('Canot Run Query')</script>";
    }
?>
