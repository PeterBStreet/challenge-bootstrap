/**
 * Created by PhpStorm.
 * User: petersdata
 * Date: 2/6/18
 * Time: 12:46 PM
 */
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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<!-- Popper.js (taken from class materials)-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
				  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
				  crossorigin="anonymous"></script>

		<!-- Bootstap JS (taken from class materials)-->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
				  integrity="sha384-JZR6Spejh4U02d8j0t6vLEHfe/JQGiRRSQQxSfWpi1MquVdAyjUar5+76PVCmYl"
				  crossorigin="anonymous"></script>

	</head>
	<body>
		<!-- Page Top Container -->
		<div class="topcontainer">
			<div class="toprow">
				<div class="col-8">Bootstrap Challenge</div>
				<div class="col-1">Link1</div>
				<div class="col-1">Link2</div>
				<div class="col-1">Link3</div>
				<div class="col-1">Link4</div>
			</div>
		</div>

		<!-- Hello, world! Container with text and "Learn More" button-->
		<div class="helloworld jumbotron-fluid">
			<h1 class="helloworlddisplay-4">Hello, world!</h1>
			<p class="helloworlddescription">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
			<button type="button" class="btn btn-primary">Learn more</button>
		</div>

		<!-- Mid Page container with 1/12 image and 11/12 text-->
		<div class="midpagecontainer">
			<div class="midpagerow">
				<div class="col-1">Image</div>
				<div class="col-11">Text</div>
			</div>
		</div>

		<!-- Lower Page container with four (4) 3/12 images-->
		<div class="lowerpageimagecontainer">
			<div class="lowerpageimagerow">
				<div class="col-3">Image1</div>
				<div class="col-3">Image2</div>
				<div class="col-3">Image3</div>
				<div class="col-3">Image4</div>
			</div>
		</div>

		<!-- Lower Page container with four (4) 3/12 text blocks-->
		<div class="lowerpagetextcontainer">
			<div class="lowerpagetextrow">
				<div class="col-3">Text1</div>
				<div class="col-3">Text2</div>
				<div class="col-3">Text3</div>
				<div class="col-3">Text4</div>
			</div>
		</div>
		<div class="bottomcontainer">
			<div class="bottomrow">
				<div class="col-12">Footer Text with lot of exciting legal text 2018</div>
			</div>
		</div>
	</body>
</html>