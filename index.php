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
prevNext: true
		});	
	</script>
	
    <script type="text/javascript">
        $(document).ready(function () {
            $('.dropdown-toggle').dropdown();
        });
   </script>
   <script> 
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

            
<h1 style="position: absolute; margin-left: 50%; top: 10%; font-size: 40px;" class="ibnu">
</img>Ibnu Peristiawan Azis</h1> 
<div id="container">	<div style="position: relative; height: 400px;">
		<div id="slider">
			<ul>				
			
				<li>
				<div class="title">
					<h1>BIODATA</h1>
					</div>
					<hr style="width: 100%;">
					<div class="poto" id="bio_img" style="position: absolute;" ><img src="images/me.jpg" style="width: 204px; height: 290px;"></div>
					<div class="sub_bio">
					<table style="padding: 0px; margin: 0px;">
					<tr><td>Full Name  </td><td>  : Ibnu Peristiawan Azis  </td></tr>
					<tr><td> Nick Name  </td><td>  : Ibnu  </td></tr>
					<tr><td> Place, Birth date  </td><td>  : Jakarta, 5 Maret 1991 </td></tr>
					<tr><td> Religion  </td><td>  : Islam </td></tr>
					<tr><td> Hobby  </td><td>  : Programming </td></tr>
					<tr><td></td><td>&nbsp;  Designing </td></tr>
					<tr><td></td><td>&nbsp;  Video editing </td></tr>
					<tr><tr><td></td><td>&nbsp;  Profiler </td></tr>
					<tr><td></td><td>&nbsp;  Bloging </td></tr>
					<tr><td></td><td>&nbsp;  Working Hard </td></tr>
					<tr><td>Height/Weight  </td><td>  : 171 cm / 56kg  </td></tr>
					<tr><td>Marital Status  </td><td>  : Single  </td></tr>
					<tr><td>Location  </td><td>  :&nbsp;Jakarta, Indonesia</td></tr>
					
					</table>
					</div>
					<div class="perintilan" id="bio">
					<a href="http://www.facebook.com/ibnu.p.azis" target="_blank" title="visit my facebook"><img src="images/facebook.png" id="bio_peri"></img></a>
					<a href="https://twitter.com/peristiawanazis" target="_blank" title="visit my twitter"><img src="images/twitter.png" id="bio_peri"></img></a>
					<a href="" target="_blank" title="Get application"><img src="images/android.png" id="bio_peri" style="height: 25px; display: inline;"></img></a>
					</div>
					
					
			
				</li>
				
				<li>
					<div class="title"><h1 style="margin-left: 81%;">EDUCATION</h1></div>
					<div class="poto" style="position: absolute; width: 232px; height: 318px; margin-left: 77%;" ><img src="images/edu_pict.png" style=""></div>
					<hr id="edu" style="width: 100%;">
					<br>
					<div class="sub_bio" id="edukasi" >
							<div class="clear"></div>
							<div class="subjudul"><h4>Elementary School </div>
							<div class="bungkus">
							<div id="gamdes"><img src="images/skul.jpg" >  </div>
							<div class="deskrip"> 
							 SDN Cipinang Besar Utara 11pg / 2003 
							 Jatinegara - Jakarta Timur 
							</div>
							</div>
							   
							 <div class="subjudul"><h4>Junior High School </div>
							 <div class="bungkus">
							 <div id="gamdes"><img src="images/skul.jpg" ></div>
							 <div class="deskrip"> 
							   SMPN 52 Cipinang Muara / 2006 
							   Jatinegara - Jakarta Timur 
							  </div>
							  </div>
							  
							<div class="subjudul"><h4>Senior High School </div>
							<div class="bungkus">
							<div id="gamdes"><img src="images/skul.jpg" ></div>
							<div class="deskrip"> 
							 SMAN 53 Cipinang Besar Utara / 2009 
							 Jatinegara - Jakarta Timur 
							</div>
							</div>

							<div class="subjudul"><h4>University</h4> </div>
							<div class="bungkus">
							<div id="gamdes"><img src="images/ccit.png" style="margin-bottom: 20px;"> </div>
							<div class="deskrip"> 
							 CCIT - FT UI Depok ( NIIT Professional Certification ) / 2011 software engineer <br>
							 web Developer / Mobile Apps Developer <br>
							 Depok - Jawa Barat 
							</div>
							</div>
							
							<div class="subjudul"><h4>University </h4></div>
							<div class="bungkus">
							<div id="gamdes"><img src="images/pnj.png" > </div>
							<div class="deskrip"> 
							 Politeknik Negeri Jakarta / 2012 
							 Teknik Elektro - IT 
							 Depok - Jawa Barat 
							</div>
							</div>
					</div>
					<div class="perintilan_edu" id="edukasi">
					<a href="http://www.ccit.eng.ui.ac.id/" target="_blank" title="Visit CCIT website"><img src="images/ccit.png" id="edukasi_peri"></img></a>
					<a href="http://www.pnj.ac.id/" target="_blank"  title="Visit PNJ website"><img src="images/pnj.png" id="edukasi_peri"></img></a>
					</div>
				</li>
				
				<li>
					<div class="title">
					<h1>SERVICES</h1>
					</div>
					<hr>
					<div class="subjudul"><h4 style="position: relative; right: 9.8%; bottom: 15px;">Web Programming</h4></div>
					<div class="sub_bio"  style="font-size:11.4px; bottom: 15px;" id="skill_table_satu">
					<div class="img_servis">
					<img src="images/pc.png" id="img_ser_satu"></img>
					<img src="images/iphone.png" id="img_ser_dua"></img>
					<img src="images/ipad.png" id="img_ser_tiga"></img>
					</div>
					<div id="gamkil"><img src="images/code.png" style="width: 50px; height: 40px;"> </div>
						<table class="skill_table_satu">
						<tr>
						<td>PHP</td>
						<td>Codeigniter</td>
						<td>JSP</td>
						<td>JQuery</td>
						<td>Ajax</td>
						</tr>
						<tr>
						<td>Javascript</td>
						<td>JSon</td>
						<td>Html</td>
						<td>Css</td>
						<td>Asp</td>
						</tr>
					</table>
					</div>
					
					
					<div class="subjudul"><h4 style="position: relative; right: 9.8%; bottom: 15px;">Mobile Programming</h4></div>
					<div class="sub_bio" style="font-size:11.4px; bottom: 15px;" id="skill_table_tiga">
						<div id="gamkil"><img src="images/phone.png" style="width: 50px; height: 40px;"> </div>
						<table class="">
							<tr><td>Android Developer </td>
							<td>J2ME Developer</td><td>Blackberry Developer </td<tr><td>Windows Phone Developer </td></tr>
						</table>
					</div>
					
					<div class="subjudul"><h4 style="position: relative; right: 9.8%; bottom: 15px;">Software Programming</h4></div>
					<div class="sub_bio"  style="font-size:11.4px; bottom: 15px;" id="skill_table_empat">
						<div id="gamkil"><img src="images/software.png" style="width:50px; height: 40px;ss"> </div>
						<table class="">
							<tr><td> J2EE</td>
							<td> J2SE </td></tr>
							<tr><td> RMI</td>
							<td> VB	 </td></tr>
						</table>
					</div>
					
					<div class="subjudul"><h4 style="position: relative; right: 9.8%; bottom: 15px;">Database Programming</h4></div>
					<div class="sub_bio" style="font-size:11.4px; bottom: 15px;" id="skill_table_lima">
						<div id="gamkil"><img src="images/db.png" style="width: 50px; height: 40px;"> </div>
						<table class="">
							<tr><td> MYSQL</td>
							<td> Oracle </td></tr>
							<tr><td> SQL Server	 </td>
							<td> PostgreSQL	 </td></tr>
						</table>
					</div>
					
					<div class="subjudul"><h4 style="position: relative; right: 9.8%; bottom: 15px;">Design Graphic</h4></div>
					<div class="sub_bio" style="font-size:11.4px; bottom: 15px;" id="skill_table_enam">
						<div id="gamkil"><img src="images/Graphis.png" style="width: 50px; height: 40px;"> </div>
						<table class="">
							<tr>
							<td> Adobe Photoshop</td>
							<td> responsive layouts</td>
							</tr>
							<tr>
							<td>Corel Draw</td>
							<td>  Adobe Flash</td>
							</tr>
						</table>
					</div>
				</li>
				
				
				
				<li>
				<div class="title"><h1 style="margin-left: 79%;">PORTOFOLIO</h1></div>
					<hr id="edu" style="width: 120%;">
					<div class="porto_button">
					<a href="portofolio.pdf" target="_blank" class="sticker" id="porto_button">Visit My Portofolio</a>
					<div class="deskripsi_porto" style="opacitiy: 0.1;">
					<h3>Click the button to get more<h3>
					<h3>My portofolios.<h3>
					</div>
				<div class="porto_link" style="position: absolute; font-size 10px; top: 60%;">
				<a href="email.php?e=1" rel="#overlay" class="sticker2" id="source"  title="source code request" onClick="tulis()">Get Source Code!</a> 
				</div>
				<table class="table_porto" >
				<tr>
				<td><a href="#" title="E-Tilang Application"><img src="images/logo_etilang.png" ><td>
				<td><a href="#" title="Game Benahi Jakarta"><img src="images/logo_benahijakarta.png" ><td>
				<td><a href="#" title="Sisfo. Identifikasi"><img src="images/logo_sim.png" ><td>
				<td><a href="#" title="Diagnos Application"><img src="images/logodiagnos.png" ><td>
				</tr>
				</table>
				</li>
				
				<li>
					<div class="title"><h1 style="margin-left: 84%;">CONTACT</h1></div>
					<div class="poto" style="position: absolute; width: 232px; height: 318px; margin-left: 68%;" ><img src="images/contact.png" style=""></div>
					<hr id="edu" style="width: 100%;">
					<br>
					<div id="tagline"><h2>Reach me for your epic solution,<br> we can fix it ! </h2></div>
					<br><br><br>
					<div class="kontak" style="font-size: 13px; margin-right: 250%; position: relative; margin-top: 3%;">
					<img src="images/mail.png" style="width: 48px; height: 33px; position: absolute;  "></img>
					<div id="kontak_detail" style="position: absolute; float: left; left: 54px; padding: 3px;" >
					ibnuperistiawanazis@yahoo.co.id <br>
					peristiawanazis@gmail.com
					</div>
					</div>
					
					<div class="kontak" style="font-size: 13px; margin-right: 250%; margin-top: 12%;">
					<img src="images/phone.png" style="width: 46px; height: 50px; position: absolute;  "></img>
					<div id="kontak_detail" style="position: absolute; float: left; left: 54px; padding: 3px; " >
					081315927219 <br>
					085691384671 <br>
					27CBD14B
					</div>
					</div>
				<div class="kontak_link" style="font-size 10px;">
				<a href="email.php?e=2" rel="#overlay" class="sticker2" title="Send email">Email me!</a> 
				<a href="https://twitter.com/intent/tweet?screen_name=peristiawanazis" class="sticker2" title="Send me a tweet ">Tweet me!</a>
				<a href="www.facebook.com/ibnu.p.azis" rel="" class="sticker2" title="Facebook friend ">Add me!</a>
				


				</div>
			
				</li>
			</ul>
		</div>
	</div>
	

<div class="copyright" style="text-align: center; margin-top: 13%;">
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
