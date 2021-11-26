<html>
    <head>
        <script src='text_to_speech.js' type="text/javascript"></script>
    </head>
    <body>
        <style>
            .txt{
                margin-top: 12%;
                font-size: 20px;
                padding: 10px;
                width: 50%;
            }
            .btn{
                padding: 10px;
                background: #e94e38;
                border:none;
                cursor: pointer;
                color: white;
                width: 200px;
                font-size: 20px;
            }
        </style>
    <center>
        <form method="post">
            <br><bR>
            <h1>Text to Speech Converter</h1>
            <input type="text" id="txt" placeholder="Enter Anything" class="txt" autofocus=""/>
            <bR><br>
            <input onclick="responsiveVoice.speak(document.getElementById('txt').value);" type='button' value='Play' class="btn" />
        </form>
    </center>    
    </body>
</html>