/***********************************************************************************
*	(c) Ger Versluis 2000 version 5.411 24 December 2001 (updated Jan 31st, 2003 by Dynamic Drive for Opera7)
*	For info write to menus@burmees.nl		          *
*	You may remove all comments for faster loading	          *		
***********************************************************************************/

	var NoOffFirstLineMenus=13;			// Number of first level items
	var LowBgColor='CCD9E5';			// Background color when mouse is not over
	var LowSubBgColor='CCD9E5';			// Background color when mouse is not over on subs
	var HighBgColor='9EB6CF';			// Background color when mouse is over
	var HighSubBgColor='9EB6CF';			// Background color when mouse is over on subs
	var FontLowColor='FF3333';			// Font color when mouse is not over
	var FontSubLowColor='FF3333';			// Font color subs when mouse is not over
	var FontHighColor='FF3333';			// Font color when mouse is over
	var FontSubHighColor='FF3333';			// Font color subs when mouse is over
	var BorderColor='CCD9E5';			// Border color
	var BorderSubColor='336699';			// Border color for subs
	var BorderWidth=1;				// Border width
	var BorderBtwnElmnts=1;			// Border between elements 1 or 0
	var FontFamily="verdana"	// Font family menu items
	var FontSize=8;				// Font size menu items
	var FontBold=1;				// Bold menu items 1 or 0
	var FontItalic=0;				// Italic menu items 1 or 0
	var MenuTextCentered='left';			// Item text position 'left', 'center' or 'right'
	var MenuCentered='left';			// Menu horizontal position 'left', 'center' or 'right'
	var MenuVerticalCentered='top';		// Menu vertical position 'top', 'middle','bottom' or static
	var ChildOverlap=.1;				// horizontal overlap child/ parent
	var ChildVerticalOverlap=.2;			// vertical overlap child/ parent
	var StartTop=0;				// Menu offset x coordinate
	var StartLeft=0;				// Menu offset y coordinate
	var VerCorrect=0;				// Multiple frames y correction
	var HorCorrect=0;				// Multiple frames x correction
	var LeftPaddng=2;				// Left padding
	var TopPaddng=3;				// Top padding
	var FirstLineHorizontal=0;			// SET TO 1 FOR HORIZONTAL MENU, 0 FOR VERTICAL
	var MenuFramesVertical=1;			// Frames in cols or rows 1 or 0
	var DissapearDelay=1000;			// delay before menu folds in
	var TakeOverBgColor=1;			// Menu frame takes over background color subitem frame
	var FirstLineFrame='navig';			// Frame where first level appears
	var SecLineFrame='space';			// Frame where sub levels appear
	var DocTargetFrame='space';			// Frame where target documents appear
	var TargetLoc='MenuPos';				// span id for relative positioning
	var HideTop=0;				// Hide first level when loading new document 1 or 0
	var MenuWrap=1;				// enables/ disables menu wrap 1 or 0
	var RightToLeft=0;				// enables/ disables right to left unfold 1 or 0
	var UnfoldsOnClick=0;			// Level 1 unfolds onclick/ onmouseover
	var WebMasterCheck=0;			// menu tree checking on or off 1 or 0
	var ShowArrow=0;				// Uses arrow gifs when 1
	var KeepHilite=1;				// Keep selected path highligthed
	var Arrws=['tri.gif',5,10,'tridown.gif',10,5,'trileft.gif',5,10];	// Arrow source, width and height

function BeforeStart(){return}
function AfterBuild(){return}
function BeforeFirstOpen(){return}
function AfterCloseAll(){return}


// Menu tree
//	MenuX=new Array(Text to show, Link, background image (optional), number of sub elements, height, width);
//	For rollover images set "Text to show" to:  "rollover:Image1.jpg:Image2.jpg"

Menu1=new Array("• Home","index.html","",0,20,129);

Menu2=new Array("• Windows »","windows.html","",2,20);

	Menu2_1=new Array("Replacement Windows »","windows_replacement.html","",9,20,170);
		Menu2_1_1=new Array("Double Hung","windows_replacement_doublehung.html","",0,20,100);
		Menu2_1_2=new Array("Casement","windows_replacement_casement.html","",0,20);
		Menu2_1_3=new Array("Sliders","windows_replacement_sliders.html","",0,20);
		Menu2_1_4=new Array("Awning","windows_replacement_awning.html","",0,20);
		Menu2_1_5=new Array("Bay","windows_replacement_bay.html","",0,20);
		Menu2_1_6=new Array("Bow","windows_replacement_bow.html","",0,20);
		Menu2_1_7=new Array("Garden","windows_replacement_garden.html","",0,20);
		Menu2_1_8=new Array("Picture","windows_replacement_picture.html","",0,20);
		Menu2_1_9=new Array("Basement","windows_replacement_basement.html","",0,20);

              Menu2_2=new Array("Storm Windows »","windows_storm.html","",2,20,120);
		Menu2_2_1=new Array("Triple Track","windows_storm_tripletrack.html","",0,20,100);
		Menu2_2_2=new Array("Picture Storm","windows_storm_picturestorm.html","",0,20);

