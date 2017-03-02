<!----slider script and css------------>
    <script type="text/javascript" src="inc/js/jssor.slider.min.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jssor_1_slider_init = function() {
            
            var jssor_1_options = {
              $AutoPlay: true,
              $AutoPlaySteps: 4,
              $SlideDuration: 160,
              $SlideWidth: 194,
              $SlideSpacing: 10,
              $Cols: 4,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 4
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 1,
                $SpacingY: 1
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 809);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
    </script>

    <style>
        
        /* jssor slider bullet navigator skin 03 css */
        /*
        .jssorb03 div           (normal)
        .jssorb03 div:hover     (normal mouseover)
        .jssorb03 .av           (active)
        .jssorb03 .av:hover     (active mouseover)
        .jssorb03 .dn           (mousedown)
        */
        .jssorb03 {
            position: absolute;
        }
        .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av {
            position: absolute;
            /* size of bullet elment */
            width: 21px;
            height: 21px;
            text-align: center;
            line-height: 21px;
            color: white;
            font-size: 12px;
            background: url('/inc/img/window-slider-image//b03.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb03 div { background-position: -5px -4px; }
        .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
        .jssorb03 .av { background-position: -65px -4px; }
        .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }

        /* jssor slider arrow navigator skin 03 css */
        /*
        .jssora03l                  (normal)
        .jssora03r                  (normal)
        .jssora03l:hover            (normal mouseover)
        .jssora03r:hover            (normal mouseover)
        .jssora03l.jssora03ldn      (mousedown)
        .jssora03r.jssora03rdn      (mousedown)
        */
        .jssora03l, .jssora03r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url('/inc/img/window-slider-image/a03.png') no-repeat;
            overflow: hidden;
        }
        .jssora03l { background-position: -3px -33px; }
        .jssora03r { background-position: -63px -33px; }
        .jssora03l:hover { background-position: -123px -33px; }
        .jssora03r:hover { background-position: -183px -33px; }
        .jssora03l.jssora03ldn { background-position: -243px -33px; }
        .jssora03r.jssora03rdn { background-position: -303px -33px; }
    </style>
   
<!----slider script and css------------>
<h1 style="padding: 12px 20px 0px 20px;font-size:1.3em;">
	Design Your Own Custom <strong>Windows</strong> 
</h1> 
<div style="width:100%;float:left;height:210px;">
<div style="width:20%;float:left;text-align:right;padding-top:10px;"><img src="inc/img/window-customize.gif" border="0" alt="Replacement Windows" style="padding-bottom:2px;"></div>
<div style="width:80%;float:left;overflow:hidden;">
	<h1 style="padding: 12px 20px 0px 20px;font-size:1.1em;">
		Installing Quality Replacement Windows Right
	</h1>
	<p style="padding: 0px 20px 10px 20px;font-size:.8em;">
		
	<p style="padding: 0px 20px 0px 20px;font-size:.8em;">
		<strong>Replacement windows</strong> from J. M. Grove is the <strong>best quality and value</strong>. They are installed by
		professionals to insure that they last for years with little maintenance. We take pride in our quality workmanship and hand pick the products we sell for
		exceptional beauty and durability. Improve your home's curb appeal, increase your property value and save money on your utility bill. Click on the <strong>replacement window</strong> type to begin customizing the perfect window for your home.
		
	</p>
	<p style="padding: 8px 20px 5px 20px;" align="center">
		<a href="replacement-windows.php?type=replacement"><img src="img/button-replacement-windows.jpg" border="0"></a>&nbsp;&nbsp;<a href="replacement-windows.php?type=storm"><img src="img/button-storm-windows.jpg" border="0"></a>
	</p>
