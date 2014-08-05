<html>
<title>
Not Found
</title>
<head>
	<link rel="STYLESHEET" type="text/css" href="css/style.css">
	<link rel="STYLESHEET" type="text/css" href="css/bootstrap.css">
<style>
.tengah {
position: relative;
margin-left: 30%;
margin-top: 13%;
padding: 0px;
}

.copyright {
left: 20%;
bottom: 2%;
}

.deskripsi_porto {
position: absolute;
left: 31%;
top: 50%;
}

span {
color: red;
}

</style>
</head>
<div class="tengah" >
<h3 style="font-size: 100px; line-height: 85px;">
THANKGOD<span>404</span> <BR>
I FOUND YOU
</h3>
</div>
<?php $a = "/ibnu" ?>
<?php $server = "{$_SERVER['SERVER_NAME']}:8080$a" ?>
<?php $host = $_SERVER['HTTP_HOST']; ?>
<? $script = $_SERVER['SCRIPT_NAME']; ?>
<div class="deskripsi_porto" style="opacitiy: 0.1;">
					<h3>what do you want. why you type <span><?php echo "{$_SERVER['REQUEST_URI']}"; ?> </span>, go <a href="<?php echo "$a"; ?>" target = "_self">home ! </a><h3>
						<? echo $host ; ?>
</div>

<div class="copyright" style="text-align: center;">
Created  &copy; 2010 Designed By Ibnu Peristiawan Azis
</div>	
</body>
</html>
