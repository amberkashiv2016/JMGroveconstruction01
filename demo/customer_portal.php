
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1"><title>
	JG Sales
</title><link href="../css/screen.css" rel="stylesheet" media="screen" type="text/css" /><link href="../css/jquery.ui.theme.css" rel="stylesheet" media="screen" type="text/css" /><link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/themes/redmond/jquery-ui.css" /><link href="../datetime/js/jquery.ptTimeSelect.css" rel="stylesheet" type="text/css" /><link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
 
    <style type="text/css">
        .ui-widget-header
        {
            border: 0;
            background: none /*{bgHeaderRepeat}*/;
            color: #222 /*{fcHeader}*/;
        }
    </style>
    
 

    <style type="text/css">
        .rsAptDelete
        {
            display: none;
        }

        .RadScheduler .rsHeader .rsHeaderTimeline
        {
            background-position: -228px -31px;
            float: left;
            font-size: 0;
            height: 24px;
            line-height: 21px;
            margin: -26px 0 0 86px !important;
            overflow: hidden;
            text-indent: -9999px;
            width: 21px;
        }

        *, *:before, *:after
        {
            box-sizing: none !important;
        }

        .RadScheduler_Default .rsHeader .rsSelected em, .RadScheduler_Default .rsHeader ul a:hover span
        {
            color: #fff;
            font-size: 11px;
        }

        .RadScheduler .rsMonthView .rsWrap
        {
            /*height: 71px !important;
            width: 155px !important;*/
            margin: 0 0 10px 0 !important;
        }

         .RadScheduler .rsWeekView .rsApt
        {
            /*height: 66px !important;
            width: 160px !important;*/
            width: 100% !important;
            height: 44px !important;
        }

        .RadScheduler .rsMonthView .rsApt
        {
            /*height: 66px !important;
            width: 160px !important;*/
            width: 100% !important;
            height: 84px !important;
        }


          .RadScheduler .rsDayView .rsApt
        {
            /*height: 66px !important;
            width: 160px !important;*/
            width: 40% !important;
            height: 64px !important;
        }
        tr
        {
            height: none !important;
        }

        .RadScheduler, .RadScheduler *
        {
            margin: 0;
            padding: 0;
            box-sizing: initial !important;
            
        }

          .RadScheduler .rsOvertimeArrow {
                display: none !important;
            }
    </style>



<body>
  
<div class="aspNetHidden">
<input type="hidden" name="ToolkitScriptManager1_HiddenField" id="ToolkitScriptManager1_HiddenField" value="" />
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />

<div class="aspNetHidden">


     
        
        <div class="container">
        <!--header section-->
        <div class="header">
            
<!--tabs jquery-->

<div class="header">
    <img src="../img/logo.png" alt="logo" width="88" height="89" class="logo" />




    <div class="user_panel">
        Welcome! <span>
            <span id="Header1_lbluser">J Grove</span>
            <input type="submit" name="ctl00$Header1$btnlogout" value="Logout" id="Header1_btnlogout" class="cancel" />
        </span>&nbsp;<div class="clr">
        </div>
        <ul>
            <li><a href="home.aspx">Home</a></li>
            <li>|</li>
            <li><a href="/changepassword.aspx">Change Password</a></li>
        </ul>
    </div>
    
</div>

            
        </div>
        <div class="content_panel">
            <div class="left_panel">
                <div class="arrowlistmenu">
                    <h4>
                        Customer</h4>

<style type="text/css">
    .ui-widget-header
    {
        border: 0;
        background: none /*{bgHeaderRepeat}*/;
        color: #222 /*{fcHeader}*/;
    }
</style>

<!--<div class="scroll_left_panel">
    
    <div class="filter_section">
        <input name="ctl00$LeftPanel1$txtcustomersearch" type="text" id="LeftPanel1_txtcustomersearch" />
        <br />
        <select name="ctl00$LeftPanel1$ddlsearchtype" id="LeftPanel1_ddlsearchtype">
	<option selected="selected" value="Select">Select</option>
	<option value="CustomerName">Customer Name</option>
	<option value="CustomerAddress">Customer Address</option>
	<option value="CustomerPhone">Customer Phone</option>
	<option value="Set">Set</option>
	<option value="Prospect">Prospect</option>
	<option value="Sold-in Progress">Sold-in Progress</option>
	<option value="Open Estimates">Open Estimates</option>
	<option value="Closed(not sold)">Closed(not sold)</option>
	<option value="Closed(sold)">Closed(sold)</option>
	<option value="Rehash">Rehash</option>
	<option value="cancelation-no rehash">cancelation-no rehash</option>
	<option value="CustomerId">CustomerId</option>
	<option value="ZipCode">ZipCode</option>
	<option value="Email">Email</option>

</select>
        <input type="image" name="ctl00$LeftPanel1$ImageButton1" id="LeftPanel1_ImageButton1" class="search_btn" src="../img/search_btn.png" />
    </div>
    
