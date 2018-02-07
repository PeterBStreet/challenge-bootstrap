<!--/**
 * Created by PhpStorm.
 * User: petersdata
 * @author Peter Street
 * Date: 2/6/18
 * Time: 12:46 PM
 */
 -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>challenge-bootstrap</title>
		<!-- Here is the required bootstrap meta tags (taken from class materials)-->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS (taken from class materials)-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
				integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<!-- Link your CSS files here (taken from class materials)-->

		<!-- jQuery (taken from class materials)-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>

		<!-- Popper.js (taken from class materials)-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
				  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
				  crossorigin="anonymous"></script>

		<!-- Bootstap JS (taken from class materials)-->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
				  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfWpi1MquVdAyjUar5+76PVCmYl"
				  crossorigin="anonymous"></script>

	</head>
	<body>
		<div>
			<!--
			Here is the top navbar (found on www.getbootstrap.com)
			navbar has no l/r margins - containers with container-fluid are the same
			the float is set to top so the bar stays on top of the document
			fixed stays on the top of the page and ruined the layout,
			the navbar is dark, with a dark background
			the brand, which allows text, is justified center
			I would like to learn how to get the three dot/buttons on the left! -->
			<nav class="navbar float-top navbar-dark bg-dark justify-content-center ">
				<a class="navbar-brand" href="#">Site Title</a>
			</nav>
		</div>
		<!--Here I created a div and created a container. my is margins top and bottom mx is margins left to right -->
		<div class="container my-3 mx-5">
			<!-- navbar with "Bootstrap Challenge" Title and 4 "links" aligned right.
			 Here I created a navbar that will expanded when medium. with light text and background and rounded border-->
			<nav class="navbar navbar-expand-md navbar-light bg-light border rounded">
				<!-- the  navbar-brand gets our text in the nav bar -->
				<a class="navbar-brand" href="#">Bootstrap Challenge</a>
				<!--Here I created buttons that collapse in white. Again sample  -->
				<button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarToggler">
					<span class="navbar-toggler-icon"></span>
				</button>
				<!-- Here I continue the with the collapsable button "elements" and order them from left to right and justify them on the right or end -->
				<div class="collapse navbar-collapse justify-content-end" id="navbarToggler">
					<!-- Here I create the unordered list which creates the "links"
					The mt settings affect the thickness of the navbar-->
					<ul class="navbar-nav ml-auto mt-0 mt-sm-0">
						<li class="nav-item">
							<a class="nav-link" href="#">Link1</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Link2</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Link3</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Link4</a>
						</li>
					</ul>
				</div>
			</nav>
			<!-- Hello, world! Container with text and "Learn More" button
			Initially I got the text and button and only the button was correct
			w3schools was my resource for the fix which places the JTRON inside a container
			 The jumbotron is not
			 the Margin Top is set to five (5)
			 which I size using the py to control the container hight, px to control the box width, and mt for the container spacing
			 additionally I want to note the Jolynn helped me with the text sizing.-->
			<div class="jumbotron container mt-5">
				<h1 class="display-4">Hello, world!</h1>
				<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention
					to featured content or information.</p>
				<p class="lead">
					<a class="btn btn-primary btn-md" href="#" role="button">Learn more</a>
				</p>
			</div>
		</div>

		<!-- Middle section with image left and text right
		with help from Jolynn-->
		<div class="container-fluid bg-light my-4 p-5">
			<div class="row align-items-center">
				<div class="col-lg-4 text-center">
					<a href="https://placeimg.com/250/250/nature"><img src="https://placeimg.com/250/250/nature"></a>
				</div>
				<div class="col-lg-8 align-self-center p-4">
					<p>Chuanjiesaurus Petrobrasaurus Teratophoneus Pisanosaurus Archaeodontosaurus Xenoceratops Atlantosaurus
						Longosaurus Succinodon Hypsibema Nedoceratops Fusuisaurus Siamosaurus Jianchangosaurus Teinurosaurus
						Rahona Xiongguanlong Dongyangosaurus<br><br>Abydosaurus Neuquensaurus Kaatedocus Genusaurus
						Camarasaurus Dravidosaurus Zhejiangosaurus Aralosaurus Secernosaurus Doratodon Brontosaurus
						Bambiraptor Morosaurus Loricatosaurus Sinovenator Variraptor Dandakosaurus Prenoceratops
						Krzyzanowskisaurus Tianzhenosaurus Huehuecanauhtlus Lapampasaurus.</p>
				</div>
			</div>
		</div>
		<!-- Bottom section with 4 rounded images and text boxes -->
		<div class="container-fluid px-4">
			<div class="row">
				<div class="col-lg-3 my-4 text-center">
					<a href="https://placeimg.com/174/174/nature"><img src="https://placeimg.com/174/174/nature" class="rounded-circle"></a>
					<div class="d-inline-flex p-2 mx-3 my-4 justify-content-center border border rounded bg-light">
						<p class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan dignissim nulla ac scelerisque. Praesent scelerisque pretium nulla. Etiam vel egestas mauris. Sed lacinia vitae felis vel vulputate. Sed quis metus et sapien fermentum auctor mattis ut orci. Cras dapibus nisi venenatis consequat consectetur.</p>
					</div>

				</div>
				<div class="col-lg-3 my-4 text-center">
					<a href="https://placeimg.com/175/175/animals"><img src="https://placeimg.com/175/175/animals" class="rounded-circle"></a>
					<div class="d-inline-flex p-2 mx-3 my-4 justify-content-center border border rounded bg-light">
						<p class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan dignissim nulla ac scelerisque. Praesent scelerisque pretium nulla. Etiam vel egestas mauris. Sed lacinia vitae felis vel vulputate. Sed quis metus et sapien fermentum auctor mattis ut orci. Cras dapibus nisi venenatis consequat consectetur.</p>
					</div>
				</div>

				<div class="col-lg-3 my-4 text-center">
					<a href="https://placeimg.com/175/175/architecture"><img src="https://placeimg.com/175/175/architecture" class="rounded-circle"></a>
					<div class="d-inline-flex p-2 mx-3 my-4 justify-content-center border border rounded bg-light">
						<p class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan dignissim nulla ac scelerisque. Praesent scelerisque pretium nulla. Etiam vel egestas mauris. Sed lacinia vitae felis vel vulputate. Sed quis metus et sapien fermentum auctor mattis ut orci. Cras dapibus nisi venenatis consequat consectetur.</p>
					</div>
				</div>

				<div class="col-lg-3 my-4 text-center">
					<a href="https://placeimg.com/175/175/tech"><img src="https://placeimg.com/175/175/tech" class="rounded-circle"></a>
					<div class="d-inline-flex p-2 mx-3 my-4 justify-content-center border border rounded bg-light">
						<p class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan dignissim nulla ac scelerisque. Praesent scelerisque pretium nulla. Etiam vel egestas mauris. Sed lacinia vitae felis vel vulputate. Sed quis metus et sapien fermentum auctor mattis ut orci. Cras dapibus nisi venenatis consequat consectetur.</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Here is the bottom navbar (found on www.getbootstrap.com) with adjusted float, not fixed,text is dark, with a dark background, and justified center. Not clear what the navbar-brand or href do but when I remove the "elements" the text is dark so I left them in! Additionally I can not get the bottom bar to extend to the sides of the page like I did the top bar.-->
<div>
	<nav class="navbar navbar-float-bottom navbar-dark bg-dark justify-content-center">
		<a class="navbar-brand" href="#">Funny text at the bottom of the page!</a>
	</nav>
</div>
	</body>
</html>