</div>
</div>
<p style="padding: 0px 20px 10px 10px;font-size:.8em;" align="center"> 
				<a href="#" onclick="javascript:window.open('http://www.alside.com/alside_ds_1.html', 1000, 500)"><img src="img/logo-2.jpg" alt="Windows Replacement Tool" border="0" title="Windows Replacement Tool" width="100px" height="100"></a>
				<!--<div>Roof Replacement Tool</div>
				</div>
				</center>
				<div class="image">-->
				<!--</p>
				<p style="padding: 0px 20px 10px 10px;font-size:.8em;" align="center">-->
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="#" onclick="javascript:window.open('http://www.jmgroveconstruction.com/photogallery.php?page=windows', 1000, 500);" target="_blank"><img src="img/youtube_video_image.jpg" alt="Windows Photo Gallery" border="0" title="Windows Videos (Coming Soon)" height="120" width="142"></a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="#" onclick="javascript:window.open('http://www.jmgroveconstruction.com/photogallery.php?page=windows', 1000, 500);" target="_blank"><img src="img/logo-1.jpg" alt="Windows Photo Gallery" border="0" title="Windows Photo Gallery" width="100px" height="100"></a>
	</p>
	
	<H2 style="padding: 10px 20px 10px 20px;font-size:1.0em;">
	Benefits of high performance, energy saving custom-made <strong>replacement windows</strong>
	</h3>
	<p style="padding: 0px 20px 10px 20px;font-size:.8em;">
	<strong>Replacement windows</strong> in the United States are costing consumers approximately $35 billion a year in energy loss. The next generation of <strong>new replacement windows</strong> can cut energy loss in half. Many of today's high-performance <strong>replacement windows</strong> are three to four times more energy-efficient than <strong>windows</strong> commonly installed 10 years ago. <strong>Replacement windows</strong> comprise 10-25% of the exterior wall area of new homes. 
	According to recent studies <strong>replacement windows</strong> account for up to 25% of a typical house's heating load  and account for up to 50% of a typical house's cooling load in cooling-dominated climates. Advances in technology such as increases in R-value, decreases in U-Value, Low-emittance (low-E) coatings, <strong>Double-glazed replacement windows</strong>, Argon  Gas filled <strong>replacement windows</strong> and welded <strong>replacement window</strong> frames have decreased energy bills by as much as 40%!
	</p>
	<p style="padding: 0px 20px 10px 20px;font-size:.8em;">
	We supply a variety of <strong>custom replacement windows</strong> to fit any need. Manufacturer's recommend <strong>custom windows</strong> because they are made to fit exactly in existing openings.  This means there are no spaces to fill in and the viewing area is maximized. All our <strong>replacement windows</strong> our energy star approved, but be careful. Just because a window is energy star approved does not mean it is eligible for tax rebates. A majority of stock windows are not eligible for the 2009 tax rebates.
	</p>


<div padding: 0px 0px 0px 0px;width:100%; >
	<strong><center>Building Suppliers:</center></strong></center>
<div style="float:left; padding: 17px 0px 0px 0px;width:77%; ">
	<div style="padding: 0px 0px 0px 170px;"><center><img  src="/inc/img/window-logo.png" width="70%" /></center></div>
</div>
<div style="float:right;  padding: 0px 0px 0px 0px; width:23%; ">
	<br />
	<select  name="price-filter">
	<option value="">Price (High to Low)</option>
	<option value="option2">Price (Low to High)</option>

		  </select>
	
	<br />
	<select  name="drop2">
	<option value="">drop2</option>
	<option value="option2">option2</option>
	<option value="option3">option3</option>
		  </select>
