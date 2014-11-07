<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title></title>
<!-- 	
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
 -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.mobile.flatui.css" />
	<link rel="stylesheet" type="text/css" href="css/chic.hotel.css" />
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" /> -->
	<script src="js/jquery.js"></script>
	<script src="js/jquery.mobile-1.4.0-rc.1.js"></script>
	<link rel="stylesheet" href="owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="owl-carousel/owl.theme.css">
	<script src="owl-carousel/owl.carousel.js"></script>
	<link rel="stylesheet" href="magnific-popup/magnific-popup.css"> 
	<script src="magnific-popup/jquery.magnific-popup.js"></script> 
	

</head>
<body>
<?php
	$background=array("#FFFFFF","#2DA5DA","#5B5B5B","#1861BD","#CED2D5","#4CA500","#B91434","#103F51","#CDA801","#4027A6","#E44D14","#AF1E57","#FFFFFF","#0E2127","#000000");
	$societe=array("Home","Bourgeois","Hasap","Concept U Wall","Classhotel","Des Impressions Des hommes","Mignola","MH3 Design","Mirima","SIP","TPV Partners","Louss","Avion","Train","Taxi","Chic");
	$transition[0]=$transition[7]="flow";
	$transition[1]=$transition[8]="slideup";
	$transition[2]=$transition[9]="slidedown";
	$transition[3]=$transition[10]="pop";
	$transition[4]=$transition[11]="fade";
	$transition[5]=$transition[12]="flip";
	$transition[6]=$transition[13]="flow";
for ($i=1; $i <=15 ; $i++) { 
	$text[$i]="
	Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
	";
}
$text[2]="
Le groupe HASAP réunit les ressources et les savoirs faire de 6 entreprises considérées comme des agenceurs de référence sur leur marchés respectifs: aménagement de sièges sociaux, grands projets, hôtellerie, muséographie, centre commerciaux...
Deux des entreprises du Groupe sont particulièrement dédiées au secteur de l'hôtellerie:
L'entreprise BURIE, située près de Lille, avec plus de 2000 réalisations depuis 1996, est un des leaders dans le dommaine de l'agencement pour l'hôtellerie économique (du 1* au 3*). Ses équipes sont reconnues pour leur grande fiabilité aussi bien dans l'equipement des chambres que dans l'aménagement des services généraux.
L'entreprise CBA MONTAGNE, près de Chambéry, est un spécialiste des habitats de prestige. Ses références récentes (Menuiserie et Agencement de l'hotel 5* l'Apogée à Courchevel, Château de Bagnols) illustrent pleinement son savoir-faire.
";

?>
<!-- Start of first page: #one -->
<div data-role="page" id="home">

	<div data-role="header">
		<h1>Home</h1>
	</div><!-- /header -->

	<div data-role="content" class="canard" >	

		<div style="text-align:center;width:100%">
		 	<div class="row row-centered">
		 		<?php 
		 		for ($i=1; $i <= 11 ; $i++) { 
		 			echo'<a href="#societe'.$i.'" data-transition="'.$transition[$i].'"><div class="col-md-4 col-centered logo-home" style="background:'.$background[$i].'"><img src="logos/logo-'.$i.'-w.png" class="logos"></div></a>';
		 		}
		 		?>
				<a href="#societe1" data-transition="<?php echo $transition[$i];?>"><div class="col-md-4 col-centered logo-home" style="background:#FFFFFF;"><img src="design/plane-canard.png" class="icon"><img src="design/train-canard.png" class="icon"><img src="design/taxi-canard.png" class="icon"></div></a>
				<a href="#societe1" data-transition="<?php echo $transition[$i];?>"><div class="col-md-4 col-centered logo-home" style="background:#0E2127;"><img src="logos/logo-chic-w.png" class="logos"></div></a>
			</div>
		</div>

	</div><!-- /content -->

	<div data-role="footer" data-position="fixed">
		<h1>TPV PARTNERS &copy; 2014</h1>
	</div>	
</div><!-- /page one -->


