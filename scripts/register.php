<?php

require_once 'session.php';
require_once 'dbconnection.php';
require_once 'helpers.php';

if (isset($_POST['register'])) {

    $input = clean($_POST);

    $lssemsaid=$_SESSION['lssemsaid'];
    $name=$_POST['name'];
    $mobnum=$_POST['mobilenumber'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $category=$_POST['category'];
    $propic=$_FILES["propic"]["name"];
    $extension = substr($propic,strlen($propic)-4,strlen($propic));
    $allowed_extensions = array(".jpg","jpeg",".png",".gif");
    $paswd=$_POST['Pasword'];

    if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Profile Pics has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{

$propic=md5($propic).time().$extension;
 move_uploaded_file($_FILES["propic"]["tmp_name"],"images/".$propic);
$sql="insert into tblperson(Category,Name,Picture,MobileNumber,Address,City,Pasword)values(:cat,:name,:pics,:mobilenumber,:address,:city,:Pasword)";
$query=$dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':pics',$propic,PDO::PARAM_STR);
$query->bindParam(':cat',$category,PDO::PARAM_STR);
$query->bindParam(':mobilenumber',$mobnum,PDO::PARAM_STR);
$query->bindParam(':address',$address,PDO::PARAM_STR);
$query->bindParam(':city',$city,PDO::PARAM_STR);
$query->bindParam(':Pasword',$paswd,PDO::PARAM_STR);
 $query->execute();

   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Person Detail has been added.")</script>';
echo "<script>window.location.href ='./index.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  
}
}
?>

   

    
