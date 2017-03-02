<?php
	$savedBathroomArray = array();
	if(isset($_COOKIE['bathroom-plumbing-fixtures-shower-bathtub'])){
		$cookie = $_COOKIE['bathroom-plumbing-fixtures-shower-bathtub'];
		$cookie = stripslashes($cookie);
		$savedBathroomArray = json_decode($cookie, true);
		//print_r($savedBathroomArray);
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php $currentpage = "BathroomPlumbingFixturesShowerBathtub"; ?>
<html>
<head>
	<title>Bathroom Lighting</title> 
	<link rel="stylesheet" href="inc/grovestyle.css" type="text/css">
	<meta name="keywords" content="  Kitchen remodeling, kitchen company, kitchen renovation, kitchen contractor, ">
	<meta name="description" content="J.M. Grove Building Trust- Kitchen remodeling, kitchen company, kitchen renovation, kitchen contractor ."> 
</head>

<body>
<div align="center">
	<div id="shell">
		<?php  include("inc/header.php"); ?>	
		<div id="content">
			<?php include("inc/leftmenu.php"); ?>			
			<div id="content-right">
				<div style="width:100%;height:17px;float:left;overflow:hidden;"></div>
				<div>
					<?php
					foreach ($savedBathroomArray as $value) {
						$tileNamr =explode("-",$value);
						//$tileTitle = ['Vinyl',];
						echo '<div class="bathroom-tile-main">
								<div class="bathroom-tile-title-head">
									<p>'.$tileNamr[1].'</p>
								</div>
								<div class="bathroom-tile">
									<img src="img/test.png" alt="Double Hung Window" class="tileSelect">
								</div>
								<div class="bathroom-tile-title">
									<p>'.$tileNamr[0].'</p>
								</div>
							</div>'
						;
					}
					?>
					<div class="bathroom-tile-button"></div>
				</div>
				
				<div style="width:100%;float:left;overflow:hidden;">
	<h1 style="padding: 12px 20px 0px 20px;font-size:1.4em;">Lorem ipsum</h1>
	<h4 style="padding: 12px 20px 0px 20px;font-size:1.1em;">
		<img src="img/windows-the-choice.jpg">
	</h4>
	<div align="center">
				<p style="padding: 8px 20px 5px 20px;" align="center" float="center">
				
				<?php include("inc/toolbox_div.php")?>
				</p> 
				</div>
	<p style="padding: 0px 20px 10px 20px;font-size:.8em;">
		Instructions: select the desired location and which product you would like for your bathroom remodeling project. You may add/ edit / delete and save your project to come back later. Start designing your dream project today and experience luxury as unique as your home. 
	</p>
	<h3 style="padding: 12px 20px 0px 20px;font-size:1.1em;">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit
	</h3>
</div>
<div class="option">
	<div class="option-image"><a href=""><img src="img/test.png" alt="Double Hung Window"></a></div>
	<div class="option-text">
		<h2>Toilet type/color</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
		</p>
		<form method="post" class="bathroom-tile-flooring-dropdown-class" action="bathroom-plumbing-fixtures-shower-bathtub-backend.php">
			<div class="bathroom-tile-flooring-dropdown-main">
				<div class="bathroom-tile-button">
					<input type="image" src="img/button-select-style.jpg" value="submit">
				</div>
				<div class="bathroom-tile-flooring-dropdown-color">
				 	<select class="" name="bathroom-tile-flooring-dropdown-color">
					  	<option value="Toilet type/color-color-White">White</option>
					  	<option value="Toilet type/color-color-Beige">Beige</option>
					  	<option value="Toilet type/color-color-Tan">Tan</option>
					  	<option value="Toilet type/color-color-Black">Black</option>
					  	<option value="Toilet type/color-color-Gray">Gray</option>
					  	<option value="Toilet type/color-color-Pink">Pink</option>
					</select> 
				</div>
				<div class="bathroom-tile-flooring-dropdown-color">
				 	<select class="" name="bathroom-tile-flooring-value">
					  	<option value="Toilet type/color-One Piece Toilets">One Piece Toilets</option>
					  	<option value="Toilet type/color-Two Piece Toilets">Two Piece Toilets</option>
					  	<option value="Toilet type/color-Elongated">Elongated</option>
					  	<option value="Toilet type/color-Round">Round</option>
					  	<option value="Toilet type/color-Bidet">Bidet</option>
					  	<option value="Toilet type/color-Urinal">Urinal</option>
					</select> 
				</div>
			</div>
		</form>
	</div>
</div>

<div class="option">
	<div class="option-image"><a href=""><img src="img/test.png" alt="Double Hung Window"></a></div>
	<div class="option-text">
		<h2>Sink type/color</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
		</p>
		<form method="post" class="bathroom-tile-flooring-dropdown-class" action="bathroom-plumbing-fixtures-shower-bathtub-backend.php">
			<div class="bathroom-tile-flooring-dropdown-main">
				<div class="bathroom-tile-button">
					<input type="image" src="img/button-select-style.jpg" value="submit">
				</div>
				<div class="bathroom-tile-flooring-dropdown-color">
				 	<select class="" name="bathroom-tile-flooring-dropdown-color">
					  	<option value="Sink type/color-color-Almond">Almond </option>
					  	<option value="Sink type/color-color-Assorted Colors">Assorted Colors</option>
					  	<option value="Sink type/color-color-Beige">Beige</option>
					  	<option value="Sink type/color-color-Black">Black</option>
					  	<option value="Sink type/color-color-Blue">Blue</option>
					  	<option value="Sink type/color-color-Bronze">Bronze</option>
					  	<option value="Sink type/color-color-Brown">Brown</option>
					  	<option value="Sink type/color-color-Stainless steel">Stainless steel</option>
					  	<option value="Sink type/color-color-white">white</option>
					</select> 
				</div>
				<div class="bathroom-tile-flooring-dropdown-color">
				 	<select class="" name="bathroom-tile-flooring-value">
					  	<option value="Sink type/color-Drop In Sinks">Drop In Sinks</option>
					  	<option value="Sink type/color-Pedestal Sinks">Pedestal Sinks</option>
					  	<option value="Sink type/color-Vessel Sinks">Vessel Sinks</option>
					  	<option value="Sink type/color-Undermount Sinks">Undermount Sinks</option>
					  	<option value="Sink type/color-Wall mount sinks">Wall mount sinks</option>
					  	<option value="Sink type/color-Corner sinks">Corner sinks</option>
					  	<option value="Sink type/color-Console sink">Console sink</option>
					</select> 
				</div>
			</div>
		</form>
	</div>
</div>

<div class="option">
	<div class="option-image"><a href=""><img src="img/test.png" alt="Double Hung Window"></a></div>
	<div class="option-text">
		<h2>Sink faucet type/finish</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
		</p>
		<form method="post" class="bathroom-tile-flooring-dropdown-class" action="bathroom-plumbing-fixtures-shower-bathtub-backend.php">
			<div class="bathroom-tile-flooring-dropdown-main">
				<div class="bathroom-tile-button">
					<input type="image" src="img/button-select-style.jpg" value="submit">
				</div>
				<div class="bathroom-tile-flooring-dropdown-color">
				 	<select class="" name="bathroom-tile-flooring-dropdown-color">
					  	<option value="Sink faucet type/finish-color-Bronze">Bronze</option>
					  	<option value="Sink faucet type/finish-color-Nickel">Nickel</option>
					  	<option value="Sink faucet type/finish-color-Chrome">Chrome</option>
					  	<option value="Sink faucet type/finish-color-Brass">Brass</option>
					  	<option value="Sink faucet type/finish-color-Stainless Steel">Stainless Steel</option>
					  	<option value="Sink faucet type/finish-color-Black">Black</option>
					  	<option value="Sink faucet type/finish-color-Pewter">Pewter</option>
					  	<option value="Sink faucet type/finish-color-Copper">Copper</option>
					  	<option value="Sink faucet type/finish-color-White">White</option>
					</select> 
				</div>
				<div class="bathroom-tile-flooring-dropdown-color">
				 	<select class="" name="bathroom-tile-flooring-value">
					  	<option value="Sink faucet type/finish-High Arc">High Arc</option>
					  	<option value="Sink faucet type/finish-Low Arc">Low Arc</option>
					  	<option value="Sink faucet type/finish-Mid Arc">Mid Arc</option>
					  	<option value="Sink faucet type/finish-Standard">Standard</option>
					  	<option value="Sink faucet type/finish-Stationary">Stationary</option>
					  	<option value="Sink faucet type/finish-Swing Arm">Swing Arm</option>
					  	<option value="Sink faucet type/finish-Waterfall">Waterfall</option>
					</select> 
				</div>
			</div>
		</form>
	</div>
</div>
					
				</div>
			<?php include("inc/testimonials.php"); ?>	
		</div>
		<?php include("inc/footer.php"); ?>	
	</div>
</div>

</body>
<?php include_once("inc/analyticstracking.php") ?>
</html>
