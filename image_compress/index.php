<?php
function compress($source, $destination, $size) {
        
		$info = getimagesize($source);
        
        ini_set('memory_limit', '-1');
		if ($info['mime'] == 'image/jpeg') 
			$image = imagecreatefromjpeg($source);

		elseif ($info['mime'] == 'image/gif') 
			$image = imagecreatefromgif($source);

		elseif ($info['mime'] == 'image/png') 
			$image = imagecreatefrompng($source);
        
        if($size >= 4)
            $quality=20;
        else if($size >= 3)
            $quality=30;
        else if($size >= 2)
            $quality=70;
        else if($size >= 1)
            $quality=90;
        else
            $quality=100;
        
		imagejpeg($image, $destination, $quality);

		return $destination;
}
if(isset($_REQUEST['upload']))
{
    $size=(($_FILES['file']['size']/1024)/1024);
    if($size >= 5)
    {
       echo $er="File must be less the 5 MB";
    }
    else
    {
	    $destination = 'image/file.jpg';
        move_uploaded_file($_FILES['file']['tmp_name'],$destination);
        $d = compress($destination, $destination, $size);
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="file" />
            <button name="upload">upload</button>
        </form>
    </body>
</html>
