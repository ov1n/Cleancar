<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <title>CleanCar - Leave Statistic</title>

    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="public\css\leave_statistics.css"><!-- add style to form -->
    <link rel="stylesheet" type="text/css" href="public\css\footer.css"><!-- add style to footer -->

    <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</head>

<body>

    <form>
        <div class="container">

            <div class="background">
                <!-- add breadcrumb for find the path easily to users -->
                <ul class="breadcrumb">

                    <li><a href="home">Home</a></li>
                    <li><a href="employee">Employee</a></li>
                    <li>Leave Statistics</li>
                </ul><!-- breadcrumb -->
                </br>
                <h1>Leave Statistics&ensp;<i class="fa fa-line-chart fa-lg" aria-hidden="true"></i></h1>
                <hr style="width: 60%;"></br>
                <p>This data valid only for this year</p>
                <div class="card">
                    <div id=form_content>
                        <!-- div to center needed elements -->
                        <label for="Number Of Leave You Got" style="width: 280px">
                            <div class="form_label"><b>Number Of Leave You Got upto Today</b></div>
                        </label>
                        <div class="form_label" style="margin:35px;color: black"><b>Full Day</b>&ensp;
                            <?php echo '<span class="label success">'.($array[0]['no_of_leaves_fullday']).'</span>'; ?> &ensp;&ensp;&ensp;<b>Half
                            Day</b>&ensp; <?php echo '<span class="label success">'.($array[0]['no_of_leaves_halfday']).'</span>'; ?>
                            &ensp;&ensp;&ensp;<b>Short Leave</b>&ensp;

                            <?php echo '<span class="label success">'.($array[0]['no_of_leaves_short']).'</span>'; ?> </div>

                        <label for="Number Of Leave Available" style="width: 300px">
                            <div class="form_label"><b>Number Of Leave Available upto Today</b></div>
                        </label>
                        <div class="form_label" style="margin:35px;color: black"><b>Full Day</b>&ensp;
                            <?php if ($array[0]['no_of_leaves_fullday'] > 20) {
                                echo '<span class="label success"> 0 </span>';
                            } else {
                                echo '<span class="label success">'.(20 - $array[0]['no_of_leaves_fullday']).'</span>';
                            } ?>
                            &ensp;&ensp;&ensp;<b>Half Day</b>
                            &ensp; <?php if ($array[0]['no_of_leaves_halfday'] > 20) {
                                                echo '<span class="label success"> 0 </span>';
                                            } else {
                                                echo '<span class="label success">'.(20 - $array[0]['no_of_leaves_halfday']).'</span>';
                                            } ?>
                            &ensp;&ensp;&ensp;<b>Short Leave</b>&ensp;
                            <?php if ($array[0]['no_of_leaves_short'] > 20) {
                                echo '<span class="label success"> 0 </span>';
                            } else {
                                echo '<span class="label success">'.(20 - $array[0]['no_of_leaves_short']).'</span>';
                            } ?> </div>
                    </div><!-- form_content -->



                </div><!-- card -->

                </br>
                <div class="row" style="display: flex;">
                    <div id="chartContainer1"
                        style="height: 300px; width: 30%; border-style: solid;  margin-left:2.5%; box-shadow: 5px 10px 10px rgba(0, 0, 0, 0.6); ">

                    </div>
                    <div id="chartContainer2"
                        style="height: 300px; width:30%; border-style: solid;  margin-left:2%; box-shadow: 5px 10px 10px rgba(0, 0, 0, 0.6); ">

                    </div>
                    <div id="chartContainer3"
                        style="height: 300px; width:30%; border-style: solid;  margin-left:2%; box-shadow: 5px 10px 10px rgba(0, 0, 0, 0.6); ">

                    </div>
                </div>

                </br></br></br>
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
    <script>
    var full = <?php echo ($array[0]['no_of_leaves_fullday']); ?>;
    var half = <?php echo ($array[0]['no_of_leaves_halfday']); ?>;
    var short = <?php echo ($array[0]['no_of_leaves_short']); ?>;

    window.onload = function() {

        // console.log('x');
        var chart = new CanvasJS.Chart("chartContainer1", {
            animationEnabled: true,
            title: {

                horizontalAlign: "center"
            },
            data: [{
                type: "doughnut",
                startAngle: 60,
                //innerRadius: 60,
                indexLabelFontSize: 16,
                indexLabel: "{label} - #percent%",
                toolTipContent: "<b>{label}:</b> {y} (#percent%)",
                dataPoints: [{
                        y: full,
                        label: "FullDay Leaves"
                    },
                    {
                        y: <?php if ($array[0]['no_of_leaves_fullday'] > 20) {
                                    echo "0";
                                } else {
                                    echo (20 - $array[0]['no_of_leaves_fullday']);
                                } ?>,
                        label: "Available FullDay Leaves"
                    },

                ]
            }]


        });
        chart.render();
        // console.log('x');
        var chart1 = new CanvasJS.Chart("chartContainer2", {
            animationEnabled: true,
            title: {

                horizontalAlign: "center"
            },
            data: [{
                type: "doughnut",
                startAngle: 60,
                //innerRadius: 60,
                indexLabelFontSize: 16,
                indexLabel: "{label} - #percent%",
                toolTipContent: "<b>{label}:</b> {y} (#percent%)",
                dataPoints: [{
                        y: half,
                        label: "HalfDay Leaves"
                    },
                    {
                        y: <?php if ($array[0]['no_of_leaves_halfday'] > 20) {
                                    echo "0";
                                } else {
                                    echo (20 - $array[0]['no_of_leaves_halfday']);
                                } ?>,
                        label: " Available HalfDay Leaves"
                    },

                ]
            }]


        });
        chart1.render();

        var chart2 = new CanvasJS.Chart("chartContainer3", {
            animationEnabled: true,
            title: {

                horizontalAlign: "center"
            },
            data: [{
                type: "doughnut",
                startAngle: 60,
                //innerRadius: 60,
                indexLabelFontSize: 16,
                indexLabel: "{label} - #percent%",
                toolTipContent: "<b>{label}:</b> {y} (#percent%)",
                dataPoints: [{
                        y: short,
                        label: "Short Leaves"
                    },
                    {
                        y: <?php if ($array[0]['no_of_leaves_short'] > 20) {
                                    echo "0";
                                } else {
                                    echo (20 - $array[0]['no_of_leaves_short']);
                                } ?>,
                        label: " Available Short Leaves"
                    },

                ]
            }]


        });
        chart2.render();

    }
    </script>

</body>

</html>