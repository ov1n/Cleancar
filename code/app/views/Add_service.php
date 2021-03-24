<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <title>CleanCar - Assign Service</title>

    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="public\css\add_service.css"><!-- add style to form -->


    <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>

    <script type="text/javascript" src="public\js\add_service_type.js"></script>
    <script src="public/js/jquery/jquery.alertable.min.js"></script>
    <link rel="stylesheet" type="text/css" href="public\css\libraries\jquery.alertable.css">
</head>

<body>


    <form name="add_service_type_form" id="add_service_type_form" method="post" action="add_service_type">
        <div class="container">

            <div class="background">
                <!-- add breadcrumb for find the path easily to users -->
                <ul class="breadcrumb">

                    <li><a href="home">Home</a></li>
                    <li><a href="manager">Manager</a></li>
                    <li><a href="service_type_list">Service Type</a></li>
                    <li>Assign Service</li>
                </ul><!-- breadcrumb -->
                <h1>Assign Service Type</h1>

                <div class="card">
                    <div id=form_content>
                        <!-- div to center needed elements -->

                        &ensp;&ensp;<label for="service_type">
                            <div class="form_label"><b>Service Type</b></div>
                        </label>
                        <input type="text" placeholder="Enter the name of service type" name="service_type"
                            id="service_type" required size="50"></br>

                        &ensp;&ensp;<label for="vehicle_category">
                            <div class="form_label"><b>Vehicle Category</b></div>
                        </label>
                        <select name="vehicle_category" id="vehicle_category">
                            <option value="car">Car</option>
                            <option value="van">Van</option>
                            <option value="cab">Cab</option>
                            <option value="jeep">Jeep</option>
                        </select><br>

                        &ensp;&ensp;<label for="no_of_employees">
                            <div class="form_label"><b>No of Employees</b></div>
                        </label>
                        <input type="text" placeholder="Enter number of emploees" name="no_of_employees"
                            id="no_of_employees" required size="50"></br>

                        &ensp;&ensp;<label for="duration">
                            <div class="form_label"><b>Duration</b></div>
                        </label>
                        <select name="duration" id="duration">
                            <option value="01:00">01:00</option>
                            <option value="01:30">01:30</option>
                            <option value="02:00">02:00</option>
                            <option value="02:30">02:30</option>
                        </select><br>

                        &ensp;&ensp;<label for="lift_no">
                            <div class="form_label"><b>Lift Number</b></div>
                        </label>
                        <select name="lift_no" id="lift_no">
                            <option value="1">L001</option>
                            <option value="2">L002</option>
                            <option value="3">L003</option>
                            <option value="4">L004</option>
                        </select><br>

                        &ensp;&ensp;<label for="prize">
                            <div class="form_label"><b>Normal Prize</b></div>
                        </label>
                        <input type="text" placeholder="Enter normal price" name="price" id="price" required
                            size="50"></br>

                        <a href="service_type_list" class="btn cancelbtn" class="form_btn"> Cancel </a>
                        <button type="submit" class="btn" class="form_btn" style="margin-right :10px">Submit</button>
                        </br></br></br></br>
                    </div><!-- form_content -->
                </div><!-- card -->

                </br></br></br></br>
            </div><!-- background -->

        </div><!-- container -->
    </form>

    <?php
    //include nav bar externally 
    include("nav_profile.php");
    ?>

    <?php
    //get footer in seperate file
    include("footer.php");
    ?>

</body>

</html>