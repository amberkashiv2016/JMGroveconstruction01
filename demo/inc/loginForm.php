<div style="width:180px;float:center;height:200px;background-color:#DCDCDC; repeat-x;overflow:hidden;">
<form action="/inc/login.php" method="post" onsubmit="return CheckForm()" name="FreeConsultationForm" style="margin:0px;">
            <input type="hidden" name="frmName" value="FreeConsultation">
            <input type="hidden" name="Address2" value="">
            <input type="hidden" name="ScheduleDate" value="">
            <input type="hidden" name="TimeOfDay" value="">
			
            <table>
                <tbody><tr><td colspan="2" class="f10"></td></tr>
				<tr>
				<td class="f10">
				<h1 style="font-size:1.1em">Login Form</h1></td></tr>
                <tr>
                    <td class="f10">
                        User Name<br>
                        <input class="username" maxlength="20" name="UserName" type="text" style="width:120px;" onfocus="setBorder(this)" onblur="resetBorder(this)">
                    </td>
               </tr>
               <tr>
                    <td class="f10">
                        Password<br>
						
                        <input class="password" maxlength="100" name="Password" type="password" style="width:120px;" onfocus="setBorder(this)" onblur="resetBorder(this)">
                    </td>
					<td class="f10">
					</td>
               </tr>
               <tr>
                    <td class="f10">
						<br>
                        <!--Employee Type<br>
                        <select name="employeeType" class="EmployeeType" style="width:120px;"><option value="">Please Select...</option><option value="Admin">Admin<option value="Sales">Sales</option><option value="Contractor">Contractor</option></select>-->
                    </td>
               </tr>
			<tr>
			<td class="f10"><br></td></tr>
			<tr>
			<td class="f10"></td></tr>
			<tr>
			<td class="f10"></td>
			<td class="f10"><input type="submit" value="Login" /></form></td>
			<td class="f10"><br></td>
			<td class="f10"></td>
			</tr>
            </tbody></table>
            </form>
</div>