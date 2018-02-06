/**
 * Created by PhpStorm.
 * User: petersdata
 * Date: 2/6/18
 * Time: 12:24 PM
 */
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<!-- Add Custom CSS Here -->

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		<title>Bootstrap Challenge</title>
	</head>

	<body>

		<div class="container py-3">
			<!-- Navbar at top with Title and 4 links aligned right -->
			<nav class="navbar navbar-expand-md navbar-light bg-light border rounded">
				<a class="navbar-brand" href="#">Bootstrap Challenge</a>
				<button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation" >
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-end" id="navbarToggler">
					<ul class="navbar-nav ml-auto mt-2 mt-sm-0">
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

			<!-- Jumbotron -->
			<div class="jumbotron container py-4 px-5 mt-5">
				<h1 class="display-4">Hello, world!</h1>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec laoreet ante eu sapien convallis fringilla. Mauris eget porta ligula, in gravida massa.</p>
				<p class="lead">
					<a class="btn btn-primary btn-md" href="#" role="button">Learn more</a>
				</p>
			</div>
		</div>

		<!-- Middle section with image left and text right -->
		<div class="container-fluid bg-light my-4 p-5">
			<div class="row align-items-center">
				<div class="col-lg-4 text-center">
					<a href="https://placeimg.com/250/250/nature"><img src="https://placeimg.com/250/250/nature"></a>
				</div>
				<div class="col-lg-8 align-self-center p-4">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan dignissim nulla ac scelerisque. Praesent scelerisque pretium nulla. Etiam vel egestas mauris. Sed lacinia vitae felis vel vulputate. Sed quis metus et sapien fermentum auctor mattis ut orci. Cras dapibus nisi venenatis consequat consectetur. Pellentesque est lacus, porta tincidunt leo a, faucibus luctus ex. Phasellus ac orci lorem.<br><br>Pellentesque in ex vel neque condimentum sodales. Praesent elementum diam lacus, ut elementum ligula auctor eget. Aliquam faucibus tempor sem condimentum rhoncus. Phasellus sagittis tellus et lectus placerat interdum. Donec scelerisque lorem eu ligula interdum efficitur. Ut molestie sollicitudin sem et venenatis.</p>
				</div>
			</div>
		</div>

		<!-- Bottom section with 4 rounded images and text boxes -->
		<div class="container-fluid px-4">
			<div class="row">
				<div class="col-lg-3 my-4 text-center">
					<a href="https://placeimg.com/175/175/nature"><img src="https://placeimg.com/175/175/nature" class="rounded-circle"></a>
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

		<!-- Footer -->
		<div class="card-footer bg-dark text-muted text-center p-4 mt-4">
Lorem ipsum dolor sit amet.
		</div>

	</body>

</html>