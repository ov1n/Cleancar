<!DOCTYPE html>
<html>

<head>
    <title>manager_home</title>

    <link rel="stylesheet" type="text/css" href="public\css\manager_home.css"><!-- add style home page -->
    <link rel="stylesheet" type="text/css" href="public\css\footer.css"><!-- add style to footer -->
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
    <script>
    var k1 = <?php echo $ar[0]['net_amount']; ?>;
    var k2 = <?php echo $ar[1]['net_amount']; ?>;
    var k3 = <?php echo $ar[2]['net_amount']; ?>;
    var k4 = <?php echo $ar[3]['net_amount']; ?>;
    var k5 = <?php echo $ar[4]['net_amount']; ?>;
    var k6 = <?php echo $ar[5]['net_amount']; ?>;
    var k7 = <?php echo $ar[6]['net_amount']; ?>;


    window.onload = function() {

        var chart = new CanvasJS.Chart("chartContainer", {
            theme: "light1", // "light1", "light2", "dark1"
            animationEnabled: true,
            exportEnabled: true,
            title: {
                text: "Last 7 Days Revenue"
            },
            axisX: {
                margin: 10,
                labelPlacement: "outside",
                tickPlacement: "inside"
            },
            axisY2: {
                title: "Revenue",
                titleFontSize: 14,
                includeZero: true,
                suffix: "RS"
            },
            data: [{
                type: "bar",
                axisYType: "secondary",
                yValueFormatString: "#,###.##RS",
                indexLabel: "{y}",
                dataPoints: [{
                        label: "<?php echo date('Y-M-d'); ?>",
                        y: k1
                    },
                    {
                        label: "<?php echo date('Y-M-d', strtotime("-1 days")); ?>",
                        y: k2
                    },
                    {
                        label: "<?php echo date('Y-M-d', strtotime("-2 days")); ?>",
                        y: k3
                    },
                    {
                        label: "<?php echo date('Y-M-d', strtotime("-3 days")); ?>",
                        y: k4
                    },
                    {
                        label: "<?php echo date('Y-M-d', strtotime("-4 days")); ?>",
                        y: k5
                    },
                    {
                        label: "<?php echo date('Y-M-d', strtotime("-5 days")); ?>",
                        y: k6
                    },
                    {
                        label: "<?php echo date('Y-M-d', strtotime("-6 days")); ?>",
                        y: k7
                    },

                ]
            }]
        });
        chart.render();

    }
    </script>
</head>

<body>

    <div class="cover" style="height: 900px;">
        <!-- create breadcrumb -->
        <ul class="breadcrumb">
            <li><a href="home">Home</a></li>
            <li>Manager</li>

        </ul> <!-- breadcrumb -->

        <h1 style="color: white;">Manager Home <i class="fa fa-home fa-lg" aria-hidden="true" style="color: white;"></i>
        </h1>
        <hr style="width: 60%;"><br>

        <div class="square"> <br>
            <div class="square1" style="float: left;margin-left:8%;">
                <i class="fa fa-address-card-o fa-3x" aria-hidden="true"></i>
                <br>
                <a href="employee_list"><button><b>Employee</b></button></a>
            </div>


            <div class="square3">
                <i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i>
                <br>
                <a href="service_type_list"><button><b>Service Type</b></button></a>
            </div>

            <div class="square4">
                <i class="fa fa-clock-o fa-3x" aria-hidden="true"></i>
                <br>
                <a href="timeslot_list"><button><b>Timeslot</b></button></a>
            </div>

            <div class="square5">
                <i class="fa fa-file-text fa-3x" aria-hidden="true"></i>
                <br>
                <a href="invoice_report_manager"><button><b>Reports</b></button></a>
            </div>
            <div class="square6">
                <i class="fa fa-list fa-3x" aria-hidden="true"></i>
                <br>
                <a href="time_table"><button><b>Time Table</b></button></a>
            </div>


        </div>
        <!--square-->
        <div id="chartContainer" class="chartContainer" style="height: 370px; width: 94%;margin-left:3%;"></div>
        <?php include("nav_profile.php"); ?>
        <!-- add navigation bar -->
        <?php include("footer.php"); ?>
    </div>
    <!--cover-->



    <!-- add footer -->

</body>

</html>