</div>
</div>


	<p style="padding: 0px 20px 10px 20px;font-size:.8em;" align="center">
		<!-------------------------------------------slidercode----------------------------------------------->
	
		    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 809px; height: 530px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 809px; height: 530px; overflow: hidden;">
            <div style="display: none;">
				<a href="http://jmgrovebuildingsupply.com/product/product-1/"  onclick="window.open('http://jmgrovebuildingsupply.com/product/product-1/', 'newwindow', 'width=750, height=500'); return false;">
 <img data-u="image" src="/inc/img/window-slider-image/product-1.jpg" />
					 <input type="hidden" name="price" value="85.00" id="price">
				</a>          
    </div>
            <div style="display: none;">
					<a href="http://jmgrovebuildingsupply.com/product/product-2"  onclick="window.open('http://jmgrovebuildingsupply.com/product/product-2', 'newwindow', 'width=750, height=500'); return false;">
   <img data-u="image" src="/inc/img/window-slider-image/product-2.jpg" />
						<input type="hidden" name="price" value="75.00" id="price">
				</a>
            </div>
            <div style="display: none;">
					<a href="http://jmgrovebuildingsupply.com/product/product-3"  onclick="window.open('http://jmgrovebuildingsupply.com/product/product-3', 'newwindow', 'width=750, height=500'); return false;">
     <img data-u="image" src="/inc/img/window-slider-image/product-3.jpg" />
						<input type="hidden" name="price" value="105.00" id="price">
				</a>
            </div>
            <div style="display: none;">
				<a href="http://jmgrovebuildingsupply.com/product/product-4"  onclick="window.open('http://jmgrovebuildingsupply.com/product/product-4', 'newwindow', 'width=750, height=500'); return false;">
    <img data-u="image" src="/inc/img/window-slider-image/product-4.jpg" />
						<input type="hidden" name="price" value="35.00" id="price">
				</a>
           </div>
      <div style="display: none;">
				<a href="http://jmgrovebuildingsupply.com/product/product-1/"  onclick="window.open('http://jmgrovebuildingsupply.com/product/product-1/', 'newwindow', 'width=750, height=500'); return false;">
 <img data-u="image" src="/inc/img/window-slider-image/product-1.jpg" />
					 <input type="hidden" name="price" value="85.00" id="price">
				</a>          
    </div>
            <div style="display: none;">
					<a href="http://jmgrovebuildingsupply.com/product/product-2"  onclick="window.open('http://jmgrovebuildingsupply.com/product/product-2', 'newwindow', 'width=750, height=500'); return false;">
   <img data-u="image" src="/inc/img/window-slider-image/product-2.jpg" />
						<input type="hidden" name="price" value="75.00" id="price">
				</a>
            </div>
            <div style="display: none;">
					<a href="http://jmgrovebuildingsupply.com/product/product-3"  onclick="window.open('http://jmgrovebuildingsupply.com/product/product-3', 'newwindow', 'width=750, height=500'); return false;">
     <img data-u="image" src="/inc/img/window-slider-image/product-3.jpg" />
						<input type="hidden" name="price" value="105.00" id="price">
				</a>
            </div>
            <div style="display: none;">
				<a href="http://jmgrovebuildingsupply.com/product/product-4"  onclick="window.open('http://jmgrovebuildingsupply.com/product/product-4', 'newwindow', 'width=750, height=500'); return false;">
    <img data-u="image" src="/inc/img/window-slider-image/product-4.jpg" />
						<input type="hidden" name="price" value="35.00" id="price">
				</a>
           </div>
            
            <a data-u="ad" href="http://www.jssor.com" style="display:none">jQuery Slider</a>
        
        </div>
        <!-- Bullet Navigator -->
         
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora03l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora03r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>
    </div>
    <script>
        jssor_1_slider_init();
    </script>
 		<!-------------------------------------------slidercode end ------------------------------------------>
	</p>

	<p style="padding: 10px 20px 10px 20px;font-size:.8em;"><strong>Our Window Suppliers:</strong></p>
	<p style="padding: 0px 20px 10px 20px;font-size:.8em;" align="center">
		<a href="http://www.sunrisewindows.com/index.html" target="_blank"><img src="img/logo-sunrise.jpg" border="0" alt="Replacement Windows"></a>	&nbsp;&nbsp;&nbsp; <a href="http://www.alside.com/index.aspx" target="_blank"><img src="img/logo-alside.jpg" border="0" alt="Replacement Windows"></a>&nbsp;&nbsp;&nbsp; <a href="http://www.greatlakeswindow.com/homeowner/homeowners.html" target="_blank"><img src="img/logo-greatlakes.jpg" border="0" alt="Replacement Windows"></a>
	</p>
	<H2 style="padding: 10px 20px 10px 20px;font-size:1.0em;">
	Why <strong>Custom Vinly Replacement Windows</strong> From J.M. Grove are the <strong>Best Windows</strong>
	</h3>
	<p style="padding: 0px 20px 10px 20px;font-size:.8em;">
	<strong>Vinyl replacement windows</strong> lower utility bills. High-performance <strong>replacement windows</strong> are better insulated and more air-tight. These features reduce energy consumption for heating and cooling which results in lower utility bills, making a <strong>windows home</strong> less expensive to operate. In insulated vinyl frames, the hollow cavities of the frame are filled with insulation making them thermally superior to standard vinyl and wood frames.
	</p>
	<p style="padding: 0px 20px 10px 20px;font-size:.8em;">
	<img src="../img/ladywindow.gif" alt="Replacement Windows" width="165" height="134" border="0" align="left"><strong>Vinyl replacement windows</strong> are high quality. High-performance <strong>windows</strong> are often constructed with better quality materials that can result in stronger, easier to operate, and longer lasting <strong>windows</strong>.  As a result of these manufacturers frequently offer extended warranties improvements on these products. <strong>Vinyl window</strong> frames do not require painting and have good moisture resistance. Because the color goes all the way through, there is no finish coat that can be damaged or deteriorate over time -- the surface is therefore maintenance-free.
	</p>
	<p style="padding: 0px 20px 10px 20px;font-size:.8em;">
	<strong>Vinyl replacement windows</strong> improve resale position. High-performance <strong>replacement windows</strong> can provide the many impressive benefits listed above resulting in a more comfortable, quieter, and higher quality <strong>windows home</strong> with lower utility bills fewer condensation and fading problems.  These benefits can translate into higher resale value. 
	</p>
	<p style="padding: 0px 20px 10px 20px;font-size:.8em;">
	Reduced wear on home furnishings. Low-E coatings can block up to 98 percent of the ultraviolet radiation emitted by the sun.  This radiation causes curtains, <strong>window</strong> treatments, carpeting, and furniture to fade and wear faster. 
	The first step in replacing your windows is determining what type of <strong>replacement windows and doors</strong> you want. At J.M. Grove, we help you make this choice by providing a wide selection of <strong>replacement windows</strong>. 

     Simply examine our <strong>vinyl replacement windows</strong> online or in our store and make your selections from there. We also provide our trained personnel to answer any questions you may have about our replacement windows. When you call us, you can be certain that a knowledgeable professional will be on the line. 
	</p>
	<p style="padding: 0px 20px 10px 20px;font-size:.8em;">
	<img src="../img/airinfiltration.gif" alt="Replacement Windows" width="323" height="218" border="0"align="right">Reduced obsolescence.  Based on recent trends for improved efficiency, high-performance <strong>replacement windows</strong> are expected to become standard practice for the building industry. Since it is both difficult and costly to <strong>replace windows</strong> after a house is built, it is best to install high-performance products during the original construction. ENERGY STAR labeled homes constructed with high-performance <strong>replacement windows</strong> are, therefore, expected to be less vulnerable to obsolescence. 
	</p>
	<p style="padding: 0px 20px 10px 20px;font-size:.8em;">
		Improved comfort. High-performance <strong>replacement windows</strong> reduce conductive heat losses and gains resulting in warmer interior surfaces during the winter and cooler interior surfaces during the summer. In <strong>home windows</strong>, approximately 40 percent of our physical comfort is due to the radiant heat exchange between our bodies and the surrounding interior surfaces. Thus, high-performance <strong>replacement windows</strong> improve comfort by reducing this radiant heat exchange. In addition, improved frames reduce drafts and provide more consistent temperatures throughout the house.</li> 
		Improved indoor air quality. High-performance <strong>windows</strong> often have air tightness ratings of 0.2 cfm/ft or less which reduce the amount of unconditioned air leakage into a house. This air leakage can bring in dirt, dust, and other impurities that can negatively affect indoor air quality. </li>
	</p>
	
	
	<H2 style="padding: 10px 20px 10px 20px;font-size:1.0em;">
	J.M. Grove <strong>Window Repair Services</strong>
	</h3>
	<br>
	<p style="padding: 0px 20px 10px 20px;font-size:.8em;">
		
