<html>
	<head>
		<?php include '../template-parts/meta.php'; ?>
		<title>New Arrivals from Perry's Home Furnishings & Design</title>
		<style type="text/css">
			.splash{
				background-image: url('mag.jpg');
			}
			#splash-branding img{
				width: unset;
				padding: 80px 70px;
				background-color: rgba(222, 224, 222, 0.9);
			}
			@media screen and (max-width: 900px) {
				#splash-branding img{
					max-width: 300px;
					width: 50%;
				}
			}

			#auxiliary{
				background-image: none;
				color: #000;
				text-shadow: none;
				
			}
			.center{
				text-align: center;
			}
		</style>	
	</head>
	<body>
		<header class="site-header">
			<?php $location = "new";
				  include '../template-parts/site-header.php'; ?>
		</header>

		<div id="content" class="wrapper">
			<div class="splash">
				<div id="splash-branding">
					<img src="../img/vendors/logos/mag.png"
				</div>
			</div>

		</div>
		<div class="container">
			<div  class="content">
				<div id="auxiliary" class="center">
					<h1>Welcome, Magnolia Home</h1>
					<p>Perry's Home Furnishings and Design is excited to introduce you to Magnolia Home, the inspiring new line by Joanna Gaines. With a combination of family, aesthetic and practicality in mind, Joanna has thoughtfully designed each piece in the collection and instilled her well-loved style into every detail.</p>
					<p>Our first capsule collection of the line is beginning to take shape in our showroom and we have more on the way! As the original authorized Magnolia Home source in Maine, we give you access to the entire collection. Our designers will work with you to blend Joanna's pieces together to create the perfect space for your family to call "home".</p>
					<p>Be the first to experience Magnolia Home by Joanna Gaines. It's as close as midcoast Maine. We look forward to sharing it all with you!</p>
				</div>
			</div>
		</div>

		
		<?php include '../template-parts/footer.php'; ?>
		
	</body>
</html>