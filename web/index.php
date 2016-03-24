<!DOCTYPE html>
<html>
<head>
<title>Vanguardia Magazine</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Express News Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,2); } </script>
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			pager: true,
		  });
		});
	</script>
	<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
</head>
<body>


<!--  logo y  publicidad   -->

	<div class="header">

		<div class="header-bottom">
			<div class="logo" style="margin-left:5px">
				<a href="index.html"><img src="lgo.png"/></a>

              <?php
              require('config.php');
              $query = "SELECT id, imagen, nombre, posicion from publicidad where posicion = 'arriba' ORDER BY rand() limit 1";
              $resultado = $sql->query($query);
              $text = $resultado->fetch_assoc()
              ?>

			    <img style = "margin-left:7%; width: 60%; heigth: 20%" src=" <?php echo $text['nombre']; ?> "/>
			</div>



<!-- categorias  -->
<div class="text-center">
			<div class="navigation">
				<nav class="navbar navbar-default" role="navigation">
		   <div class="wrap">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
			</div>
			<!--/.navbar-header-->
		<div class="text-center">
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					 <li><a href="categorias.php?set=deportes">Deportes </a></li>
					 <li><a href="categorias.php?set=social">Cultura      </a></li>
					 <li><a href="categorias.php?set=gobierno">Vanguardia Hoy  </a></li>
					 <li><a href="categorias.php?set=eventos">Columna      </a></li>
					 <li><a href="categorias.php?set=varios">Varios       </a></li>
			<div class="clearfix"></div>
				</ul>
				<div class="search">
					<!-- start search-->
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!--/.navbar-collapse-->
	 <!--/.navbar-->
			</div>
		</nav>
		</div>
	</div>
</div>
<br/><br/><br/>