Old windows, like any other part of your home, will at some point need to be <strong>repaired or replaced</strong>. Whether you need to fix a leak or replace broken glass, J.M. Grove <strong>window repair service</strong> will diagnos the problem and fix it.
The most common <strong>window repair</strong> issues are a broken window balance or broken glass. J.M. Grove's <strong>window repair</strong> team will fix or replace your window. 

<p> <br>
<div style="width:100%">
					<ul style="padding: 0px 15px 3px 120px;  font-size:.8em; float:left;list-style-image: url(img/bullet-splash.gif);">
						  <a href="http://www.jmgroveconstruction.com/replacement-windows.php?type=replacement"> <li>double hung window repair</li></a>
						</ul>	
						<ul style="padding: 0px 15px 3px 39px; font-size:.8em;  float:left;list-style-image: url(img/bullet-splash.gif);">
						<a href="http://www.jmgroveconstruction.com/replacement-windows.php?type=replacement"> <li>window repair installers</li></a>
						
						</ul>
						</div>
</p>
<br>

	</p>
	
	<H2 style="padding: 10px 20px 10px 20px;font-size:1.0em;">
	Important <strong>Vinyl Window</strong> Terms
	</h3>
	<br>
	<p style="padding: 0px 20px 10px 20px;font-size:.8em;">	
	
	<img src="../img/rvalue.gif" alt="Replacement Windows" width="323" height="218" border="0"align="left">
	
	A windows R-value (installation)- A measure of thermal resistance used to compute the heat lost through your <strong>vinyl replacement window</strong>. The larger  the number, the better the building insulation's effectiveness. Window Insulation should be purchased based on its R value and its U- value. Speak to a representative to learn more about air infiltration and other <strong>window install services</strong>.
	</p>
	
	<p style="padding: 0px 20px 10px 20px;font-size:.8em;">
	A windows U-Value(window install)- A measure of air-to-heat transmission (loss or gain) due to the thermal conductance and the difference in indoor and outdoor temperatures. The lower the U-value, the greater a <strong>window's</strong> resistance to heat flow and the better its insulating value.
	</p>
	<p style="padding: 0px 20px 10px 20px;font-size:.8em;">
	Low-E coating - A microscopically thin metal or metallic oxide coating that is applied to the glass by the manufacturer. It helps keep heat and ultraviolet rays from passing through the <strong>replacement window.</strong>  Virtually invisible, low-E coatings will keep the <strong>window house</strong> warmer in winter by reducing heat loss and cooler in summer by blocking heat from the sun.
	</p>
	<p> <br>
