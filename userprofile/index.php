<?php include "logincheck.php"; ?>
<!DOCTYPE html>
<html>
<head>
 <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
 <link rel="stylesheet" type="text/css" href="style.css" />
 <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>

 <title>Register Profile</title>
</head>
<body>
<header>
 <nav>
  <ul>
   <li><a href="https://www.terazglobal.com.my/">Teraz Global</a></li>
  </ul>
 </nav>
</header>
<div id="center">
<div id="center-set">
<div id="signup">
<div id="signup-st">
<div align="center">
<?php
$remarks = isset($_GET['remarks']) ? $_GET['remarks'] : '';
if ($remarks==null and $remarks=="") {
echo ' <div id="reg-head" class="headrg">Register Here</div> ';
}
if ($remarks=='success') {
echo ' <div id="reg-head" class="headrg">Registration Success</div> ';
}
if ($remarks=='failed') {
echo ' <div id="reg-head-fail" class="headrg">Registration Failed!, Username exists</div> ';
}
if ($remarks=='error') {
echo ' <div id="reg-head-fail" class="headrg">Registration Failed! <br> Error: '.$_GET['value'].' </div> ';
}
?>
</div>
<form name="reg" action="execute.php" onsubmit="return validateForm()" method="post" id="reg">
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr>
<td>
<input type="text" name="fname" placeholder="First Name" id="tb-box"/>
</td>
</tr>
<tr>
<td><input type="text" name="lname" placeholder="Last Name" id="tb-box"/></td>
</tr>
<tr>
<td><input type="text" id="tb-box" placeholder="Email" name="address" /></td>
</tr>
<tr>
<td><input type="text" id="tb-box" placeholder="Username" name="username" /></td>
</tr>
<tr>
<td><input id="tb-box" type="password" placeholder="Password" name="password" /></td>
</tr>
</table>
<div id="st"><input name="submit" type="submit" value="Submit" id="st-btn"/></div>
</form>
</div>
</div>
<div id="login">
<div id="login-st">
<form action="" method="POST" id="signin" id="reg">
<?php
$remarks = isset($_GET['remark_login']) ? $_GET['remark_login'] : '';
if ($remarks==null and $remarks=="") {
echo ' <div id="reg-head" class="headrg">Login Here</div> ';
}
if ($remarks=='failed') {
echo ' <div id="reg-head-fail" class="headrg">Login Failed!, Invalid Credentials</div> ';
}
?>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr id="lg-1">
<td><input type="text" id="tb-box" placeholder="Username" name="username" /></td>
</tr>
<tr id="lg-1">
<td><input id="tb-box" type="password" placeholder="Password" name="password" /></td>
</tr>
</table>
<div id="st"><input name="submit" type="submit" value="Login" id="st-btn"/></div>
</form>
</div>
</div>
</div>
</div>
</body>
</html>