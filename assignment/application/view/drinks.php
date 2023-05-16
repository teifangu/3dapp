<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/x-icon" href="../assets/icons/favicon.ico">
	<link rel='stylesheet' href="../css/custom.css">
	</link>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel='stylesheet' href="../css/x3dom.css">
	</link>

	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href="//db.onlinewebfonts.com/c/2def107af3e4eeb88b5ca50c3320ae0a?family=TCCC-UnityHeadline" rel="stylesheet"
		type="text/css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">
	<link id="page-theme" rel="stylesheet" href="../css/red.css">
	<script src="../js/jquery-3.6.3.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script src="../js/x3dom.js"></script>
	<script src="https://kit.fontawesome.com/73afdc5ae8.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
	<script src="../js/custom.js"></script>
	<script src="../js/model_options.js"></script>
	<script>
		swapDrink("<?php echo $_GET["d"]; ?>");
	</script>

	<title>Coca-Cola | Drinks</title>
</head>

<body>
	<nav class="navbar navbar_coca_cola navbar-expand-sm">
		<div class="container">
			<div class="logo">
				<a class="navbar-brand" href="home">
					<h1>1</h1>
					<h1>oca</h1>
					<h2>Cola</h2>
					<h3>Journey</h3>
					<p class="text">Savor the Magic of Coca Cola</p>
				</a>
			</div>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto text">
					<li class="nav-item">
						<a class="nav-link" href="home">Home</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Drinks</a>
						<div class="dropdown-menu dropdown-menu-end">
							<a class="myDropdownItem  dropdown-item-top" href="drinks?d=coke">Coca Cola</a>
							<a class="myDropdownItem" href="drinks?d=sprite">Sprite</a>
							<a class="myDropdownItem dropdown-item-bottom" href="drinks?d=drpepper">Dr Pepper</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">About</a>
						<div class="dropdown-menu dropdown-menu-end ">
							<a data-bs-toggle="modal" data-bs-target="#aboutModal"
								class="myDropdownItem dropdown-item-top" href="#">About the Brand</a>
							<a class="myDropdownItem" href="https://www.coca-cola.co.uk/contact">Contact</a>
							<a class="myDropdownItem dropdown-item-bottom" href="about">
								<div>Statement of Originality
								</div>
							</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" onclick="changeTheme()">
							<img class="brush" src="../assets/icons/brush.svg" alt="Change Theme">
						</a>

					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="modal" id="aboutModal">
		<div class="modal-dialog">

			<div class="modal-content myModal">

				<div class="modal-header t1 text">

					<?php echo $data["home"][0]["title"] ?>

				</div>
				<div class="t2 text">
					<?php echo $data["home"][0]["subtitle"] ?>
				</div>
				<div class="para text">
					<?php echo $data["home"][0]["description"] ?>


				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="statementModal">
		<div class="modal-dialog">

			<div class="modal-content myModal">

				<div class="modal-header t1 text">
					Statement of Originality
				</div>
				<div class="para text">
					<?php echo $data["formality"][0]["originality"] ?>

				</div>
			</div>
		</div>
	</div>

	<div id="coke" class="container container-fluid main_contents">
		<div class="row">
			<div class="col-sm-4">
				<div class="pad">
					<div class="blwch">
						<div class="t2 text">

							<?php echo $data["cards"][1]["title"] ?>
						</div>
						<div class="para text">

							<?php echo $data["cards"][1]["description"] ?>

						</div>
						<img src="../assets/icons/front_view" class="myIcon" onclick="frontView(getDrink())" data-bs-toggle="tooltip" data-bs-placement="top" title="Front View"></img>
						<img src="../assets/icons/back_view" class="myIcon" onclick="backView(getDrink())" data-bs-toggle="tooltip" data-bs-placement="top" title="Back View"></img>
						<img src="../assets/icons/left_view" class="myIcon" onclick="leftView(getDrink())" data-bs-toggle="tooltip" data-bs-placement="top" title="Left View"></img>
						<img src="../assets/icons/right_view" class="myIcon" onclick="rightView(getDrink())" data-bs-toggle="tooltip" data-bs-placement="top" title="Right View"></img>
						<img src="../assets/icons/top_view" class="myIcon" onclick="topView(getDrink())" data-bs-toggle="tooltip" data-bs-placement="top" title="Top View"></img>
						<img src="../assets/icons/bottom_view" class="myIcon" onclick="bottomView(getDrink())" data-bs-toggle="tooltip" data-bs-placement="top" title="Bottom View"></img>
					</div>
				</div>


				<div class="pad">
					<div class="blwch">
						<div class="t2 text">

							<?php echo $data["cards"][4]["title"] ?>

						</div>
						<div class="para text">

							<?php echo $data["cards"][4]["description"] ?>

						</div>
						<img src="../assets/icons/rotate_right.svg" onclick="spinRight(getDrink())"
							class="myIcon" data-bs-toggle="tooltip" data-bs-placement="top" title="Rotate Right"></img>
						<img src="../assets/icons/rotate_left.svg" onclick="spinLeft(getDrink())" class="myIcon" data-bs-toggle="tooltip" data-bs-placement="top" title="Rotate Left"></img>
						<img src="../assets/icons/rotate_down.svg" onclick="spinUp(getDrink())" class="myIcon" data-bs-toggle="tooltip" data-bs-placement="top" title="Rotate Vertical"></img>
						<img src="../assets/icons/animate.svg" onclick="movement(getDrink())" class="myIcon" data-bs-toggle="tooltip" data-bs-placement="top" title="Animate"></img>
						<img src="../assets/icons/reset.svg" onclick="resetTransform(getDrink())" class="myIcon" data-bs-toggle="tooltip" data-bs-placement="top" title="Reset Movements"></img>
					</div>
				</div>

				<div class="pad">
					<div class="blwch">
						<div class="t2 text">

							<?php echo $data["cards"][2]["title"] ?>

						</div>
						<div class="para text">

							<?php echo $data["cards"][2]["description"] ?>

						</div>
						<img src="../assets/icons/spot_light.svg" class="myIcon" onclick="toggleSpot(getDrink())" data-bs-toggle="tooltip" data-bs-placement="top" title="Toggle Spot Light"></img>
						<img src="../assets/icons/top_light.svg" class="myIcon" onclick="toggleHigh(getDrink())" data-bs-toggle="tooltip" data-bs-placement="top" title="Toggle Top Light"></img>
						<img src="../assets/icons/head_light.svg" class="myIcon" onclick="toggleHead(getDrink())" data-bs-toggle="tooltip" data-bs-placement="top" title="Toggle Head Light"></img>
					</div>
				</div>


				<div class="pad">
					<div class="blwch">
						<div class="t2 text">

							<?php echo $data["cards"][3]["title"] ?>

						</div>
						<div class="para text">

							<?php echo $data["cards"][3]["description"] ?>

						</div>

						<img src="../assets/icons/faces.svg" onclick="showFaces(getDrink())" class="myIcon" data-bs-toggle="tooltip" data-bs-placement="top" title="Display Faces"></img>
						<img src="../assets/icons/edges.svg" onclick="showWire(getDrink())" class="myIcon" data-bs-toggle="tooltip" data-bs-placement="top" title="Display Edges"></img>
						<img src="../assets/icons/vertices.svg" onclick="showPoints(getDrink())" class="myIcon" data-bs-toggle="tooltip" data-bs-placement="top" title="Display Vertices"></img>
					</div>
				</div>

			</div>
			<div class="col-sm-4">

				<div class="blwch" id="coke-card">
					<div class="card-body">
						<div class="text t2">

							<?php echo $data["drinks"][0]["modelTitle"] ?>

						</div>
						<div class="blwch model3D">
							<x3d id="cokemesh">
								<scene>
									<inline nameSpaceName="coke" mapDEFToID="true"
										url="../assets/x3d/<?php echo $data["drinks"][0]["modelFile"] ?>"></inline>
								</scene>
							</x3d>
						</div>
						<div class="para text">

							<?php echo $data["drinks"][0]["creationMethod"] ?>

						</div>
					</div>
				</div>
				<div class="pad">
					<div class="blwch" id="sprite-card">
						<div class="card-body">
							<div class="text t2">

								<?php echo $data["drinks"][1]["modelTitle"] ?>

							</div>
							<div class="model3D blwch">
								<x3d id="spritemesh">
									<scene>
										<inline nameSpaceName="sprite" mapDEFToID="true"
											url="../assets/x3d/<?php echo $data["drinks"][1]["modelFile"] ?>"></inline>
									</scene>
								</x3d>
							</div>
							<div class="para text">

								<?php echo $data["drinks"][1]["creationMethod"] ?>

							</div>
						</div>
					</div>
					<div class="blwch" id="drpepper-card">
						<div class="card-body">
							<div class="text t2">

								<?php echo $data["drinks"][2]["modelTitle"] ?>

							</div>
							<div class="blwch model3D">
								<x3d id="drpeppermesh">
									<scene>
										<inline nameSpaceName="drpepper" mapDEFToID="true"
											url="../assets/x3d/<?php echo $data["drinks"][2]["modelFile"] ?>"></inline>
									</scene>
								</x3d>
							</div>
							<div class="para text">

								<?php echo $data["drinks"][2]["creationMethod"] ?>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4 pad">
				<div class="blwch" id="coke-bio">
					<div class="card-body">
						<div class="text t2">

							<?php echo $data["drinks"][0]["title"] ?>

						</div>
						<h5>
							<?php echo $data["drinks"][0]["subtitle"] ?>
						</h5>
						<div class="para text">

							<?php echo $data["drinks"][0]["description"] ?>

						</div>
						<a href="<?php echo $data["drinks"][0]["url"] ?>" class="myButton text">Find out more ...</a>
					</div>
				</div>
				<div class="blwch" id="sprite-bio">
					<div class="card-body">
						<div class="text t2">

							<?php echo $data["drinks"][1]["title"] ?>

						</div>

						<?php echo $data["drinks"][1]["subtitle"] ?>

						<div class="para text">

							<?php echo $data["drinks"][1]["description"] ?>

						</div>
						<a href="<?php echo $data["drinks"][1]["url"] ?>" class="myButton text">Find out more ...</a>
					</div>
				</div>
				<div class="blwch" id="drpepper-bio">
					<div class="card-body">
						<div class="text t2">

							<?php echo $data["drinks"][2]["title"] ?>

						</div>

						<?php echo $data["drinks"][2]["subtitle"] ?>

						<div class="para text">

							<?php echo $data["drinks"][2]["description"] ?>

						</div>
						<a href="<?php echo $data["drinks"][2]["url"] ?>" class="myButton text">Find out more ...</a>
					</div>
				</div>
			</div>

			<div class="row">

			</div>


		</div>

		<div class="row">

			<div class="col-sm-12 pad">
				<div class="blwch">
					<div class="text t2">
						<div class="card-title">

							<?php echo $data["cards"][0]["title"] ?>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">


			<?php for ($i = 0; $i < count($data["gallery"]); $i++) { ?>
				<div class="col-sm-4 pad">
					<div class="blwch">
						<a href="../assets/images/gallery/<?php echo $data["gallery"][$i]["image"] ?>"
							data-fancybox="gallery">
							<div class="text-center">
								<img src="../assets/images/gallery/<?php echo $data["gallery"][$i]["image"] ?>"
									class="card-img gallery-image cold-sm-4"
									alt="<?php echo $data["gallery"][$i]["name"] ?>">
							</div>
						</a>
					</div>
				</div>
			<?php } ?>

		</div>
		<div class="pad">
			<div class="blwch">
				<div class="t2 text">
					<p>
						<?php echo $data["cards"][0]["description"] ?>
					</p>
				</div>
			</div>
		</div>



	</div>

	<nav class="navbar navbar-expand-sm footer">
		<div class="container">
			<div class="navbar-text float-left copyright">
				<p><span class="align-baseline"></span>&copy 2023 Ifan Edwards for Web 3D Applications</span></p>
			</div>
			<div class="navbar-text float-left">

			</div>
			<div class="navbar-text float-right social">
				<a href="https://www.facebook.com/TheCocaColaCo/"><i
						class="fab fa-facebook-square fa-3x social-logo"></i></a>
				<a href="https://twitter.com/cocacolaco"><i class="fab fa-twitter fa-3x social-logo"></i></a>
				<a href="https://github.com/teifangu/3dapp/tree/main/assignment"><i class="fab fa-github-square fa-3x social-logo"></i></a>
			</div>
		</div>
	</nav>
	<script>
		swapDrink("<?php echo $_GET["d"]; ?>");
	</script>
</body>

</html>