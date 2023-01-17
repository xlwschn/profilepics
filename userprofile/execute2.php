<?php 
include('db.php');
include('session.php');
if(isset($_POST['edit']))
 {
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $address=$_POST['address'];
 $username=$_POST['username'];
 $password=$_POST['password'];
 $about=$_POST['about'];
 $habitat=$_POST['habitat'];
 $mobile=$_POST['mobile'];
 $chkbox = $_POST['chk'];
 $experience=$_POST['experience'];
 $experience2=$_POST['experience2'];
 $skills=$_POST['skills'];
 $workdate=$_POST['workdate'];
 
 foreach($experience as $a => $b)
  echo "$chkbox[$a]  -  $experience[$a]  -  $experience2[$a] <br />";
 $select = "SELECT * FROM member WHERE mem_id='$loggedin_id'";
 $result = mysqli_query($con,$select);
 $row = mysqli_fetch_assoc($result);
 
 $res= $row['mem_id'];
 if($res === $loggedin_id)
    {
		$update = "UPDATE member SET fname='$fname', lname='$lname', address='$address', username='$username', password='$password', about='$about', habitat='$habitat', mobile='$mobile', chk='$chkbox', experience='$experience', experience2='$experience2', skills='$skills', workdate='$workdate' WHERE mem_id='$loggedin_id'";
		$sql2 = mysqli_query($con,$update);

 if($sql2)
       { 
           /*Successful*/
           header('location:welcome.php');
       }
       else
       {
           /*sorry your profile is not update*/
           header('location:update.php');
       }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:update.php');
    }
}
?>