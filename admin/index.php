<?php require('dbconn.php'); ?>
<html>
    <head>
        <title>Admin | Login</title>
        <link rel="stylesheet" href="stylea.css">
        <style>
body {  
  background-image: url("imm.png");
  background-repeat: no-repeat;
  background-position: 50% 2%;
  background-size: 255px 55px;
}
#bn{
    top: 0;
    left: 0;
    position: absolute;
    width: 220px;
    height: 100%;
    background: linear-gradient(to right, #632daa, #a540a8);
    border-radius: 30px;
}
.form-box{
    width: 380px;
    height: 500px;
    position: relative;
    margin: 6% auto;
    background: #fff;
    padding: 5px;
    overflow: hidden;
}
.toggle-bn{
    padding: 10px 30px;
    cursor: pointer;
    background: transparent;
    border: 0;
    outline: none;
    position: relative;
}
.oreh{
    height: 100%;
    width: 100%;
    background: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,1));
    background-position: center;
    background-size: cover;
    position: absolute;
}
</style>    
    </head>
    <body>
        <div class="oreh">
                <div class="form-box">
                    <div class="button-box">
                        <div id="bn"></div>
                        <button type="button" class="toggle-bn" onclick="login()">Login</button>
                    </div>
                    <form id="login" class="input-group" method="post"  action="logregad.php">
                        <input type="text" class="input-field" placeholder="E-mail I'd" name="email" required>
                        <input type="password" class="input-field" placeholder="Password" name="password" required><br><br><br><br>
                        <button type="submit" class="submit-btn" name="login">Login</button><br>
                        <center><a href="../index.php">Back Home!!</a></center>
                    </form>
                </div>
            </div>
    </body>
</html>