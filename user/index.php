<?php require('dbconn.php'); ?>
<html>
    <head>
        <title>User | Login & Register</title>
        <link rel="stylesheet" href="styleu.css">
        <style>
body {  
  background-image: url("imm.png");
  background-repeat: no-repeat;
  background-position: 50% 2%;
  background-size: 255px 55px;
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
.oreh{
    height: 100%;
    width: 100%;
    background: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,1));
    background-position: center;
    background-size: cover;
    position: absolute;
}
.input-grp{
    top: 90px;
    position: absolute;
    width: 280px;
    transition: .5s;
}
.input-fild{
    width: 100%;
    padding: 10px 0;
    margin: 5px 0;
    border-left: 0;
    border-right: 0;
    border-top: 0;
    border-bottom: 1px solid #999;
    outline: none;
    background: transparent;
}
</style>
    </head>
    <body>
         <div class="oreh">
                
                <div class="form-box">
                    <div class="button-box">
                        <div id="bn"></div>
                        <button type="button" class="toggle-bn" onclick="login()">Login</button>
                        <button type="button" class="toggle-bn" onclick="register()">Register</button>
                    </div>
                    <form id="login" class="input-group" method="post" action="logregus.php">
                        <input type="text" class="input-field" placeholder="E-mail I'd" name="email" required>
                        <input type="password" class="input-field" placeholder="Password" name="password" required><br><br><br><br>
                        <button type="submit" class="submit-btn" name="login">Login</button><br>
                        <center><a href="../index.php">Back Home!!</a></center>
                    </form>
                    <form id="register" class="input-grp" method="post" action="logregus.php">
                        <input type="text" class="input-fild" placeholder="Name" name="name" required>
                        <input type="email" class="input-fild" placeholder="E-mail I'd" name="email" required>
                        <input type="number" class="input-fild" placeholder="Contact No." name="contact" required>
                        <input type="text" class="input-fild" placeholder="Department" name="dept" required>
                        <input type="text" class="input-fild" placeholder="Designation" name="designation" required>
                        <input type="text" class="input-fild" placeholder="Office Location" name="offlocation" required>
                        <input type="password" class="input-fild" placeholder="Password" name="password" required><br><br>
                        <button type="submit" class="submit-btn" name="register">Register</button><br>
                        <center><a href="../index.php">Back Home!!</a></center>
                    </form>
                </div>
            </div>
            <script>
                var x = document.getElementById("login");
                var y = document.getElementById("register");
                var z = document.getElementById("bn");

                function register(){
                    x.style.left = "-400px";
                    y.style.left = "50px";
                    z.style.left = "110px";
                }
                function login(){
                    x.style.left = "50px";
                    y.style.left = "450px";
                    z.style.left = "0px";
                }
            </script>
    </body>
</html>