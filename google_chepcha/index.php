<html>
  <head>
    <title>reCAPTCHA demo: Explicit render for multiple widgets</title>
    <script type="text/javascript">
      var verifyCallback = function(response) {
       
      };
      var onloadCallback = function() {
        
        widgetId1 = grecaptcha.render('example1', {
          'sitekey' : '6Lcnnx4UAAAAAPVZzowFZPkxxHyOm5RsFQWE1SKo',
          'callback' : verifyCallback,
          'theme' : 'light'
        });
      };
    </script>
  </head>
  <body>
    <!-- The g-recaptcha-response string displays in an alert message upon submit. -->
    <form action="https://www.google.com" onsubmit=" return (grecaptcha.getResponse(widgetId1) == '')? false : true;">
      <div id="example1" style="margin-left:15px;"></div>
      <br>
      <input type="submit" value="getResponse">
    </form>
    <br>
    <!-- Resets reCAPTCHA widgetId2 upon submit. -->
   
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>
  </body>
</html>





6Lcnnx4UAAAAAPVZzowFZPkxxHyOm5RsFQWE1SKo