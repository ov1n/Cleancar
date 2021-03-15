<!DOCTYPE html>
<html>

<head>
    <title>Business Report</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="public\css\invoice_report.css"><!-- add style to employee_list -->
    <!-- get imported jquery -->
    <script src="public/js/jquery/jquery-3.5.1.js"></script>
    <!-- get external js file -->
    <script type="text/javascript" src="public\js\employee.js"></script>
    <script src="public/js/jquery/jquery.alertable.min.js"></script>
</head>

<body>



    <div class="background_2">
        <!-- add breadcrumb for find the path easily to users -->
        <ul class="breadcrumb">
            <!-- <img src="public\images\4444.png" width="109" height="48" style="float:right"> -->
            </br>
            <li><a href="home">Home</a></li>
            <li><a href="manager">Manager</a></li>
            <li>Business Report</li>
        </ul><!-- breadcrumb -->
        <?php
        //   echo($_SESSION["uname"]);
        //var_dump($array);
        ?>
        <div class="container">
            <h1 style="text-align:center;"><i class="fas fa-file-invoice"></i> Business Report</h1>
            <hr style="width: 60%;">
            <br><br>
            <div class="list_table">
                <form class="example" method="post" action="search_invoice_data"
                    style="margin:auto;max-width:300px;float:right;padding:20px;">
                    <input type="text" placeholder="Search.." name="search" id="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
                <div style="overflow-x:auto; width:94%;   margin-left: 3%; border-radius: 6px;">

                    <table id="table_">
                        <tr>
                            <th>Invoice no</th>
                            <th>Bill no</th>
                            <th>Reservation Id</th>
                            <th>Vehicle No</th>
                            <th>Vehicle Model</th>
                            <th>Customer Name</th>
                            <th>Contact No</th>
                            <th>Net Amount</th>



                        </tr>
                        <?php if ($array) { ?>
                        <?php foreach ($array as $invoice1) { ?>
                        <tr>
                            <td>
                                <?php echo "$invoice1[invoice_no]"; ?>
                            </td>
                            <td>
                                <?php echo "$invoice1[bill_no]"; ?>
                            </td>
                            <td>
                                <?php echo "$invoice1[reservation_id]"; ?>
                            </td>
                            <td>
                                <?php echo "$invoice1[vehicle_no]"; ?>
                            </td>
                            <td>
                                <?php echo "$invoice1[vehicle_model]"; ?>
                            </td>
                            <td>
                                <?php echo "$invoice1[customer_name]"; ?>
                            </td>
                            <td>
                                <?php echo "$invoice1[contact_no]"; ?>
                            </td>
                            <td>
                                <?php echo "$invoice1[net_amount]"; ?>
                            </td>
                            <td style=" text-align: center;">
                                <a href="#" name="view" class="btn viewbtn">Edit</a>
                            </td>
                            <td style=" text-align: center;">
                                <a href="#" name="view" class="btn viewbtn">Print</a>
                            </td>

                        </tr>
                        <?php } ?>
                        <?php } ?>
                        <?php if (!$array) { ?>
                        <p style="color: red;font-size:large;padding:10px;font-weight:100;">
                            <b> <?php echo "Record Not Found !"; ?>
                            </b>
                        </p>
                        <?php } ?>
                    </table>
                </div>
            </div>
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