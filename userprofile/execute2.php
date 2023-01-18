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
 $experience=$_POST['experience'];
 $experience2=$_POST['experience2'];
 $skills=$_POST['skills'];
 $workdate=$_POST['workdate'];
 $update_image = $_FILES['update_image']['name'];
 $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
 $update_image_folder = 'uploaded_img/'.$update_image;
 $select = "SELECT * FROM member WHERE mem_id='$loggedin_id'";
 $result = mysqli_query($con,$select);
 $row = mysqli_fetch_assoc($result);
 
 $res= $row['mem_id'];
 if($res === $loggedin_id)
    {
		$update = "UPDATE member SET fname='$fname', lname='$lname', address='$address', username='$username', password='$password', about='$about', habitat='$habitat', mobile='$mobile', experience='$experience', experience2='$experience2', image='$update_image', skills='$skills', workdate='$workdate' WHERE mem_id='$loggedin_id'";
		$sql2 = mysqli_query($con,$update);

 if($sql2)
       { 
		   move_uploaded_file($update_image_tmp_name, $update_image_folder);
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