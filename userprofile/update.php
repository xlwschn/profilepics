<!DOCTYPE html>
<html>
<head>
 <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
 <link rel="stylesheet" type="text/css" href="style.css" />
 <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>

 <title>Update Profile</title>

</head>
<body>
<header>
 <nav>
  <ul>
   <li><a href="https://www.terazglobal.com.my/">Teraz Global</a></li>
  </ul>
 </nav>
</header>
<form name="update" action="execute2.php" method="post" id="update" enctype="multipart/form-data">
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr>
<td>Update Profile Picture(.jpg,.jpeg,.png)</td>
</tr>
<tr>
<td>
<input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
</td>
</tr>
<tr>
<td>
<input type="text" name="fname" placeholder="Update First Name" id="tb-box" required>
</td>
</tr>
<tr>
<td><input type="text" name="lname" placeholder="Update Last Name" id="tb-box" required></td>
</tr>
<tr>
<td><input type="text" id="tb-box" placeholder="Update Email" name="address" required></td>
</tr>
<tr>
<td><input type="text" id="tb-box" placeholder="Update Username" name="username" required></td>
</tr>
<tr>
<td><input id="tb-box" type="password" placeholder="Update New Password" name="password" required></td>
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
<td><input id="tb-box" type="text" placeholder="Update Previous Experience" name="experience" /></td>
</tr>
<tr>
<td><textarea rows = "5" cols = "50" name = "experience2" id="tb-box">Description</textarea></td>
</tr>
<tr>
<td><input id="tb-box" type="text" placeholder="Update Skills" name="skills" /></td>
</tr>
<tr>
<td><input id="tb-box" type="text" placeholder="Update Start working date" name="workdate" /></td>
</tr>
<tr>
<td>Add Awards/Certificate(.jpg, .jpeg, .png, .pdf)</td>
</tr>
<tr>
<td>
<input type="file" name="docx" accept=".doc, .docx, .pdf" class="box">
</td>
</tr>
</table>
<div id="st"><input name="edit" type="submit" value="Submit" id="st-btn"/></div>
</form>
</body>
</html>
