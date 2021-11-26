<!DOCTYPE html>
<html>
<?php

// function getIPAddress()
// {
//     //whether ip is from the share internet  
//     if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
//         $ip = $_SERVER['HTTP_CLIENT_IP'];
//     }
//     //whether ip is from the proxy  
//     elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
//         $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
//     }
//     //whether ip is from the remote address  
//     else {
//         $ip = $_SERVER['REMOTE_ADDR'];
//     }
//     return $ip;
// }
// $ip = getIPAddress(); 

// function get_ip_detail($ip)
// {
//     $ip_response = file_get_contents('http://ip-api.com/json/' . $ip);
//     $ip_array = json_decode($ip_response);
//     return  $ip_array;
// }

// $ip_array = get_ip_detail($ip);
// print_r($ip_array);die;
// echo $country_name = $ip_array->country;
// echo $city = $ip_array->city;
?>

<head>
    <title>Creating Dynamic Data Graph using PHP and Chart.js</title>
    <style type="text/css">
        #chart-container {
            width: 50%;
            height: auto;
        }
    </style>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/Chart.min.js"></script>


</head>

<body>
    <div id="chart-container">
        <canvas id="graphCanvas"></canvas>
    </div>

    <script>
        $(document).ready(function() {
            showGraph();
        });


        function showGraph() {
            {
                $.post("data.php",
                    function(data) {
                        console.log(data);
                        var name = [];
                        var marks = [];

                        for (var i in data) {
                            name.push(data[i].date);
                            marks.push(data[i].user);
                            // console.log(data[i].user);
                        }

                        var chartdata = {
                            labels: name,
                            datasets: [{
                                label: 'Total Visit',
                                backgroundColor: '#e94e38',
                                borderColor: '#000',
                                hoverBackgroundColor: '#000',
                                hoverBorderColor: '#666666',
                                data: marks
                            }]
                        };

                        var graphTarget = $("#graphCanvas");

                        var barGraph = new Chart(graphTarget, {
                            type: 'line',
                            data: chartdata,
                        }); 
                    });
            }
        }
    </script>

</body>

</html>