</div>
-->
                <!--    <br />
                    <ul class="left_nav">
                    <li><a href="javascript:window.open('http://www.fatcow.com/mail/','mywindow','width=600,height=400')" target="_blank">Email</a></li>
                    <li><a href="ShowResources.aspx">Resources</a></li>                            
                    <li><a href="#">ADMIN </a>
                        <ul>
                            <li id="li_addresources"><a href="AddResources.aspx">Add Resources </a></li>  
                            <li id="li_procurement"><a href="Procurement.aspx">Procurement</a></li>
                            <li id="li_statusoverride"><a href="StatusOverride.aspx">Sr Sales Customer List</a></li>
                            <li id="li_pricecontrol"><a href="Price_control.aspx" id="A1">Price Control</a></li>
                            
                            <li><a href="HRReports.aspx" id="A3">Human Resource</a></li>
                            <li><a href="InstallCreateProspect.aspx" id="A4">Install Prospect</a> </li>
                            <li><a href="StatusEmailTemplate.aspx" id="A2">Email Templates</a></li>
                            
                        </ul>
                    </li>
                    </ul>
                </div>
            </div>-->
            
    <div class="right_panel">

        <ul class="appointment_tab">

            <li><a href="" id="ContentPlaceHolder1_A1" class="active">Payment Section</a> </li>
            <li><a href="" id="ContentPlaceHolder1_A2">Master Calendar</a></li>
            <li><a href="#" id="ContentPlaceHolder1_A5">Construction Calendar</a></li>
            <li><a href="" id="ContentPlaceHolder1_A3">Call Sheet</a></li>
            <li></li>
        </ul>
        <h1><b>Customer Portal</b></h1>
        <h2>Payment Section</h2>
        <div id="ContentPlaceHolder1_divCaledar" class="calendar" style="margin: 0;">
            <div id="calendarBodyDiv">
                
                <div id="ctl00_ContentPlaceHolder1_rsAppointments" class="RadScheduler RadScheduler_Default" AppointmentContexcalendarBodyDivtMenuSettings-EnableDefault="true" style="width:100%;overflow-y:visible;">
	<!-- 2013.1.403.40 --><div class="rsTopWrap rsOverflowExpand">
		<div class="rsHeader">
			<p><a class="rsPrevDay" href="#">previous day</a><a class="rsNextDay" href="#">next day</a><em><a class="rsToday" href="#">today</a></em></p><a class="rsDatePickerActivator" href="#">Select date</a><div class="rsDatePickerWrapper">
				<div id="ctl00_ContentPlaceHolder1_rsAppointments_SelectedDateCalendar_wrapper"><input type="hidden" name="ctl00_ContentPlaceHolder1_rsAppointments_SelectedDateCalendar_SD" id="ctl00_ContentPlaceHolder1_rsAppointments_SelectedDateCalendar_SD" value="[[2015,9,10]]" /><input type="hidden" name="ctl00_ContentPlaceHolder1_rsAppointments_SelectedDateCalendar_AD" id="ctl00_ContentPlaceHolder1_rsAppointments_SelectedDateCalendar_AD" value="[[1900,1,1],[2099,12,30],[2015,9,10]]" /></div>
			</div><ul>
				<li class=" rsFirst"><a href="#" class="rsHeaderDay"><span>Day</span></a></li><li class="rsSelected"><em class="rsHeaderWeek">Week</em></li><li class=" rsLast"><a href="#" class="rsHeaderMonth"><span>Month</span></a></li>
			</ul><h2>
				9/6/2015 - 9/12/2015
			</h2>
		</div><div class="rsContent rsWeekView">
			
		</div><div class="rsFooter">
			<a href="#" class="rsFullTime">Show 24 hours...</a>
		</div>
	</div><div id="ctl00_ContentPlaceHolder1_rsAppointments_appointmentContextMenu">
		<div class="RadMenu RadMenu_Default RadMenu_Context RadMenu_Default_Context    ">
			<ul class="rmActive rmVertical rmGroup rmLevel1">
				<li class="rmItem rmFirst"><a href="#" class="rmLink"><span class="rmText">Edit</span></a></li><li class="rmItem rmLast"><a href="#" class="rmLink"><span class="rmText">Delete</span></a></li>
			</ul>
		</div><input id="ctl00_ContentPlaceHolder1_rsAppointments_appointmentContextMenu_ClientState" name="ctl00_ContentPlaceHolder1_rsAppointments_appointmentContextMenu_ClientState" type="hidden" />
	</div><div id="ctl00_ContentPlaceHolder1_rsAppointments_timeSlotContextMenu">
		<div class="RadMenu RadMenu_Default RadMenu_Context RadMenu_Default_Context    ">
			<ul class="rmActive rmVertical rmGroup rmLevel1">
				<li class="rmItem rmFirst"><a href="#" class="rmLink"><span class="rmText">New Appointment</span></a></li><li class="rmItem "><a href="#" class="rmLink"><span class="rmText">Go to today</span></a></li><li class="rmItem rmLast"><a href="#" class="rmLink"><span class="rmText">Show 24 hours...</span></a></li>
			</ul>
		</div><input id="ctl00_ContentPlaceHolder1_rsAppointments_timeSlotContextMenu_ClientState" name="ctl00_ContentPlaceHolder1_rsAppointments_timeSlotContextMenu_ClientState" type="hidden" />
	</div><script type="text/javascript">
		Telerik.Web.UI.RadScheduler._preInitialize("ctl00_ContentPlaceHolder1_rsAppointments",0,0,2,false);
	</script><input id="ctl00_ContentPlaceHolder1_rsAppointments_ClientState" name="ctl00_ContentPlaceHolder1_rsAppointments_ClientState" type="hidden" />
