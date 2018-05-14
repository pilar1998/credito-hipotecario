<!DOCTYPE html>
<html lang="en">
<head>
<title>Prestamo Hipotecario</title>

<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dream Hotel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->

<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
<!-- //online-fonts -->

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js -->
</head>
<body>
<!-- header -->
<div class="header">
	<div class="agile-top-header">
		<div class="logo">
			<h1><a>Prestamo<span>Hipotecario</span></a></h1>
		</div>	
	</div>
</div>
	<!--Slider-->
<div class="slider">
	<div class="callbacks_container">
		<ul class="rslides" id="slider">
			<li>
				<div class="slider-info">							
				</div>
			</li>
			<li>
				<div class="slider-info1">					
				</div>
			</li>
			<li>
				<div class="slider-info2">						
				</div>
			</li>
		</ul>
		
		<div class="modal fade" id="validar" tabindex="-1" role="dialog">
			<!-- Modaldatos -->
				<div class="modal-dialog">
				<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4>Por favor, llena todos los campos</h4>
							<div class="readmore-w3">
								<a class="readmore" href="#" data-dismiss="modal">Aceptar</a>
							</div>										
						</div>
					</div>
				</div>
		</div>
		<div class="modal fade" id="validar2" tabindex="-1" role="dialog">
			<!-- Modaldatos -->
				<div class="modal-dialog">
				<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4>El valor del prestamo supera maximo del prestamo</h4>
							<div class="readmore-w3">
								<a class="readmore" href="#" data-dismiss="modal">Aceptar</a>
							</div>										
						</div>
					</div>
				</div>
		</div>
		<div class="modal fade" id="validar3" tabindex="-1" role="dialog">
			<!-- Modaldatos -->
				<div class="modal-dialog">
				<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4>El valor de la casa debe estar entre $105.000.000 pesos y $340.000.000 pesos</h4>
							<div class="readmore-w3">
								<a class="readmore" href="#" data-dismiss="modal">Aceptar</a>
							</div>										
						</div>
					</div>
				</div>
		</div>
		<div class="modal fade" id="prestamo" tabindex="-1" role="dialog">
			<!-- ModalReserva -->
				<div class="modal-dialog modal-lg">
				<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button  type="button" class="close" data-dismiss="modal">&times;</button>
				            <h4>PRESTAMO</h4>
				            <div id="main"></div>
				            		
						</div>
					</div>
				</div>
		</div>

		
</div>		
		<!--//Slider-->

		<div class="main" >
			<div class="w3layouts_main_grid">
			<div class="booking-form-head-agile">
			<h3>Formulario de Prestamo Hipotecario</h3>
			</div> 		
				<form action="prestamo.php" method="post" class="w3_form_post"  name="formulario" >
					<div class="agileits_w3layouts_main_grid w3ls_main_grid">
						<div class="agileinfo_grid">
						<h3 class="w3_main_grid_left" style="color: white">Valor Casa</h3><h3 style="color: red">*</h3>
							<br>
							<br>
							<div class="agileits_w3layouts_main_gridl">
								<h3 style="color: white">$ <input type="number" name="casa" id="casa" style="color: black" required=""> pesos</h3>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>	
					<div class="agileits_w3layouts_main_grid w3ls_main_grid">
						<div class="agileinfo_grid">
						<h3 class="w3_main_grid_left" style="color: white">Maximo Prestamo</h3><h3 style="color: red"></h3>
							<br>
							<br>
							<div class="agileits_w3layouts_main_gridl">
								<h3 style="color: white">$ <input type="number" name="pres" id="pres" style="color: black" required="" disabled="" value="0"> pesos</h3>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="agileits_w3layouts_main_grid w3ls_main_grid">
						<div class="agileinfo_grid">
						<h3 class="w3_main_grid_left" style="color: white">Valor Prestamo</h3><h3 style="color: red">*</h3>
							<br>
							<br>
							<div class="agileits_w3layouts_main_gridl">
								<h3 style="color: white">$ <input type="number" name="vp" id="vp" style="color: black" required=""> pesos</h3>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="agileits_w3layouts_main_grid w3ls_main_grid">
						<div class="agileinfo_grid">
						<h3 class="w3_main_grid_left" style="color: white">Plazo Credito</h3><h3 style="color: red">*</h3>
							<br>
							<br>
							<div class="agileits_w3layouts_main_gridl">
								<h3 style="color: white"> 

								<select name="plazo" id="plazo" style="color: black">
									<?php
										for($i=5;$i<=20;$i++){
											echo '<option name="plazo" id="plazo" style="color: black">'.$i.'</option>';
										}
									?>
								</select> años</h3>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="w3_main_grid">	
						<div class="w3_main_grid_right">
							<input type="submit" id="button" value="Continuar">
							<button type="button"  data-dismiss="modal" data-toggle="modal" data-target="#validar" id="verificar" style="visibility: hidden">&times;</button>	
							<button type="button"  data-dismiss="modal" data-toggle="modal" data-target="#validar2" id="verificar2" style="visibility: hidden">&times;</button>	
							<button type="button"  data-dismiss="modal" data-toggle="modal" data-target="#validar3" id="verificar3" style="visibility: hidden">&times;</button>	
							<button type="button"  data-dismiss="modal" data-toggle="modal" data-target="#prestamo" id="button1" style="visibility: hidden">&times;</button>									
						</div>
						<div class="clearfix"> </div>
					</div>
				</form>		
			</div>
			
		</div>

