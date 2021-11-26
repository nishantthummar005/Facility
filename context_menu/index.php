<html>
<head>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
 
        function ShowMenu(control, e) {
            var posx = e.clientX +window.pageXOffset +'px'; //Left Position of Mouse Pointer
            var posy = e.clientY + window.pageYOffset + 'px'; //Top Position of Mouse Pointer
            document.getElementById(control).style.position = 'absolute';
            document.getElementById(control).style.display = 'inline';
            document.getElementById(control).style.left = posx;
            document.getElementById(control).style.top = posy;           
        }
        function HideMenu(control1,control2) {
            document.getElementById(control1).style.display = 'none'; 
            document.getElementById(control2).style.display = 'none'; 
        }
       
</script>

<style>
    
    body{
        background: #eee;
    }
    ul{
        padding: 0;margin: 0
    }
    ul li{
        list-style:none;
        padding:10px;
        border-left:5px solid #fff;
        border-bottom: 1px solid #eee;
    }
    ul li:hover{
        background: #eee;
        border-left:5px solid #555;
    }
    ul li a{
        color:black;
        text-decoration:none;
    }
    #contextMenu1,#contextMenu2{
        background:white;
        box-shadow: 0 0 10px #555;
        padding:10px;
        width: 200px;
    }
    #menu{
        font-size: 20px;
    }
    img{
        margin-right: 30px;
    }
</style>
</head>
<body oncontextmenu="return false" onclick="HideMenu('contextMenu1','contextMenu2');">
    <br><br>
    <div align="center" id="menu">
        Right Click On The Image For Open Menus
        <bR><br>
        
        <img src="a.jpg" width="200" oncontextmenu="ShowMenu('contextMenu1',event);"  /> <img src="c.jpg" width="200" oncontextmenu="ShowMenu('contextMenu2',event);" /> 
        
    </div>
         


<div id="contextMenu1" style="display:none">
	<ul>
		<li><a href="a.jpg" target="_blank">View Image</a></li>
		<li><a href="a.jpg" target="_blank" download>Download</a></li>
		<li><a href="" target="_blank">Share</a></li>
                <li><a href="" target="_blank">View Details</a></li>
                <li><a href="" target="_blank">Remove</a></li>
	</ul>
	</div>
    
    <div id="contextMenu2" style="display:none">
	<ul>
		<li><a href="c.jpg" target="_blank">View Image</a></li>
		<li><a href="c.jpg" target="_blank" download>Download</a></li>
		<li><a href="" target="_blank">Share</a></li>
                <li><a href="" target="_blank">View Details</a></li>
                <li><a href="" target="_blank">Remove</a></li>
	</ul>
	</div>
</body>
</html>