
<style type="text/css">
*{margin:0;padding:0;}
body
{
	background:#fff;
}
img
{
	width:200;
	height:160;
	box-shadow:0px 0px 10px #cecece;
		
}
img:hover
{
	 box-shadow: 15px 15px 15px #dcdcdc;
	-moz-transform: scale(0.8);
	-moz-transition-duration: 0.6s;
	-webkit-transition-duration: 0.6s;
	-webkit-transform: scale(0.8);
	
	-ms-transform: scale(0.8);
	-ms-transition-duration: 0.6s;
	
}

</style>
</head>
<body>

  <?php
$folder_path = 'cam1/2017-05-25/'; //image's folder path

$num_files = glob($folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);

$folder = opendir($folder_path);
 
if($num_files > 0)
{
	while(false !== ($file = readdir($folder))) 
	{
		$file_path = $folder_path.$file;
		$extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
		if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp') 
		{
			?>
            <a href="<?php echo $file_path; ?>"><img src="<?php echo $file_path; ?>"   /></a>
            <?php
		}
	}
}
else
{
	echo "the folder was empty !";
}
closedir($folder);
?>

</div>
</body>
</html>