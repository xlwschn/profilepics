<!DOCTYPE html>
<html>
<head>
 <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
 <link rel="stylesheet" type="text/css" href="style.css" />
 <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>

 <title>Update Profile</title>
 <script language="javascript">
		function addRow(tableID) {

			var table = document.getElementById(tableID);

			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);

			var cell1 = row.insertCell(0);
			var element1 = document.createElement("input");
			element1.type = "checkbox";
			element1.name="chkbox[]";
			cell1.appendChild(element1);

			var cell2 = row.insertCell(1);
			var element2 = document.createElement("input");
			element2.type = "text";
			element2.name = "experience[]";
			cell2.appendChild(element2);


			var cell3 = row.insertCell(2);
			var element3 = document.createElement("input");
			element3.type = "textarea";
			element3.name = "experience2[]";
			cell3.appendChild(element3);


		}

		function deleteRow(tableID) {
			try {
			var table = document.getElementById(tableID);
			var rowCount = table.rows.length;

			for(var i=0; i<rowCount; i++) {
				var row = table.rows[i];
				var chkbox = row.cells[0].childNodes[0];
				if(null != chkbox && true == chkbox.checked) {
					table.deleteRow(i);
					rowCount--;
					i--;
				}


			}
			}catch(e) {
				alert(e);
			}
		}

	</script>
</head>
<body>
<header>
 <nav>
  <ul>
   <li><a href="https://www.terazglobal.com.my/">Teraz Global</a></li>
  </ul>
 </nav>
</header>
<form name="update" action="execute2.php" method="post" id="update">
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr>
<td>
<input type="text" name="fname" placeholder="Update First Name" id="tb-box"/>
</td>
</tr>
<tr>
<td><input type="text" name="lname" placeholder="Update Last Name" id="tb-box"/></td>
</tr>
<tr>
<td><input type="text" id="tb-box" placeholder="Update Email" name="address" /></td>
</tr>
<tr>
<td><input type="text" id="tb-box" placeholder="Update Username" name="username" /></td>
</tr>
<tr>
<td><input id="tb-box" type="password" placeholder="Update Password" name="password" /></td>
</tr>
<tr>
<td><input id="tb-box" type="text" placeholder="Update Job Position" name="about" /></td>
</tr>
<tr>
<td><input id="tb-box" type="text" placeholder="Update Address" name="habitat" /></td>
</tr>
<tr>
<td><input id="tb-box" type="text" placeholder="Update Mobile No." name="mobile" /></td>
</tr>
<tr>
<input type="button" value="Add Row" onclick="addRow('dataTable')" />
<input type="button" value="Delete Row" onclick="deleteRow('dataTable')" />
<table id="dataTable" width="350px" border="1">
<tr>
<td><input type="checkbox" name="chk[]"/></td>
<td><input id="tb-box" type="text" placeholder="Update Experience" name="experience" /></td>
<td><textarea rows = "5" cols = "50" name = "experience2" id="tb-box">Update Experience</textarea></td>
</tr>
</table>
</tr>
<tr>
<td><input id="tb-box" type="text" placeholder="Update Skills" name="skills" /></td>
</tr>
<tr>
<td><input id="tb-box" type="text" placeholder="Update Start working date" name="workdate" /></td>
</tr>
</table>
<div id="st"><input name="edit" type="submit" value="Submit" id="st-btn"/></div>
</form>
</body>
</html>
