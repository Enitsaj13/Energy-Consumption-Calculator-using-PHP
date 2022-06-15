<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

            <!-- Design -->

        <style> 

            input[type=number], select {
                width: 20%;
                height: 40px;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #f0f0f0;
                border-radius: 4px;
                box-sizing: border-box;
                text-align: center;
            }

            input[type=submit] {
                width: 60%;
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 18px;
            }

            input[type=submit]:hover {
                background-color: #45a049;
            }

            div {
                margin-top: 300px;
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
                text-align: center;
            }

            h1 {
                font-family: 'Roboto', sans-serif;
                color: #757575;
            }

        </style>


        <div>
                <!-- Title -->
                <h1>
                    Energy Comsumption Calculator
                </h1>

                <!-- Input Form -->
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

                    <input type="number" name="watt" placeholder="Enter watts used:" required>

                    <input type="number" name="hour" placeholder="Enter hours usage per day:" required>

                    <input type="number" name="day" placeholder="Enter days usage per year:" required>
                
                    <input type="submit" value="Compute">

            <?php

                // PHP computation
                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                
                    $Watts = htmlspecialchars($_REQUEST['watt']);

                    $Hours = htmlspecialchars($_REQUEST['hour']);

                    $Days = htmlspecialchars($_REQUEST['day']);     
                    
                    
                // Formula for the energy comsumption
                    $totalCostPerYear = $Watts*$Hours*$Days; 

                    echo "<br>";

                    echo "<br>";

                    echo  "<h1 style='font face: 'Roboto', sans-serif;>" . "Total Cost: ". $totalCostPerYear/1000*8.8901 .  " " . "per year" . "</h1>";

                    exit();

                }
                
            ?> 

        </form>

    </div>


</body>
</html>