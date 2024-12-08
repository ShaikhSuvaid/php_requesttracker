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

    $sql= "SELECT * FROM regus WHERE email='".$email."' AND binary password='".$password."' limit 1";

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
                echo "<script>alert('Incorrect E-mail\Password');
                window.location.href='index.php';
                </script>";
            }
        }
        else
        {
            echo "<script>alert('E-mail not registered');</script>";
        }
    
}else{
        echo "<script>alert('Cannot Run Query');</script>";
    }
?>
<?php
if(isset($_POST['register']))
{
    $user_exist_query="SELECT * FROM regus WHERE email='$_POST[email]'";
    $res=mysqli_query($conn,$user_exist_query);

    if($res)
    {
        $res_fetch=mysqli_fetch_assoc($res);
        if($res_fetch['email']==$_POST['email'])
        {
            echo "<script>alert('$res_fetch[email] - E-mail already registered');
            window.location.href='index.php';
            </script>";
        }
        else
        {
            $query="INSERT INTO `regus`(`name`, `email`, `contact`, `dept`, `designation`, `offlocation`, `password`) VALUES ('$_POST[name]','$_POST[email]','$_POST[contact]','$_POST[dept]','$_POST[designation]','$_POST[offlocation]','$_POST[password]')";
            if(mysqli_query($conn, $query))
            {
                echo "<script>alert('Registration Successful!, Mail has been sent on your registered Mail I'd.');
                window.location.href='index.php';
                </script>";
            }
            else
            {
                echo "<script>alert('Registration Unsuccessful!');
                window.location.href='index.php';
                </script>";
            }
        }
    }
    else
    {
        echo "<script>alert('Cannot Run Query');
        window.location.href='index.php';
        </script>";
    }
}
?>