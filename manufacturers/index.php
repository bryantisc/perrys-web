<html>
	<head>
		<?php include '../template-parts/meta.php'; ?>
		<title>Manufacturers at Perry's Home Furnishings & Design</title>
		<style type="text/css">
			.splash{
				background-image: none;
				background-color: white;
				color: black;
				justify-content: flex-start;
				margin-top: 34px;
				height: auto;
			}
			
			#splash-branding h1, #splash-branding p{
				color:black;
				text-shadow: none;
			}

			#splash-branding p:first-of-type{
				border-top: solid #000;
			}
			
			#splash-branding img{
				width: auto;
			}

		</style>	
	</head>
	<body>
		<header class="site-header">
			<?php $location = "man";
				  include '../template-parts/site-header.php'; ?>
		</header>
	
		
		
		<div id="content" class="wrapper">
			<div class="splash">
				<div id="splash-branding">
					<h1>Manufacturers</h1>
					<div class="flex-container">
						<div class="column item">
							<a href="http://flexsteel.com">
								<img src="../img/vendors/logos/flex.png" alt="Flexsteel" class='item'>
							</a>
							<a href="http://lazboy.com">
								<img src="../img/vendors/logos/laz.png" alt="La-z-boy" class='item'>
							</a>
						</div>
						<a href="http://www.magnoliahomefurniture.com/" class='item'>
							<img src="../img/vendors/logos/mag.png" alt="Magnolia Home" class='item'>
						</a>
						<div class="column item">
							<a href="http://www.kingkoil.com/catalog/mattress/laura-ashley/c-25/c-86">
								<img src="../img/vendors/logos/la.png" alt="Laura Ashley" class='item'>
							</a>
							<a href="http://www.kingkoil.com/catalog/mattress/world-luxury/c-25/c-83">
								<img src="../img/vendors/logos/wl.png" alt="World Luxury" class='item'>
							</a>
						</div>
					</div>
					<div class="flex-container">
							<a href="http://shopfourseasonsfurniture.com/">
								<img src="../img/vendors/logos/fs.png" alt="Four Seasons Furniture" class='item'>
							</a>
							<a href="http://puretalalaybliss.com/">
								<img src="../img/vendors/logos/plb.jpg" alt="Pure Latex Bliss | Pure Talalay Bliss" class='item'>
							</a>
							<a href="https://www.besthf.com/besthf/Furniture/Home">
								<img src="../img/vendors/logos/best.jpg" alt="Best Home Furnishings" class='item'>
							</a>
					</div>
				</div>
			</div>
			
			<?php include 'full-list.php'; ?>
			
		</div>
		
		<?php include '../template-parts/footer.php'; ?>
		
	</body>
</html>