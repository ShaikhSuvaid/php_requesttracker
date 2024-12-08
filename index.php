<?php require('dbconn.php'); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Request Management System || Home Page</title>

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Amaranth:400,400i,700,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- header -->
            <div class="col-lg-2" id="spy">
                <div class="header-agile">
                    <h1>
                        <a class="navbar-brand" href="index.php">
                           RMS
                        </a>
                    </h1>
                </div>
                <ul class="nav nav-pills flex-column mt-lg-5">
                    
                    
                    <button type="button" class="btn btn-block mt-lg-5 mt-3 w3ls-btn p-1 btn-theme text-white  text-uppercase font-weight-bold">
                    <a class="nav-link" href="admin/index.php">Purchase Deparment</a>
                </button>
                <button type="button" class="btn btn-block mt-lg-5 mt-3 w3ls-btn p-1 btn-theme text-white  text-uppercase font-weight-bold">
                    <a class="nav-link" href="user/index.php">User</a>
                </button>
                </ul>
                
            </div>
            <!-- //header -->
            <!-- main -->
            <div class="col-lg-10 scrollspy-example pr-0" data-spy="scroll" data-target="#spy">
                <!-- banner -->
                <div id="home" class="w3ls-banner d-flex  align-items-center justify-content-center">
                    <div class="bnr-w3pvt text-center">
                        <h1>صلو ا علی الحبیب صلی اللہ علیہ وسلم</h1><br>
                        <h4>Welcome to!!</h4>
                        <h2 class="bnr-txt-w3">Purchase Majlis ~ DIH</h2>
                        <h1 class="bnr-txt-w3">Request Management System</h1>
                        <p>I must strive to reform myself and people of the entire world. ان شاء الله</p>
                       
                    </div>
                </div>
                <div id="contact" class="pt-lg-5">
                    
                    <div class="section">
                        
                       
                        <div class="footer-bottom py-lg-5 py-3">
                          
                            <div class="footer-copy text-center">
                                <h1 class="bnr-txt-w3">Request Management System</h1>
                                <h1 class="bnr-txt-w3">Initiative by Purchase Depatment of Dawat E Islami India</h1>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
  
  

    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
        }
    </script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>