<!-- Start société 1  -->
<?php 
for ($i=1; $i <= 11 ; $i++) { 
?>
<div data-role="page" id="societe<?php echo $i;?>" data-theme="a">
	<div data-role="header" data-theme="a" style="background:<?php echo $background[$i];?>">
		<h1><?php echo $societe[$i];?></h1>
		<a href="#home" data-icon="home" data-transition="<?php echo $transition[$i];?>" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="#societe<?php echo $i+1;?>" data-icon="arrow-r" data-transition="flow" data-iconpos="notext">Suivant</a>
	</div><!-- /header -->

	<div data-role="content" class="canard" >	

		<!-- <div style="width:80%;margin : 0 auto"> -->
		<div style="width:100%;max-width:1000px;margin : 0 auto">

				<a href="#home" data-direction="reverse" data-transition="<?php echo $transition[$i];?>"><div style="background:<?php echo $background[$i];?>;float:left;border: 5px solid #0E2127;width:33.33%;text-align:center;height:200px;line-height:200px"><img src="logos/logo-<?php echo $i;?>-w.png" class="logos" style="max-width: 100%"></div></a>
				<div style="background:<?php echo $background[12];?>;float:left;border: 5px solid #0E2127;width:66.66%;height:200px;padding:10px;padding-left:50px">
					<!-- <div id="carousel-<?php //echo $i;?>" class="gallery"> -->
					<div id="carousel-<?php echo $i;?>" class="gallery">
					  <div class="item"><a href="photos/burie-hasap/full/burie-hasap-1.jpg" data-transition="pop" data-rel="dialog" class="test-popup-link"><img src="photos/burie-hasap/burie-hasap-1.jpg" alt=""></a></div>
					  <div class="item"><a href="photos/burie-hasap/full/burie-hasap-2.jpg" data-transition="pop" data-rel="dialog" class="test-popup-link"><img src="photos/burie-hasap/burie-hasap-2.jpg" alt=""></a></div>
					  <div class="item"><a href="photos/burie-hasap/full/burie-hasap-3.jpg" data-transition="pop" data-rel="dialog" class="test-popup-link"><img src="photos/burie-hasap/burie-hasap-3.jpg" alt=""></a></div>
					  <div class="item"><a href="photos/burie-hasap/full/burie-hasap-4.jpg" data-transition="pop" data-rel="dialog" class="test-popup-link"><img src="photos/burie-hasap/burie-hasap-4.jpg" alt=""></a></div>
					  <div class="item"><a href="photos/burie-hasap/full/burie-hasap-5.jpg" data-transition="pop" data-rel="dialog" class="test-popup-link"><img src="photos/burie-hasap/burie-hasap-5.jpg" alt=""></a></div>
					  <div class="item"><a href="photos/burie-hasap/full/burie-hasap-6.jpg" data-transition="pop" data-rel="dialog" class="test-popup-link"><img src="photos/burie-hasap/burie-hasap-6.jpg" alt=""></a></div>
					  <div class="item"><a href="photos/burie-hasap/full/burie-hasap-7.jpg" data-transition="pop" data-rel="dialog" class="test-popup-link"><img src="photos/burie-hasap/burie-hasap-7.jpg" alt=""></a></div>
					</div>
				</div>

				<div style="background:#CED2D5;float:left;border: 5px solid #0E2127;width:100%">
				</div>

				<div style="background:#CED2D5;float:left;border: 5px solid #0E2127;width:50%">
					
					<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' width='100%' height='300' id='single1' name='single1'>
					<param name='movie' value='http://www.tpvpartners.fr/videos/player.swf'>
					<param name='allowfullscreen' value='true'>
					<param name='allowscriptaccess' value='always'>
					<param name='wmode' value='transparent'>
					<param name='flashvars' value='file=http://www.tpvpartners.fr/chic-hotel/videos/toripro.mp4&image=videos/preview.gif&frontcolor=000000&lightcolor=cc9900&screencolor=CED2D5&skin=videos/skins/stormtrooper/stormtrooper.zip&autostart=true'>
					<embed
					type='application/x-shockwave-flash'
					id='single3'
					name='single3'
					src='http://www.tpvpartners.fr/videos/player.swf'
					width='100%'
					height='300'
					bgcolor='undefined'
					allowscriptaccess='always'
					allowfullscreen='true'
					wmode='transparent'
					flashvars='file=http://www.tpvpartners.fr/chic-hotel/videos/toripro.mp4&image=videos/preview.gif&frontcolor=000000&lightcolor=cc9900&screencolor=CED2D5&skin=videos/skins/stormtrooper/stormtrooper.zip&autostart=true'
					/>
					</object>

 <!-- 
					<video width="100%" height="300" autoplay>
					<source src="http://www.tpvpartners.fr/chic-hotel/videos/toripro.mp4" type="video/mp4" />
					Your browser does not support the video tag.
					</video>
 -->
 				</div>
				<div style="background:<?php echo $background[$i];?>;float:left;border: 5px solid #0E2127;width:50%;height:315px;color:#FFF;padding:10px"><?php echo $text[$i]; ?></div>
				<div style="clear:both"></div>
<!-- 				
				<div style="background:#B91434;float:left;border: 5px solid #0E2127;width:33.33%">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page</div>
				<div style="background:#103F51;float:left;border: 5px solid #0E2127;width:33.33%">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page</div>
				<div style="background:#CDA801;float:left;border: 5px solid #0E2127;width:33.33%">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page</div>
				<div style="clear:both"></div>
				

 				<div style="background:#4027A6;float:left;border: 5px solid #0E2127;width:25%">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page</div>
				<div style="background:#E44D14;float:left;border: 5px solid #0E2127;width:25%">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page</div>
				<div style="background:#AF1E57;float:left;border: 5px solid #0E2127;width:25%">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page</div>
				<div style="background:#4027A6;float:left;border: 5px solid #0E2127;width:25%">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page</div>

 -->
 				<div style="background:#0E2127;float:left;border: 5px solid #0E2127;width:50%"></div>
 				<div style="background:#0E2127;float:left;border: 5px solid #0E2127;width:50%;text-align:right">
 					<a href="#popup-<?php echo $i;?>" data-transition="pop" data-rel="dialog"><i class="fa fa-envelope-o fa-3x" style="color:<?php echo $background[$i];?>"></i></a>&nbsp;&nbsp;
 					<a href="#popup-<?php echo $i;?>" data-transition="pop" data-rel="dialog"><i class="fa fa-twitter fa-3x" style="color:<?php echo $background[$i];?>"></i></a>&nbsp;&nbsp;
 					<a href="#popup-<?php echo $i;?>" data-transition="pop" data-rel="dialog"><i class="fa fa-facebook-square fa-3x" style="color:<?php echo $background[$i];?>"></i></a>&nbsp;&nbsp;
 					<a href="design/qr-code-pedrowill.png" data-transition="pop" data-rel="dialog" class="test-popup-link"><i class="fa fa-android fa-3x fa-spin" style="color:<?php echo $background[$i];?>"></i></a>&nbsp;&nbsp; 					
 				</div>
				<!-- <i class="fa fa-envelope-o fa-5x fa-spin" style="color:white"> -->

		</div>

	</div><!-- /content -->

<script type="text/javascript">
$(document).ready(function() {
 
  $("#carousel-<?php echo $i;?>").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      items : 2,
      itemsDesktop : [1199,2],
      itemsDesktopSmall : [979,2],
      pagination : false,
      autoHeight : true

  });
 
});
</script>	

