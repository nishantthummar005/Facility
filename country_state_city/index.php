<?php

    if(isset($_REQUEST['send']))
    {
        echo "$_REQUEST[f_country]";
        echo "<br >";
        echo "$_REQUEST[f_state]";
        echo "<br >";
        echo "$_REQUEST[f_city]";
        echo "<br >";
    }

?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
               
        <script src="jquery.min.js" type="text/javascript"></script>
        <script src="location.js" type="text/javascript"></script>
        <title>php ajax country state city dropdown</title>
    </head>
    <body>
        <form action="#" role="form" id="location" method="post">
            <div>
                <select name="country" class="countries" id="countryId" required="required" onchange='document.getElementById("f_country").value=$("#countryId option:selected").text();'>
                        <option value="">Select Country</option>
                    </select>
                
            </div>
            <div>
                    <select name="state" class="states" id="stateId" required="required" onchange='document.getElementById("f_state").value=$("#stateId option:selected").text();'>
                        <option value="">Select State</option>
                    </select>
            </div>
            <div>
                    <select name="city" class="cities" id="cityId" required="required" onchange='document.getElementById("f_city").value=$("#cityId option:selected").text();'>
                        <option value="">Select City</option>
                    </select>
            </div>
            
            <input type="hidden" name="f_country" id="f_country" />
            <input type="hidden" name="f_state"  id="f_state"/>
            <input type="hidden" name="f_city" id="f_city" />
            
            <Br />
            <div>
                <button type="submit" name="send">Submit</button>
            </div>
            
        </form>

    </body>
</html>
