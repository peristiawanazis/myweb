<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Ibnu </title>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />    
	<link rel="STYLESHEET" type="text/css" href="css/style.css">
	<link rel="STYLESHEET" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/overlay-applenya.css"> 
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="js/jquery.tools.min.js"></script>
	<script type="text/javascript" src="js/jquery.sudoSlider.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-dropdown.js"></script>
	<script src="js/bootstrap-tooltip.js"></script>
			
            <script type="text/javascript">
              $(document).ready(function () {
                $("a").tooltip({
                  'selector': '',
                  'placement': 'bottom'
                });
                
              });
            </script>
			
	<script type="text/javascript">
		$(document).ready(function(){	
			var sudoSlider = $("#slider").sudoSlider();
		});	
	</script>
	
    <script type="text/javascript">
        $(document).ready(function () {
            $('.dropdown-toggle').dropdown();
        });
   </script>
  ? <script> 
   !function(d,s,id){
   var js,fjs=d.getElementsByTagName(s)[0];
   if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";
   fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
   </script>
   
   <script type="text/javascript">
	function tulis(){
	var content = "Blablalala";
	$.ajax({
       url: 'email.php',
       type: 'POST',
       data: { mytext : content },
       success:function(data){
 $('#humel').append(data);
}
    });
	
	
	}
	</script>

</head>
<body>
<div class="topbar">	
<div class="topbar-inner">	

			<ul class="nav" style="text-decoration: none; top: 4px;">
                  <li class="dropdown" id="accountmenu">
                      <a class="dropdown-toggle" href="#" ><img src="images/arrow.png" class="arrow">  </a>
                        <ul class="dropdown-menu">
                            <li><a href="">Company</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Paper</a></li>
							<li class="divider"></li>
							<li><a href="#">Journal</a></li>
							<li><a href="#">Blog</a></li>
                        </ul>
                    </li>
                </ul>
			</div>
			</div>
            
<h1 style="position: absolute; margin-left: 50%; top: 10%; font-size: 40px;" class="ibnu">
</img>Ibnu Peristiawan Azis</h1> 
<br><br>

<div id="container">	
<div style="position: relative; height: 400px; margin-right: 26px;">
		<img src="images/lemari.jpg" style="width: 103%; height: 99%; position: absolute;">
		<div class="lemari">
		<div id="slider">
			<ul>				
			
				<li>
				<table style="margin-top: 100px;">
				<tr>
				<td><img src="images/btn_next1.gif" /></td>
				<td><img src="images/btn_next1.gif" /></td>
				<td><img src="images/btn_next1.gif" /></td>
				<td><img src="images/btn_next1.gif" /></td>
				</table>	
				</li>
				
		
				
				<li>
					<tr>
				<td><img src="images/btn_next1_hover.gif" /></td>
				<td><img src="images/btn_next1_hover.gif" /></td>
				<td><img src="images/btn_next1_hover.gif" /></td>
				<td><img src="images/btn_next1_hover.gif" /></td>
				</table>
				</li>
				
				
				

				</div>
		
				</li>
			</ul>
		</div>
	</div>
	

<div class="copyright" style="text-align: center; margin-top: 1%;">
Created  &copy; 2010 Designed By Ibnu Peristiawan Azis
</div>	
	
<div class="apple_overlay" id="overlay">
<div id="head_overlay"></div>
<!-- the external content is loaded inside this tag -->
<div class="contentWrap"></div>
</div>
<script>
  $(function() {
       $("a[rel]").overlay({mask: '#656262', effect: 'apple', 
	   
onBeforeLoad: function() {

// grab wrapper element inside content
var wrap = this.getOverlay().find(".contentWrap");

// load the page specified in the trigger
wrap.load(this.getTrigger().attr("href"));}});
    });
</script>
</body>
</html>