<script type="text/javascript">
	$(document).ready(function() {
		$('.gallery').each(function() { // the containers for all your galleries
		    $(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		          enabled:true
		        }
		    });
		}); 
	});
</script>
<!-- 
<script type="text/javascript">
$(document).ready(function() {
  	$('.image-link').magnificPopup({type:'image'});
	$('.test-popup-link').magnificPopup({ 
	  type: 'image'
		// other options
	});  
});
</script>

 -->










</div><!-- / société 1  -->

<!-- Start of third page: #popup -->
<div data-role="page" id="popup-<?php echo $i;?>" data-theme="a" style="background:<?php echo $background[$i];?>">

	<div data-role="header" data-theme="a" style="background:<?php echo $background[$i];?>">
		<h1><?php echo $societe[$i];?></h1>
	</div><!-- /header -->

	<div data-role="content" data-theme="d">	
		<h2>Contactez-nous</h2>
			<p style="color:<?php echo $background[$i];?>">
				<?php echo $societe[$i];?><br>	
				Adresse<br>
				Téléphone<br>
				Facebook<br>
				Email<br>
				<a href="#" data-rel="back"><i class="fa fa-arrow-circle-o-left fa-3x" style="color:<?php echo $background[$i];?>"></i></a></p>	
	</div><!-- /content -->
	
</div><!-- /page popup -->

<!-- Start of third page: #image -->
<div data-role="page" id="image-<?php echo $i;?>" data-theme="a" style="background:<?php echo $background[$i];?>">

	<div data-role="header" data-theme="a" style="background:<?php echo $background[$i];?>">
		<h1><?php echo $societe[$i];?></h1>
	</div><!-- /header -->

	<div data-role="content" data-theme="d" style="width:1000px">	
		<h2>Contactez-nous</h2>
			<p style="color:<?php echo $background[$i];?>">
				<img src="photos/burie-hasap/full/burie-hasap-1.jpg" style="max-width:1000px">
				<a href="#" data-rel="back"><i class="fa fa-arrow-circle-o-left fa-3x" style="color:<?php echo $background[$i];?>"></i></a></p>	
	</div><!-- /content -->
	
</div><!-- /page image -->

<?php }?>


</body>
</html>