<div style="width:100%">
					<ul style="padding: 0px 15px 3px 120px;  font-size:.8em; float:left;list-style-image: url(img/bullet-splash.gif);">
						  <a href="http://www.jmgroveconstruction.com/replacement-windows.php?type=replacement"> <li>replacement slider windows</li></a>
						  <a href="http://www.jmgroveconstruction.com/replacement-windows.php?type=replacement"> <li>replacement casement windows</li></a>
                          <a href="http://www.jmgroveconstruction.com/replacement-windows.php?type=replacement"> <li>replacement double hung windows</li></a>
							
						</ul>	
						<ul style="padding: 0px 15px 3px 39px; font-size:.8em;  float:left;list-style-image: url(img/bullet-splash.gif);">
						<a href="http://www.jmgroveconstruction.com/replacement-windows.php?type=replacement"> <li>replacement picture window</li></a>
						<a href="http://www.jmgroveconstruction.com/replacement-windows.php?type=replacement"> <li>replacement bay bow window</li></a>
						<a href="http://www.jmgroveconstruction.com/replacement-windows.php?type=replacement"> <li>replacement kitchen window</li></a>
						<a href="http://www.jmgroveconstruction.com/replacement-windows.php?type=storm"> <li>storm windows</li></a>
						</ul>
						</div>
</p>
<br>
	
	
	<p style="padding: 0px 20px 10px 20px;font-size:.8em;">
	Double-glazed <strong>vinyl replacement windows</strong> have a sealed space between two panes of glass to provide an added layer of insulation. Compared with a single pane, double-glazing can cut heat loss nearly in half.  There are also triple-glazed <strong>replacement windows</strong>, which have an even higher insulating value, but also add weight and cost of the windows.
	</p>
	<p style="padding: 0px 20px 10px 20px;font-size:.8em;">
	Argon filled gas <strong>windows</strong>- The gas in the gap between the panes affects the <strong>window's</strong> insulating value. Plain air works and is standard in some <strong>replacement windows,</strong> but many recommend a heavier gas such as argon, which makes <strong>replacement windows</strong> more energy efficient because it's better than air at reducing heat transfer between the inside and the outside of the <strong>window home</strong>.
	</p>
	<p style="padding: 0px 20px 10px 20px;font-size:.8em;">
	<strong>Replacement windows</strong> with Welded frames- Most dealers recommend frames that are welded over those that are mechanically fastened or screwed together. Also look for neat, well-bonded joints at the corners of the frame.
	</p>
	<p style="padding: 0px 20px 10px 20px;font-size:.8em;">	
	<em>(Source: EPA, Efficient <strong>Vinyl Replacement Windows</strong> Collaborative)</em>
	</p>
	<H2 style="padding: 10px 20px 10px 20px;font-size:1.0em;">Browse J.M. Grove's other services for your next project! </h2>
	<p style="padding: 0px 20px 10px 20px;font-size:.8em;">
	Choose from our  <a href="roofing-shingles.php">roofing</a>, <a href="vinyl-siding-home.php">vinyl siding</a>, <a href="doors.php">doors and windows</a>, <a href="skylights-home.php">skylights</a>, <a href="awning-home.php">retractable awnings</a>, <a href="replacement-windows.php">replacement windows</a> and much more.
