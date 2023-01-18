<?php
 include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
 <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
 <link rel="stylesheet" type="text/css" href="style.css" />
 <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
 <title>Profile</title>
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
<h1 align='center'>Welcome <?php echo $loggedin_session; ?>,</h1>
<div id="contentbox">
<?php
$sql="SELECT * FROM member where mem_id=$loggedin_id";
$result=mysqli_query($con,$sql);
?>
<?php
while($rows=mysqli_fetch_array($result)){
?>
<div id="signup">
<div id="signup-st">
<form action="" method="POST" id="signin" id="reg">
<div id="reg-head" class="headrg">Your Profile</div>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr id="lg-1">
<td class="tl-4" colspan="2">
<?php
	if($rows['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$rows['image'].'">';
         }
?>
</td>
</tr>
<tr id="lg-1">
<td class="tl-4" colspan="2"><?php echo $rows['fname']; ?> <?php echo $rows['lname']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-4" colspan="2"><?php echo $rows['about']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Start working date:</div></td>
<td class="tl-4"><?php echo $rows['workdate']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-4" colspan="2" style="border-top: 1px solid black; text-decoration: underline;">Contacts</td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Address:</div></td>
<td class="tl-4"><?php echo $rows['habitat']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Email:</div></td>
<td class="tl-4"><?php echo $rows['address']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Mobile No.:</div></td>
<td class="tl-4"><?php echo $rows['mobile']; ?></td>
</tr>
<tr>
<td colspan="2" style="border-top: 1px solid black;"></td>
</tr>
<tr id="lg-1" rowspan="5">
<td class="tl-1"><div align="left" id="tb-name">Previous Experience:</div></td>
<td class="tl-4">
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr align="left"><td><?php echo $rows['experience']; ?></td></tr>
<tr><td><?php echo $rows['experience2']; ?></td></tr>
</table>
</td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Skills:</div></td>
<td class="tl-4"><?php echo $rows['skills']; ?></td>
</tr>

</table>
</form>
</div>
</div>
<div id="login">
<div id="login-sg">
<div id="st"><a href="logout.php" id="st-btn">Sign Out</a></div>
<div id="st"><a href="deleteac.php" id="st-btn">Delete Account</a></div>
<div id="st"><a href="update.php" id="st-btn">Update Profile</a></div>
</div>
</div>
<?php 
// close while loop 
}
?>
</div>
</div>
</div>
</br>
</body>
</html>