<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Audio Player</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }
        .container {
            max-width: 50%;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 50px;
        }
        h1 {
            font-size: 54px;
            color: #333;
            margin: 30px 0 10px;
        }
        h2 {
            font-size: 22px;
            color: #555;
        }
        h3 {
            font-size: 24px;
            color: #555;
        }
        a {
            color: #08c;
            text-decoration: none;
        }
        p {
            font-size: 18px;
        }
    </style>
</head>
<body bgcolor="#dfdfdf">
    
        
    <div class="container">
        <h1>Audio Player</h1>
        <bR>
        <h3>Normal Player</h3>
        <div id="player1" class="aplayer"></div>
        <br><br>
        <hr />
        <br>
        <h3>Player with playlist</h3>
        <div id="player4" class="aplayer" ></div>
        
         
        
    </div>
    <script src="../dist/APlayer.min.js"></script>
    <script src="demo.js"></script>
</body>
</html>