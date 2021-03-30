<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <title>CleanCar - Billing form</title>

    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <!-- get font just in case -->

    <link rel="stylesheet" type="text/css" href="public\css\billing.css"><!-- add style to form -->


    <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>

    <script type="text/javascript" src="public\js\bill.js"></script>
    <script src="public/js/jquery/jquery.alertable.min.js"></script>

</head>

<body>




    <form name="add_bill" id="add_bill" method="post" action="update_bill_manager">


        <div class="background">

            <!-- add breadcrumb for find the path easily to users -->
            <ul class="breadcrumb">

                <li><a href="home">Home</a></li>
                <li><a href="manager">Manager</a></li>
                <li><a href="invoice_report_manager">Invoice Report</a></li>
                <li>Edit Bill</li>
            </ul><!-- breadcrumb -->


            <div class="container">
                <h1 style="text-align:center;"><i class="fa fa-money" aria-hidden="true"></i> Billing</h1>
                <hr style="width: 60%;">


                <div class="card">
                    <div id=form_content>
                        <!-- div to center needed elements -->

                        &ensp;&ensp;<label for="invoice_no">
                            <div class="form_label"><b>Invoice No</b></div>
                        </label>
                        <input type="text" placeholder="Enter the Invoice no" name="invoice_no"
                            value='<?php echo $array['invoice_no']; ?>' id="invoice_no" required disabled></br>

                        <input type="hidden" name="invoice_no" id="invoice_no"
                            value="<?php echo $array['invoice_no'] ?>">

                        &ensp;&ensp;<label for="customer_name">
                            <div class="form_label"><b>Customer Name</b></div>
                        </label>
                        <input type="text" placeholder="Enter the Customer Name" name="customer_name" id="customer_name"
                            value="<?php echo $array['customer_name']; ?>" required></br>

                        &ensp;&ensp;<label for="contact_no">
                            <div class="form_label"><b>Contact Number</b></div>
                        </label>
                        <input type="text" placeholder="Enter the Contact Number" name="contact_no" id="contact_no"
                            value="<?php echo "$array[contact_no]"; ?>" required></br>

                        &ensp;&ensp;<label for="vehicle_no">
                            <div class="form_label"><b>Vehicle Number</b></div>
                        </label>
                        <input type="text" placeholder="Enter the Vehicle Number" name="vehicle_no" id="vehicle_no"
                            value="<?php echo "$array[vehicle_no]"; ?>" required></br>

                        &ensp;&ensp;<label for="vehicle_model">
                            <div class="form_label"><b>Vehicle Model</b></div>
                        </label>
                        <input type="text" placeholder="Enter the Vehicle Model" name="vehicle_model" id="vehicle_model"
                            value="<?php echo "$array[vehicle_model]"; ?>" required></br>

                        &ensp;&ensp;<label for="emp_id">
                            <div class="form_label"><b>Handled By</b></div>
                        </label>
                        <input type="text" placeholder="Enter the Employee id" name="emp_id" id="emp_id"
                            value="<?php echo "$array[emp_id]"; ?>" required></br>
                            &ensp;&ensp;<label for="servise_type">

                            <div class="form_label"><b>Service Type</b></div>
                        </label>
                        <select name="servise_type" id="servise_type">
                            <option value="<?php echo "$array[service_type]"; ?>">
                                <?php echo "$array[service_type]"; ?></option>
                            <option value="Full Service">Full Service</option>
                            <option value="Normal Service">Normal Service</option>
                            <option value="Body Wash">Body Wash</option>
                        </select><br>

                        &ensp;&ensp;<label for="service_charge">
                            <div class="form_label"><b>Service Charge</b></div>
                        </label>
                        <input type="text" placeholder="Enter the Service Charge" name="service_charge"
                            id="service_charge" value="<?php echo "$array[service_charge]"; ?>" onkeyup="calculate_insidebill()" required></br>
                        
                        &ensp;&ensp;<label for="aditional_charges">
                            <div class="form_label"><b>Aditional Charges</b></div>
                        </label>
                        <input type="text" placeholder="Enter the aditional charges" name="aditional_charges"
                            id="aditional_charges" value='<?php echo "$array[aditional_charges]"; ?>'
                            onkeyup="calculate_insidebill()"></br>
                        &ensp;&ensp;<label for="advanced_fee">
                            <div class="form_label"><b>Advanced</b></div>
                        </label>
                        <input type="text" placeholder="Enter the aditional charges"
                            value='<?php echo "$array[advance_payment]"; ?>' name="advanced_fee" id="advanced_fee"
                            disabled></br>
                        <input type="hidden" placeholder="Enter the aditional charges"
                            value='<?php echo "$array[advance_payment]"; ?>' name="advanced_fee" id="advanced_fee"
                            disabled></br>


                        &ensp;&ensp;<label for="net_amount">
                            <div class="form_label" ><b>Total Amount</b></div>
                        </label>
                        <input type="text" placeholder="Enter the Total Amount" name="net_amount" id="net_amount"
                            value="<?php echo "$array[net_amount]"; ?>" onkeyup="calculate_insidebill()" required></br>

                        <a href="invoice_report_manager" class="btn cancelbtn" class="form_btn"> Cancel </a>
                        <button type="submit" id="okbtn" class="okbtn btn" style="margin-right :10px">Update</button>
                        </br></br></br></br>
                    </div><!-- form_content -->
                </div><!-- card -->
                </br>
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