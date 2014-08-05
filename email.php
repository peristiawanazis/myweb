<html>
<head>
<link rel="STYLESHEET" type="text/css" href="css/isi_overlay.css">
<script type="text/javascript" src="js/jquery.min.js"></script>


	
</script>

</head>
<body>
<form action="mailform.php" method="post"> 
<? $e = $_GET['e']; ?>
 <?php 
 if($e == 1) { echo "<h1><div id='humel'>What source code do you want?!  </div> </h1>"; }
 if($e == 2) { echo "<h1><div id='humel'>Email Me !</div> </h1>"; }
?>
<table>
<tr><td>From<td><td><input type="text" name="aaaa" id="aaaa"></td></tr>
<tr><td><?php if($e == 1) { echo "Sourcecode"; } ?><?php if($e == 2) { echo "Subject"; } ?><td><td><input type="text"></td></tr>
<tr><td>Message :</td></tr>
</table>
<textarea name='message' rows='10' cols='30' style="margin-left: 2px;"></textarea><br><br>
<div class="footer">
<input type="button" value="submit" class="button" />
</div> 	
</form>

</body>
</html>
