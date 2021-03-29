<!DOCTYPE html>
<html>

<head>
    <title>Terms & Conditions</title>
    <link type="text/css" rel="stylesheet" href="public/css/terms_conditions.css">

</head>

<body>
    <div class="container">


        <div class="background">
            <ul class="breadcrumb">

                <li><a href="home">Home</a></li>
                <li>Terms & Conditions</li>
            </ul><!-- breadcrumb -->
            <h1>Terms & Conditions&ensp;<i class="far fa-edit fa-lg"></i></h1>
            <hr style="width: 60%;"> </br>

            <ul style="color: white;margin-left:20%;margin-right:10%">
                <i class="fa fa-taxi " aria-hidden="true"></i>&ensp; General time of service opening will be from
                <b>8.00 a.m. to
                6.00 p.m</b>.<br><br><br>
                <i class="fa fa-taxi " aria-hidden="true"></i>&ensp; The customer will only be able to cancel his
                reservation
                only before a “concession time period” – 48 hours<br><br><br>
                <i class="fa fa-taxi " aria-hidden="true"></i>&ensp; Advanced payment will be done through a secure
                gateway - (<a href="https://www.payhere.lk/" stlye="color:cyan">Payhere</a>)<br><br>
                <i class="fa fa-taxi " aria-hidden="true"></i>&ensp; Due to the unpredictable nature, Advanced reservations will only be allowed <b>within 7 days </b> of making the  online reservation.<br><br><br>
                <i class="fa fa-taxi " aria-hidden="true"></i>&ensp; If the customer is unable to make it to the service station at the time of his/her advanced reservation, the slot will be allocated to the next in queue.<br><br><br>
                <i class="fa fa-taxi " aria-hidden="true"></i>&ensp; A no-show refund will only be possible if the customer informs the management <b> 24 hours </b> before the time of reservation.<br><br><br>
                <i class="fa fa-taxi " aria-hidden="true"></i>&ensp; If the need for cancellation is urgent and beyond the cocession period please contact our managemetn through our hotline or email.<br><br><br>


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