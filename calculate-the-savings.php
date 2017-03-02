<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php $currentpage = "savings"; ?>
<html>
<head>
	<title>Calculate the Savings - J. M. Grove  - The Home Improvement Specialists</title>
	<link rel="stylesheet" href="inc/grovestyle.css" type="text/css"><meta name="description" content="J. M. Grove Son - The experts in home improvement services - including replacement windows, doors, roofing, vinyl siding, gutters, awnings, brick, stone veneer, skylights, additions, decks and much more! Located in Lancaster, Pennsylvania - Offering Quality Service to York, Lancaster, Lebanon, Dauphin, Cumberland, Chester, Berks, Montgomery, Baltimore, Harford, Delaware, and Philadelphia."/>
<meta name="keywords" content="George Grove, J. M. Grove, home improvement, contractor, replacement windows, doors, roofing, vinyl siding, gutters, awnings, brick, stone veneer, skylights, additions, decks, Lancaster, Pennsylvania, York, Lancaster, Lebanon, Dauphin, Cumberland, Baltimore, Harford, Chester, Berks, Montgomery, Delaware, Philadelphia"/>
<script language="JavaScript" type="text/JavaScript">
<!--

var newwindow = '';

function popitup(url)
{
		var newwindow = '';
		var width=window.screen.width;
		var height=window.screen.height;
		var size = "left=0,top=0,width=440,height=500";
		newwindow=window.open(url,'fullscreen','scrollbars=yes'+size);
		if(newwindow.location){
			newwindow.moveTo(0,0);
			if (!newwindow.opener) newwindow.opener = self;
		} 
	return true;
} 

//-->
</script>
<script type='text/javascript'>
function doit()
            {
              var theNum = parseFloat(document.getElementById('a').value);
			  var thePercent = parseFloat(document.getElementById('g').value);
			  var theProj = parseFloat(document.getElementById('i').value);
	
   if (theNum > 0)
   {
document.calc.b.value = "$" + (theNum * .4).toFixed(2)
document.calc.c.value = "$" + ((theNum * .4).toFixed(2) *12).toFixed(2)
document.calc.d.value = "$" + ((theNum * .4).toFixed(2) *60).toFixed(2)
document.calc.e.value = "$" + ((theNum * .4).toFixed(2) *180).toFixed(2)
var roi1 =  theNum * .4 *480
document.calc.f.value = "$" + ((theNum * .4).toFixed(2) *480).toFixed(2)

var roi2 = (theProj * thePercent);
document.calc.h.value = "$" + (theProj * thePercent).toFixed(2)

document.calc.j.value = "$" + (roi1+roi2).toFixed(2)
              }
            }
</script>





</head>

<body>
<div align="center">
	<div id="shell">
		<?php  include("inc/header.php"); ?>	
		<div id="content">
			<?php include("inc/leftmenu.php"); ?>			
			<div id="content-right">
				<div style="width:100%;height:17px;float:left;overflow:hidden;"></div>
				<div style="width:292px;float:left;font-size:.8em;">
				
				<table>
					<tr>
						<td>Project Type</td><td>
							<select name="g" id="g">
								<option value="0.8" selected>Windows</option>
								<option value="0.84" onclick="popitup('http://www.prodigysiding.com/calculator/calc.php');">Siding</option>
							</select>
						</td>
					</tr>
					
					<td>Estimated Project Cost:</td>
						<td>
							<input name='i' type='text'  value="0.00" id="i"/>
						</td>
					</tr>
					<tr>
						<td>Estimated Heating & Cooling Bill:</td>
						<td>
							<input name='a' type='text'  value="0.00" id="a"/>
						</td>
					</tr>
				</table>
				
  <input type="button" name="calculatebtn" id="calculatebtn" onclick="doit();" value="Calculate Savings" />

  
				
				<h3>Estimated Savings on Energy Bill:</h2>
				<form name='calc' id="calc">
				<p align="left"> Monthly <input name='b' type='text' value="$0.00"/></p>
				<p align="left"> Yearly <input name='c' type='text' value="$0.00"/></p>
				<p align="left"> 5 years<input name='d' type='text' value="$0.00"/></p>
				<p align="left"> 15 years<input name='e' type='text' value="$0.00"/></p>
				<p align="left"> 40 yrs<input name='f' type='text'  value="$0.00"/></p>
				<br><br><br>
				<p align="left">Value Added to House: <input name='h' type='text'  value="$0.00"/></p>
				<p align="left">Total Return on Investment (40 years): <input name='j' type='text'  value="$0.00"/></p>
				</form>

		
				<p style="padding-bottom:20px;">&nbsp;</p>
			</div></div>
			<?php include("inc/testimonials.php"); ?>	
		</div>
		<?php include("inc/footer.php"); ?>	
	</div>
</div>

</body>
<?php include_once("inc/analyticstracking.php") ?>
</html>