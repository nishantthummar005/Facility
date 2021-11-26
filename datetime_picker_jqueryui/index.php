<html lang="en">
    <head>
        <title>jQuery UI Datepicker - Default functionality</title>
        <link rel="stylesheet" href="css/jquery-ui.css">
        <script src="js/jquery-1.12.4.js"></script>
        <script src="js/jquery-ui.js"></script>
        <link href="css/timepicki.css" rel="stylesheet">
        
        <script src="js/timepicki.js"></script>
        <script>
            $( function() {
                $( "#datepicker" ).datepicker({
                  numberOfMonths: 1,
                  showButtonPanel: false,
                  showWeek: true,
                  firstDay: 1
                });
              } );
        </script>
        <style>
            input{
                padding: 10px;
            }
        </style>
    </head>
    <body bgcolor="#dfdfdf">
        <div style="margin: 10%">
        Date : <p>
            <input type="text" id="datepicker" placeholder="Select Date">
        </p>
      
        Time : <p>
            <input id="timepicker1" type="text" name="timepicker1" placeholder="Select Time" />
        </p>
        </div>
        <script>
            $('#timepicker1').timepicki();
        </script>
    
    </body>
</html>