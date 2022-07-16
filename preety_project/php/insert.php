<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
</head>
<body>
<?php
$con=mysqli_connect("sql109.epizy.com","epiz_32125715","YTWc9R8V5NG","epiz_32125715_candidates");
if(!$con){
    echo "Connection refused :".mysqli_connect_error();
    exit();
}
// echo "connected successsfully done<br>";
if(isset($_POST['submit']) || isset($_POST['submit1']))
{
    $_GET['display_blob'] = true;
    $_POST['display_blob']=true;
    $name=$_POST['name'];         //1
    $phone=$_POST['phone'];       //2
    $email=$_POST['email'];       //3
    $sex=$_POST['gender'];        //4
    $dob=$_POST['dob'];           //5
    $course=$_POST['course'];     //6
    $distric=$_POST['district'];  //7
    $address=$_POST['address'];   //8
    $pincode=$_POST['pincode'];   //9
    $resume=$_POST['resume'];     //10
    $extra=$_POST['extra'];       //11
    // deside which form
    if(isset($_POST['submit']))
       {
        $sql="INSERT INTO pgdegree (name,phone,email,gender,dob,course,district,address,pincode,resume,extra) VALUES ('$name','$phone','$email','$sex','$dob','$course','$distric','$address','$pincode','$resume','$extra')";
          $value=mysqli_query($con,$sql);
          if($value)
          {
                echo "We accept you Resume successfully.<br>Listen your $email inbox within 7 days validation<br>Thank You";
          } 
           else{
                if(mysqli_error($con)){
                    echo "This number already accepted".mysqli_error($con);
                }
            }
       }
     elseif(isset($_POST['submit1']))
     {
       // check if already the number is present
          $sql="INSERT INTO ugdegree (name,phone,email,gender,dob,course,district,address,pincode,resume,extra) VALUES ('$name','$phone','$email','$sex','$dob','$course','$distric','$address','$pincode','$resume','$extra')";
          $value=mysqli_query($con,$sql);
          if($value)
          {
                echo "We accept you Resume successfully.<br>Listen your $email inbox within 7 days validation<br>Thank You";
          } 
           else{
                if(mysqli_error($con)){
                    echo "This number already accepted";
                }
            }
     }
}
            mysqli_close($con);
?>
</body>
</html>