Menu3=new Array("• Doors »","doors.html","",3,20);

	Menu3_1=new Array("Entry Doors »","doors_entry.html","",2,20,100);
		Menu3_1_1=new Array("Steel","doors_entry_steel.html","",0,20,100);
		Menu3_1_2=new Array("Fiberglass","doors_entry_fiberglass.html","",0,20);

	Menu3_2=new Array("Storm Doors »","doors_storm.html","",2,20);
		Menu3_2_1=new Array("Solid Core","doors_storm_solid.html","",0,20,100);
		Menu3_2_2=new Array("Hollow Core","doors_storm_hollow.html","",0,20);

	Menu3_3=new Array("Patio Doors »","doors_patio.html","",2,20);
		Menu3_3_1=new Array("Sliding","doors_patio_sliding.html","",0,20,100);
		Menu3_3_2=new Array("Hinged","doors_patio_hinged.html","",0,20);

Menu4=new Array("• Siding »","siding.html","",3,20);

	Menu4_1=new Array("Vinyl","siding_vinyl.html","",0,20,200);
	Menu4_2=new Array("Shutters","shutters.html","",0,20);
	Menu4_3=new Array("Soffit & Fascia/Metal Work","siding_soffit.html","",0,20);

Menu5=new Array("• Roofing »","roofing.html","",7,20);

	Menu5_1=new Array("Shingle »","roofing_shingle.html","",3,20,190);
		Menu5_1_1=new Array("25 Year","roofing_shingle_25.html","",0,20,80);
		Menu5_1_2=new Array("30 Year","roofing_shingle_30.html","",0,20);
		Menu5_1_3=new Array("50 Year","roofing_shingle_50.html","",0,20);

	Menu5_2=new Array("Rubber","roofing_rubber.html","",0,20);
	Menu5_3=new Array("Roof Coatings","roofing_coatings.html","",0,20);
	Menu5_4=new Array("Skylights","roofing_skylights.html","",0,20);
	Menu5_5=new Array("Snow Guards","roofing_guards.html","",0,20);
	Menu5_6=new Array("Shingle Sheilds","roofing_sheilds.html","",0,20);
	Menu5_7=new Array("Preventative Maintenance","roofing_maintenance.html","",0,20);


Menu6=new Array("• Spouting »","spouting.html","",3,20);

	Menu6_1=new Array("K Style Seamless","spouting_seamless.html","",0,20,120);
	Menu6_2=new Array("Half Round","spouting_halfround.html","",0,20);
	Menu6_3=new Array("Heat Tape","spouting_heattape.html","",0,20);

Menu7=new Array("• Gutter Guard »","gutters.html","",2,20);

	Menu7_1=new Array("Waterloov","gutters_waterloov.html","",0,20,80);
	Menu7_2=new Array("Mesh GG","gutters_mesh.html","",0,20);

Menu8=new Array("• Awnings »","awnings.html","",2,20);

	Menu8_1=new Array("Retractable","awnings_retractable.html","",0,20,100);
	Menu8_2=new Array("Permanente »","awnings_permanente.html","",2,20);
		Menu8_2_1=new Array("Aluminum","awnings_permanente_aluminum.html","",0,20,80);
		Menu8_2_2=new Array("Fiberglass","awnings_permanente_fiberglass.html","",0,20);

Menu9=new Array("• Enclosure »","enclosure.html","",2,20);

	Menu9_1=new Array("Four Season","enclosure_season.html","",0,20,140);
	Menu9_2=new Array("Screened-in-Porch","enclosure_screened.html","",0,20);

Menu10=new Array("• Railing/Columns","railing_columns.html","",0,20);

Menu11=new Array("• Other Services »","other.html","",1,20);

	Menu11_1=new Array("Repairs/Service","other_repair.html","",0,20,120);

Menu12=new Array("• Our Team","team.html","",0,20);

Menu13=new Array("• Contact","contact.html","",0,20);