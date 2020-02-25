<?php
// $target_dir = "inc/";
// $target_file = $target_dir.basename($_FILES["file"]["new.jpeg"]);


// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'inc/config.php';
require_once 'inc/function.php';


$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {

    $cdno = $_POST['cardnumber'];  
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $phone = $_POST['phonenumber'];
    $address = $_POST['address'];

    $sql = "INSERT INTO Card (cardnumber, firstname, lastname, phonenumber, address)
    VALUES ('$cdno','$fname','$lname','$phone','$address')";
    
    $result = $conn->query( $sql );
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
       $_SESSION['error']= "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    $_SESSION['error']= "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    $_SESSION['error']= "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $_SESSION['error']= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $_SESSION['error']= "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        $_SESSION['error']= "Sorry, there was an error uploading your file.";
    }
}
	
header("Location: addcard.php");

	