<!--  SLIDER -->

  <?php
  require('config.php');
  $query = "SELECT id, imagen, titulo_adentro, titulo_afuera, texto, categoria FROM noticias ORDER BY id DESC LIMIT 4";
  $resultado = $sql->query($query);
  ?>

		<div class="wrap">
			<div class="col-md-8">
				<div class="slider">
					<div class="callbacks_wrap">
						<ul class="rslides" id="slider">
       <?php while($text = $resultado->fetch_assoc()){?>							
							<li>
								<img src=" <?php echo $text['imagen']; ?>" WIDTH=260 HEIGHT=200>
								<div class="caption">
									<a href="single.html"><?php echo $text['titulo_adentro']; ?></a>
								</div>
							</li>
		  <?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>





<!-- PUBLICIDAD DE LA DERECHA  -->



			<div class="col-md-4 side-bar">
			
							<img height="450" src="pd.png" alt="" />
            </div>




<!-- NOTICIAS RECIENTES DE DEPORTES Y CULTURA  -->


<!--Dos noticias de deportes -->
  <?php
  require('config.php');
  $query = "SELECT id, imagen, titulo_adentro, titulo_afuera, texto, categoria FROM noticias WHERE categoria='deportes' ORDER BY id DESC";
  $resultado = $sql->query($query);
  $text = $resultado->fetch_assoc()
  ?>


<div class="sports-top" style="margin-left: 10px">
	<div class="s-grid-left">
		<div class="cricket">
			<header><h3 class="title-head">Deportes</h3></header>

			 <div class="s-grid-small">
					<div class="sc-image">
						<a href="single.html"><img src=" <?php echo $text['imagen']; ?>"/></a>
					</div>
					
					<div class="sc-text">
						<h6>Deportes</h6>
						<a class="power" href="single.html">   <?php echo $text['titulo_adentro']; ?>   </a>
						<a class="reu" href="single.html"><img src="images/more.png" alt="" /></a>
					</div>
					
					<div class="clearfix"></div>
			</div>

<?php $text = $resultado->fetch_assoc();?>
			 <div class="s-grid-small">
					<div class="sc-image">
						<a href="single.html"><img src="<?php echo $text['imagen']; ?>"/></a>
					</div>
					
					<div class="sc-text">
						<h6>Deportes</h6>
						<a class="power" href="single.html">   <?php echo $text['titulo_adentro']; ?>   </a>
						<a class="reu" href="single.html"><img src="images/more.png" alt="" /></a>
					</div>
					
					<div class="clearfix"></div>
			</div>
	    </div>
	</div>

			
<!--Dos noticias de cultura -->

  <?php
  require('config.php');
  $query = "SELECT id, imagen, titulo_adentro, titulo_afuera, texto, categoria FROM noticias WHERE categoria='social' ORDER BY id DESC";
  $resultado = $sql->query($query);
  $text = $resultado->fetch_assoc()
  ?>

	<div class="s-grid-right">
		<div class="cricket">
				<header><h3 class="title-head">Cultura</h3></header>

				<div class="s-grid-small">
					
					<div class="sc-image">
						<a href="single.html"><img src="<?php echo $text['imagen']; ?>" alt="" /></a>
					</div>

					<div class="sc-text">
						<h6>Cultura</h6>
						<a class="power" href="single.html">   <?php echo $text['titulo_adentro']; ?>  </a>
						<a class="reu" href="single.html"><img src="images/more.png" alt="" /></a>
					</div>
					
					<div class="clearfix"></div>
				
				</div>
				
<?php $text = $resultado->fetch_assoc();?>
				<div class="s-grid-small">
					<div class="sc-image">
						<a href="single.html"><img src="<?php echo $text['imagen']; ?>" alt="" /></a>
					</div>
					
					<div class="sc-text">
						<h6>Cultura</h6>
						<a class="power" href="single.html">   <?php echo $text['titulo_adentro']; ?>  </a>
						<a class="reu" href="single.html"><img src="images/more.png" alt="" /></a>
					</div>
					
					<div class="clearfix"></div>
				</div>
		</div>
	</div>
				
				<div class="clearfix"></div>
</div>
						  



<!-- NOTICIAS DE VANGUARDIA Y COLUMNA  -->



<!-- DOS NOTICIAS DE VANGUARDIA -->

  <?php
  require('config.php');
  $query = "SELECT id, imagen, titulo_adentro, titulo_afuera, texto, categoria FROM noticias WHERE categoria='gobierno' ORDER BY id DESC";
  $resultado = $sql->query($query);
  $text = $resultado->fetch_assoc()
  ?>

<div class="sports-top" style="margin-left: 10px">
	<div class="s-grid-left">
		<div class="cricket">
			<header><h3 class="title-head">Vanguardia Hoy</h3></header>

			 <div class="s-grid-small">
					<div class="sc-image">
						<a href="single.html"><img src=" <?php echo $text['imagen']; ?>  " alt="" /></a>
					</div>
					
					<div class="sc-text">
						<h6>Vangurdia Hoy</h6>
						<a class="power" href="single.html"><?php echo $text['titulo_adentro']; ?></a>
						<a class="reu" href="single.html"><img src="images/more.png" alt="" /></a>
					</div>
					
					<div class="clearfix"></div>
			</div>

	<?php $text = $resultado->fetch_assoc();?>		

			 <div class="s-grid-small">
					<div class="sc-image">
						<a href="single.html"><img src="<?php echo $text['imagen']; ?>   " alt="" /></a>
					</div>
					
					<div class="sc-text">
						<h6>Vanguardia Hoy</h6>
						<a class="power" href="single.html"><?php echo $text['titulo_adentro']; ?></a>
						<a class="reu" href="single.html"><img src="images/more.png" alt="" /></a>
					</div>
					
					<div class="clearfix"></div>
			</div>
	    </div>
	</div>

			
<!--  DOS NOTICIAS DE COLUMNA    -->

  <?php
  require('config.php');
  $query = "SELECT id, imagen, titulo_adentro, titulo_afuera, texto, categoria FROM noticias WHERE categoria='eventos' ORDER BY id DESC";
  $resultado = $sql->query($query);
  $text = $resultado->fetch_assoc()
  ?>



	<div class="s-grid-right">
		<div class="cricket">
				<header><h3 class="title-head">Columna</h3></header>

				<div class="s-grid-small">
					
					<div class="sc-image">
						<a href="single.html"><img src=" <?php echo $text['imagen']; ?>   " alt="" /></a>
					</div>

					<div class="sc-text">
						<h6>Columna</h6>
						<a class="power" href="single.html"> <?php echo $text['titulo_adentro']; ?>  </a>
						<a class="reu" href="single.html"><img src="images/more.png" alt="" /></a>
					</div>
					
					<div class="clearfix"></div>
				
				</div>
				
<?php $text = $resultado->fetch_assoc();?>		

				<div class="s-grid-small">
					<div class="sc-image">
						<a href="single.html"><img src="<?php echo $text['imagen']; ?>  " alt="" /></a>
					</div>
					
					<div class="sc-text">
						<h6>football</h6>
						<a class="power" href="single.html"><?php echo $text['titulo_adentro']; ?></a>
						<a class="reu" href="single.html"><img src="images/more.png" alt="" /></a>
					</div>
					
					<div class="clearfix"></div>
				</div>
		</div>
	</div>
				
				<div class="clearfix"></div>
</div>




<!--NOTICIAS DE VARIOS Y VIDEOS-->



<!--Dos noticias de varios -->


<?php
  require('config.php');
  $query = "SELECT id, imagen, titulo_adentro, titulo_afuera, texto, categoria FROM noticias WHERE categoria='varios' ORDER BY id DESC";
  $resultado = $sql->query($query);
  $text = $resultado->fetch_assoc()
  ?>


<div class="sports-top" style="margin-left: 10px">
	<div class="s-grid-left">
		<div class="cricket">
			<header><h3 class="title-head">Varios</h3></header>

			 <div class="s-grid-small">
					<div class="sc-image">
						<a href="single.html"><img src="<?php echo $text['imagen']; ?> " alt="" /></a>
					</div>
					
					<div class="sc-text">
						<h6>Varios</h6>
						<a class="power" href="single.html"><?php echo $text['titulo_adentro']; ?></a>
						<a class="reu" href="single.html"><img src="images/more.png" alt="" /></a>
					</div>
					
					<div class="clearfix"></div>
			</div>

<?php $text = $resultado->fetch_assoc();?>		

			 <div class="s-grid-small">
					<div class="sc-image">
						<a href="single.html"><img src="<?php echo $text['imagen']; ?> " alt="" /></a>
					</div>
					
					<div class="sc-text">
						<h6>Varios</h6>
						<a class="power" href="single.html"><?php echo $text['titulo_adentro']; ?> </a>
						<a class="reu" href="single.html"><img src="images/more.png" alt="" /></a>
					</div>
					
					<div class="clearfix"></div>
			</div>
	    </div>
	</div>


<!--Dos videos recientes-->			


	<div class="s-grid-right">
		<div class="cricket">
				<header><h3 class="title-head">Videos</h3></header>

				<div class="s-grid-small">
					
					<div class="sc-image">
						<a href="single.html"><img src="images/fcrt2.jpg" alt="" /></a>
					</div>

					<div class="sc-text">
						<h6>football</h6>
						<a class="power" href="single.html">international football Council out of World Cup</a>
						<p class="date">On May 01, 2015</p>
						<a class="reu" href="single.html"><img src="images/more.png" alt="" /></a>
					</div>
					
					<div class="clearfix"></div>
				
				</div>
				

				<div class="s-grid-small">
					<div class="sc-image">
						<a href="single.html"><img src="images/fcrt3.jpg" alt="" /></a>
					</div>
					
					<div class="sc-text">
						<h6>football</h6>
						<a class="power" href="single.html">international football Council out of World Cup</a>
					    <p class="date">On Feb 10, 2015</p>
						<a class="reu" href="single.html"><img src="images/more.png" alt="" /></a>
					</div>
					
					<div class="clearfix"></div>
				</div>
		</div>
	</div>
				
				<div class="clearfix"></div>
</div>







					<div class="clearfix"></div>


			<div class="col-md-4 side-bar">
			<div class="first_half">
				<div class="list_vertical"></div>
			</div>
					<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
	<div class="footer">
		<div class="footer-bottom">
			<div class="wrap">
				<div class="copyrights col-md-6">
					<p> © 2016 Vanguardia Magazine | WebMaster <a href="http://w3layouts.com/">@SrAlfred</a></p>
				</div>
				<div class="footer-social-icons col-md-6">
					<ul>
						<li><a class="facebook" href="#"></a></li>
						<li><a class="twitter" href="#"></a></li>
						<li><a class="googleplus" href="#"></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>







</html>