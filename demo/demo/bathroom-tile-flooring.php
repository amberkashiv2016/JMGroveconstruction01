<?php
	$savedBathroomArray = array();
	if(isset($_COOKIE['bathroom-tile-flooring-cookie'])){
		$cookie = $_COOKIE['bathroom-tile-flooring-cookie'];
		$cookie = stripslashes($cookie);
		$savedBathroomArray = json_decode($cookie, true);
		//print_r($savedBathroomArray);
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php $currentpage = "BathroomTileFlooring"; ?>
<html>
<head>
	<title> Bathroom Tile And Flooring</title> 
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
				<div align="center">
				<p style="padding: 8px 20px 5px 20px;" align="center" float="center">
				
				<?php include("inc/toolbox_div.php")?>
				</p> 
				</div>
				<div style="width:100%;float:left;overflow:hidden;">
	<h1 style="padding: 12px 20px 0px 20px;font-size:1.4em;">Lorem ipsum</h1>
	<h4 style="padding: 12px 20px 0px 20px;font-size:1.1em;">
		<img src="img/windows-the-choice.jpg">
	</h4>
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
		<h2>Vinyl flooring tile </h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
		</p>
		<form method="post" class="bathroom-tile-flooring-dropdown-class" action="bathroom-title-flooring-backend.php">
		 	<div class="bathroom-tile-button">
				<input type="image" src="img/button-select-style.jpg" value="submit">
			</div>
		 	<div class="bathroom-tile-flooring-dropdown">
			 	<select class="" name="bathroom-tile-flooring-value">
				  	<option value="vinyl flooring tile-bathroom floor">bathroom floor</option>
				  	<option value="vinyl flooring tile-Backsplash">Backsplash</option>
				  	<option value="vinyl flooring tile-Wainscoting">Wainscoting</option>
				  	<option value="vinyl flooring tile-Ceiling">Ceiling</option>
				  	<option value="vinyl flooring tile-Shower walls">Shower walls</option>
				  	<option value="vinyl flooring tile-Shower base">Shower base</option>
				  	<option value="vinyl flooring tile-Shower ceiling">Shower ceiling</option>
				</select> 
			</div>
		</form>
	</div>
</div>
<div class="option">
	<div class="option-image"><a href=""><img src="img/test.png" alt="Casement Window"></a></div>
	<div class="option-text">
		<h2>Ceramic flooring tile</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
		</p>
		<form method="post" class="bathroom-tile-flooring-dropdown-class" action="bathroom-title-flooring-backend.php">
		<div class="bathroom-tile-button">
				<input type="image" src="img/button-select-style.jpg" value="submit">
			</div>
		<div class="bathroom-tile-flooring-dropdown">
			<select class="" name="bathroom-tile-flooring-value">
			  	<option value="ceramic flooring tile-bathroom floor">bathroom floor</option>
			  	<option value="ceramic flooring tile-Backsplash">Backsplash</option>
			  	<option value="ceramic flooring tile-Wainscoting">Wainscoting</option>
			  	<option value="ceramic flooring tile-Ceiling">Ceiling</option>
			  	<option value="ceramic flooring tile-Shower walls">Shower walls</option>
			  	<option value="ceramic flooring tile-Shower base">Shower base</option>
			  	<option value="ceramic flooring tile-Shower ceiling">Shower ceiling</option>
			</select> 
		</div>
		</form>
	</div>
</div>
<div class="option">
	<div class="option-image"><a href=""><img src="img/test.png" alt="Basement window" width="146" height="133" border="0"></a></div>
	<div class="option-text">
	<h2>Porcelain flooring tile</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
		</p>
		<form method="post" class="bathroom-tile-flooring-dropdown-class" action="bathroom-title-flooring-backend.php">
		<div class="bathroom-tile-button">
				<input type="image" src="img/button-select-style.jpg" value="submit">
			</div>
		<div class="bathroom-tile-flooring-dropdown">
			<select class="" name="bathroom-tile-flooring-value">
			  	<option value="porcelain flooring tile-bathroom floor">bathroom floor</option>
			  	<option value="porcelain flooring tile-Backsplash">Backsplash</option>
			  	<option value="porcelain flooring tile-Wainscoting">Wainscoting</option>
			  	<option value="porcelain flooring tile-Ceiling">Ceiling</option>
			  	<option value="porcelain flooring tile-Shower walls">Shower walls</option>
			  	<option value="porcelain flooring tile-Shower base">Shower base</option>
			  	<option value="porcelain flooring tile-Shower ceiling">Shower ceiling</option>
			</select> 
		</div>
		</form>
	</div>
</div>
<div class="option">	
	<div class="option-image"><a href=""><img src="img/test.png" alt="Awning Window"></a></div>
	<div class="option-text">
		<h2>Natural stone flooring tile</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
		</p>

		<form method="post" class="bathroom-tile-flooring-dropdown-class" action="bathroom-title-flooring-backend.php">
		<div class="bathroom-tile-button">
				<input type="image" src="img/button-select-style.jpg" value="submit">
			</div>
		<div class="bathroom-tile-flooring-dropdown">
			<select class="" name="bathroom-tile-flooring-value">
			  	<option value="natural stone flooring tile-bathroom floor">bathroom floor</option>
			  	<option value="natural stone flooring tile-Backsplash">Backsplash</option>
			  	<option value="natural stone flooring tile-Wainscoting">Wainscoting</option>
			  	<option value="natural stone flooring tile-Ceiling">Ceiling</option>
			  	<option value="natural stone flooring tile-Shower walls">Shower walls</option>
			  	<option value="natural stone flooring tile-Shower base">Shower base</option>
			  	<option value="natural stone flooring tile-Shower ceiling">Shower ceiling</option>
			</select> 
		</div>
		</form>
	</div>
</div>
<div class="option">	
	<div class="option-image"><a href=""><img src="img/test.png" alt="Slider Window"></a></div>
	<div class="option-text">
		<h2>Marble tile</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
		</p>
		<form method="post" class="bathroom-tile-flooring-dropdown-class" action="bathroom-title-flooring-backend.php">
		<div class="bathroom-tile-button">
				<input type="image" src="img/button-select-style.jpg" value="submit">
			</div>
		<div class="bathroom-tile-flooring-dropdown">
			<select class="" name="bathroom-tile-flooring-value">
			  	<option value="marble tile-bathroom floor">bathroom floor</option>
			  	<option value="marble tile-Backsplash">Backsplash</option>
			  	<option value="marble tile-Wainscoting">Wainscoting</option>
			  	<option value="marble tile-Ceiling">Ceiling</option>
			  	<option value="marble tile-Shower walls">Shower walls</option>
			  	<option value="marble tile-Shower base">Shower base</option>
			  	<option value="marble tile-Shower ceiling">Shower ceiling</option>
			</select> 
		</div>
		</form>
	</div>
</div>
<div class="option">	
	<div class="option-image"><a href=""><img src="img/test.png" alt="Picture Window"></a></div>
	<div class="option-text">
		<h2>Moisture resistant drywall</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
		</p>
		<form method="post" class="bathroom-tile-flooring-dropdown-class" action="bathroom-title-flooring-backend.php">
		<div class="bathroom-tile-button">
				<input type="image" src="img/button-select-style.jpg" value="submit">
			</div>
		<div class="bathroom-tile-flooring-dropdown">
			<select class="" name="bathroom-tile-flooring-value">
			  	<option value="moisture resistant drywall-bathroom floor">bathroom floor</option>
			  	<option value="moisture resistant drywall-Backsplash">Backsplash</option>
			  	<option value="moisture resistant drywall-Wainscoting">Wainscoting</option>
			  	<option value="moisture resistant drywall-Ceiling">Ceiling</option>
			  	<option value="moisture resistant drywall-Shower walls">Shower walls</option>
			  	<option value="moisture resistant drywall-Shower base">Shower base</option>
			  	<option value="moisture resistant drywall-Shower ceiling">Shower ceiling</option>
			</select> 
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