</div>


                <div id="ctl00_ContentPlaceHolder1_RadWindow1" style="display:none;">
	<div id="ctl00_ContentPlaceHolder1_RadWindow1_C" style="display:none;">

	</div><input id="ctl00_ContentPlaceHolder1_RadWindow1_ClientState" name="ctl00_ContentPlaceHolder1_RadWindow1_ClientState" type="hidden" />
</div>


                
            </div>
        </div>



        <div id="ctl00_ContentPlaceHolder1_RadWindowManager1" style="display:none;">
	<div id="ctl00_ContentPlaceHolder1_RadWindow2" style="display:none;">
		<div id="ctl00_ContentPlaceHolder1_RadWindow2_C" style="display:none;">
			
                        

                    <input type="submit" name="ctl00$ContentPlaceHolder1$RadWindow2$C$btnsave" value="Save" id="ctl00_ContentPlaceHolder1_RadWindow2_C_btnsave" style="height:30px;width:75px;background: url(img/main-header-bg.png) repeat-x; color: #fff;" />
                        &nbsp; &nbsp;
                    <input type="submit" name="ctl00$ContentPlaceHolder1$RadWindow2$C$btnClose" value="Close" id="ctl00_ContentPlaceHolder1_RadWindow2_C_btnClose" style="height:30px;width:75px;background: url(img/main-header-bg.png) repeat-x; color: #fff;" />

                    
		</div><input id="ctl00_ContentPlaceHolder1_RadWindow2_ClientState" name="ctl00_ContentPlaceHolder1_RadWindow2_ClientState" type="hidden" />
	</div><div id="ctl00_ContentPlaceHolder1_RadWindowManager1_alerttemplate" style="display:none;">
		<div class="rwDialogPopup radalert">			
			<div class="rwDialogText">
			{1}				
			</div>
			
			<div>
				<a  onclick="$find('{0}').close(true);"
				class="rwPopupButton" href="javascript:void(0);">
					<span class="rwOuterSpan">
						<span class="rwInnerSpan">##LOC[OK]##</span>
					</span>
				</a>				
			</div>
		</div>
		</div><div id="ctl00_ContentPlaceHolder1_RadWindowManager1_prompttemplate" style="display:none;">
		 <div class="rwDialogPopup radprompt">			
			    <div class="rwDialogText">
			    {1}				
			    </div>		
			    <div>
				   
				    <input title="Enter Value" onkeydown="return RadWindowprompt_detectenter('{0}', event, this);" type="text"  class="rwDialogInput" value="{2}" />
			    </div>
			    <div>
				    <a onclick="$find('{0}').close(this.parentNode.parentNode.getElementsByTagName('input')[0].value);"				
					    class="rwPopupButton" href="javascript:void(0);" ><span class="rwOuterSpan"><span class="rwInnerSpan">##LOC[OK]##</span></span></a>
				    <a onclick="$find('{0}').close(null);" class="rwPopupButton"  href="javascript:void(0);"><span class="rwOuterSpan"><span class="rwInnerSpan">##LOC[Cancel]##</span></span></a>
			    </div>
		    </div>				       
		</div><div id="ctl00_ContentPlaceHolder1_RadWindowManager1_confirmtemplate" style="display:none;">
		<div class="rwDialogPopup radconfirm">			
			<div class="rwDialogText">
			{1}				
			</div>						
			<div>
				<a onclick="$find('{0}').close(true);"  class="rwPopupButton" href="javascript:void(0);" ><span class="rwOuterSpan"><span class="rwInnerSpan">##LOC[OK]##</span></span></a>
				<a onclick="$find('{0}').close(false);" class="rwPopupButton"  href="javascript:void(0);"><span class="rwOuterSpan"><span class="rwInnerSpan">##LOC[Cancel]##</span></span></a>
			</div>
		</div>		
		</div><input id="ctl00_ContentPlaceHolder1_RadWindowManager1_ClientState" name="ctl00_ContentPlaceHolder1_RadWindowManager1_ClientState" type="hidden" />
</div>

        



    </div>

            <div class="clr">
            </div>
        </div>
    </div>
    <!--footer section-->
    <div class="footer_panel">
        <ul>
            <li>&copy; 2012 JG All Rights Reserved.</li>
            <li><a href="#">Terms of Use</a></li>
            <li>|</li>
            <li><a href="#">Privacy Policy</a></li>
        </ul>
    </div>
    

</body>
</html>
