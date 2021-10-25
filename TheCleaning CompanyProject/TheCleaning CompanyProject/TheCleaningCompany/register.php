<?php
//connecting to the database//
$db = new mysqli('smcse-stuproj00.city.ac.uk', 'adbt117', '200012740', 'adbt117');
//initialising the the php variables and linking them to the html ids//
$USERNAME = $_POST['username'];
$FIRSTNAME =$_POST['firstname'];
$LASTNAME= $_POST['lastname'];
$DATEOFBIRTH=$_POST['dob'];
$PHONE = $_POST['phone'];
$EMAIL = $_POST['email'];
$PASSWORD =$_POST['psw'];//encryption of the password//
$WDYHAU= $_POST['socialMedia'];

//the data inputed in the fields is inserted in the database// 
$insert = "INSERT INTO PersonalDetails (Username,FirstName,LastName,DateOfBirth,MobileNumber,Email,Password,WhereDidYouHearAboutUs) VALUES ('".$USERNAME."', '".$FIRSTNAME."','".$LASTNAME."', '".$DATEOFBIRTH."','".$PHONE."' ,'".$EMAIL."','".$PASSWORD."','".$WDYHAU."')";
$stmt = mysqli_query($db, $insert);

//once the user has logged in successfully they are taken//
// to the booking page where they could book their appointmets//
while ($info = mysqli_fetch_array($stmt))

    echo "Data info {$info["position"]} <br/><br/>";
    $_SESSION['username'] = $USERNAME;
    header("Location:BookingPage.html");
    exit();
print_r ($info);

?>