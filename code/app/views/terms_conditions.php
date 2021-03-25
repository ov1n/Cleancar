<!DOCTYPE html>
<html>

<head>
    <title>terms & Conditions</title>
    <link type="text/css" rel="stylesheet" href="public/css/terms_conditions.css">

</head>

<body>
    <div class="container">


        <div class="background">
            <ul class="breadcrumb">

                <li><a href="home">Home</a></li>
                <li>terms & Conditions</li>
            </ul><!-- breadcrumb -->
            <h1>Terms & Conditions&ensp;<i class="far fa-edit fa-lg"></i></h1>
            <hr style="width: 60%;"> </br>

            <ul style="color: white;margin-left:20%;margin-right:10%">
                <i class="fa fa-taxi " aria-hidden="true"></i>&ensp; General time of service opening will be from
                8.00 a.m. to
                6.00 p.m.<br><br><br>
                <i class="fa fa-taxi " aria-hidden="true"></i>&ensp; The customer will only be able to cancel his
                reservation
                only before a “concession time period” – 48 hours<br><br><br>
                <i class="fa fa-taxi " aria-hidden="true"></i>&ensp; The customer will have to pay an advance amount
                (Either
                through the online payment or physically to the counter of the service station) before the concession
                period. – LKR 500<br><br><br>
                <i class="fa fa-taxi " aria-hidden="true"></i>&ensp; Advanced payment will be done through a secure
                gateway<br><br>
                <i class="fa fa-taxi " aria-hidden="true"></i>&ensp; Other Specialized Service<br><br><br>
                <i class="fa fa-taxi " aria-hidden="true"></i>&ensp; Other Specialized Service<br><br><br>
                <i class="fa fa-taxi " aria-hidden="true"></i>&ensp; Other Specialized Service<br><br><br>
                <i class="fa fa-taxi " aria-hidden="true"></i>&ensp; Other Specialized Service<br><br><br>
                <i class="fa fa-taxi " aria-hidden="true"></i>&ensp; Other Specialized Service<br><br><br>


            </ul>
        </div><!-- background -->

    </div><!-- container -->
    <?php if (Session::get('role') != 'NULL') {
        include("nav_profile.php");
    } else {
        include("nav_login.php");
    }
    ?>

    <?php
    //get footer in seperate file
    include("footer.php");
    ?>
</body>

</html>