</div>

<!-- //header -->


<script type="text/javascript">
	window.onload = (function(){
		try{
		    $("#casa").on('keyup', function(){
		        casa = document.formulario.casa.value;
		        pres=casa*0.7;
		        document.getElementById("pres").value=pres;
		    }).keyup();
		}catch(e){}});
			$('#button').on('click', function(event) {
				event.preventDefault();
					casa = document.formulario.casa.value;
					pres = document.formulario.pres.value;
					vp=document.formulario.vp.value;
					plazo=document.formulario.plazo.value;
					datos="vp="+vp+"&casa="+casa+"&plazo="+plazo;
				if (casa!=''){
					if (vp!=''){
						if (vp<=pres){
							if(casa>105000000 && casa<340000000){
								$.ajax({
									type: "post",
									url:"prestamo.php",
									data: datos,
									success: function(resp){
										$("#main").html(resp);								
									}
								});
								document.getElementById("button1").click();	
							}else{
								document.getElementById("verificar3").click();
							}
							
					}else{
						document.getElementById("verificar2").click();
					}			
						
										
					}else{
						document.getElementById("verificar").click();
					}
				}else{
					document.getElementById("verificar").click();
				}
				
			});
		</script>



<!-- js files -->
	<!-- For-Banner -->
		 <script src="js/responsiveslides.min.js"></script>
		 <script>
			// You can also use "$(window).load(function() {"
			$(function () {
			  $("#slider").responsiveSlides({
				auto: true,
				manualControls: '#slider3-pager',
			  });
			});
		  </script>
	<!-- //For-Banner -->



<!--footer-->
<div class="footer-w3">
	<p>&copy; 2017 Dream Hotel. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
</div>
<!--//footer-->
		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true   // 100% fit in a container
				});
			});		
		</script>
		
		<!-- //script for portfolio -->
	<!-- //For-Gallery-js -->
<!-- for-Testimonials -->
			<!-- required-js-files-->
							<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : false,
							        navigationText :  false,
							        pagination : true,
							      });
							    });
							    </script>
			<!--//required-js-files-->
		<!-- //for-Testimonials -->
<!-- Calendar -->
			<link rel="stylesheet" href="css/jquery-ui.css" />
			<script src="js/jquery-ui.js"></script>
			  <script>
					  $(function() {
						$( "#datepicker,#datepicker1,#diaEntrada1,#diaSalida1" ).datepicker({
							dateFormat: 'yy/mm/dd',
							default: Date()
						});
					  });
			  </script>
		<!-- //Calendar -->
		 <!-- start-smoth-scrolling -->
				<script type="text/javascript" src="js/move-top.js"></script>
				<script type="text/javascript" src="js/easing.js"></script>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
		<!-- start-smoth-scrolling -->



		<!-- smooth scrolling-bottom-to-top -->
				<script type="text/javascript">
					$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
					*/								
					$().UItoTop({ easingType: 'easeOutQuart' });
					});
				</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				<script src="js/SmoothScroll.min.js"></script>



</body>
</html>