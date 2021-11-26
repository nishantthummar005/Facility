<html>
  <body>
    <!--  The <iframe> (and video player) will replace this <div> tag. -->
    <div id="player"></div>
    <script>
      // This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

     var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '390',
          width: '640',
          videoId: 'bD1gepaUZms', // Get from youtube video URL 
           playerVars: {
            autoplay: 1,       // Auto-play the video on load
            controls: 1,       // Show pause/play buttons 
            showinfo: 1,       // Hide the video title
            modestbranding:1, // Hide the Youtube Logo
            loop: 1,           // Run the video in a loop
            fs: 1,             // Hide the full screen button
            autohide: 1        // Hide video controls when playing
          },
          events: {
            'onReady': function () {  event.target.playVideo();  },
            'onStateChange': function () { }
          }
        });
      }
    </script>