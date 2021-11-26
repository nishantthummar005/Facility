<html>
<style>
  .speech {border: 1px solid grey; width: 50%; padding: 0; margin-top:15%;}
  .speech input {border: 0; width: 50%; display: inline-block; height: 35px;padding-left:15px;}
  .speech input:focus{
	  outline:0;
  }
  .speech img {float: right; width: 40px;cursor:pointer }
</style>
 <body>
<!-- Search Form -->
<form id="labnol" method="get" action="http://www.google.com/search">
<br><br>
<center>
<h1>Voice To Text Conversion </h1>
  <div class="speech">
    <input type="text" name="q" id="transcript" placeholder="Speak" />
    <img onclick="startDictation()" src="//i.imgur.com/cHidSVu.gif" />
  </div>
</form>
</center>
<!-- HTML5 Speech Recognition API -->
<script>
  function startDictation() {
 
    if (window.hasOwnProperty('webkitSpeechRecognition')) {
 
      var recognition = new webkitSpeechRecognition();
 
      recognition.continuous = false;
      recognition.interimResults = false;
 
      recognition.lang = "en-US";
      recognition.start();
 
      recognition.onresult = function(e) {
        document.getElementById('transcript').value
                                 = e.results[0][0].transcript;
        recognition.stop();
        document.getElementById('labnol').submit();
      };
 
      recognition.onerror = function(e) {
        recognition.stop();
      }
 
    }
  }
</script>
</body>
</html>