</p>
<H2 style="padding: 10px 20px 10px 20px;font-size:1.0em;">Browse J.M. Grove's other services for your next project!</h2>
<p style="padding: 0px 20px 10px 20px;font-size:.8em;">
<div class="option">
						<div class="option-glass" style="width:150px;"><a href="replacement-windows.php" style="color:#333;"><img src="img/window-double-hung.gif" alt="Replacement Windows"><br><strong>Replacement Windows</strong></a></div>
						<div class="option-glass" style="width:150px;"><a href="doors.php" style="color:#333;"><img src="img/doors.jpg" alt="Doors and Windows"><br><strong>Doors and Windows</strong></a></div>
						<div class="option-glass" style="width:150px;"><a href="vinyl-siding-home.php" style="color:#333;"><img src="img/siding-dutch-clap.jpg" alt="vinyl Siding"><br><strong>Vinyl Siding</strong></a></div>
						<div class="option-glass" style="width:150px;"><a href="roofing-shingles-home.php" style="color:#333;"><img src="img/roofing-shake.gif" alt="Roofing Contractor"><br><strong>Roofing Contractor</strong></a></div>
					<p style="padding: 0px 20px 10px 20px;font-size:.8em;">
<div class="option">
<div class="option-glass" style="width:150px;"><a href="skylights-home.php" style="color:#333;"><img src="img/skylight-customize.gif" alt="Skylight Repair"><br><strong>Skylight Repair</strong></a></div>
						<div class="option-glass" style="width:150px;"><a href="gutters-gutterguards.php" style="color:#333;"><img src="img/gutter-kstyle.jpg" alt="Gutter Cleaning and Gutter Guard"><br><strong>Gutter Cleaning and Gutter Guard</strong></a></div>
						<div class="option-glass" style="width:150px;"><a href="awnings-home.php" style="color:#333;"><img src="img/awning-retractable.jpg" alt="Retractable Awnings"><br><strong>Retractable Awnings</strong></a></div>
						<div class="option-glass" style="width:150px;"><a href="decks-railings-home.php" style="color:#333;"><img src="img/deck-earthwood.jpg" alt="Patio Deck"><br><strong>Patio Deck</strong></a></div>
					</div>
					<p style="padding: 0px 20px 10px 20px;font-size:.8em;">
<div class="option">
<div class="option-glass" style="width:150px;"><a href="basement-finishing.php" style="color:#333;"><img src="img/basement-blur2.gif" alt="basment remodeling finishing" width="125" height="135" border="0"><br><strong>basment remodeling finishing</strong></a></div>
<div class="option-glass" style="width:150px;"><a href="kitchen-remodeling.php" style="color:#333;"><img src="img/kitchen-blur.gif" alt="kitchen remodeling company" width="125" height="135" border="0"><br><strong>kitchen remodeling company</strong></a></div>
<div class="option-glass" style="width:150px;"><a href="bathroom-remodeling.php" style="color:#333;"><img src="img/bathroom-icon.png" alt="bathroom remodeling company" width="125" height="135" border="0"><br><strong>bathroom remodeling company</strong></a></div>
<div class="option-glass" style="width:150px;"><a href="flooring-home.php" style="color:#333;"><img src="img/flooring-blur.gif" alt="Flooring company contractor" width="125" height="135" border="0"><br><strong>Flooring company contractor</strong></a></div>
					</div>
</div><br/>
<div style="width:100%";>
	<p><strong>Blogs:</strong></p><br>
<div style="padding: 15px 15px 15px 0px; margin:1px;">
<div style="width:24%; float:left;padding: 15px 15px15px 0px;"><img src="/inc/img/product3.jpg" height='150px'; width='150px'; /></div>
<div style="width:71%; float:left;padding: 15px 15px15px 0px;  "><strong>Window:-</strong>Replacement windows from J. M. Grove is the best quality and value. They are installed by professionals to insure that they last for years with little maintenance. We take pride in our quality workmanship and hand pick the products we sell for exceptional beauty and durability. Improve your home's curb appeal, increase your property value and save money on your utility bill. </div>
</div>
	<div style="clear:both;"></div>
	
<div style="padding: 15px 15px 15px 0px; margin:1px;">
<div style="width:24%; float:left;padding: 15px 15px15px 0px;"><img src="/inc/img/product3.jpg" height='150px'; width='150px'; /></div>
<div style="width:71%; float:left;padding: 15px 15px15px 0px;  "><strong>Window:-</strong>Replacement windows from J. M. Grove is the best quality and value. They are installed by professionals to insure that they last for years with little maintenance. We take pride in our quality workmanship and hand pick the products we sell for exceptional beauty and durability. Improve your home's curb appeal, increase your property value and save money on your utility bill.</div>
</div>
</div>
