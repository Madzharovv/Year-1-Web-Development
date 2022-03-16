<?php
//connecting to the database//
 $db = new mysqli('smcse-stuproj00.city.ac.uk', 'adbt117', '200012740', 'adbt117');
 //initialising the the php variables and linking them to the html ids//

$USERNAME = $_POST['username'];
$PASSWORD = $_POST['password'];

//gets the username and the password form the database and it checks if the they match with the username and password that were enetered by the user.

$queryNAME = "SELECT Username FROM PersonalDetails WHERE Username='".$USERNAME."'";
$queryPASS = "SELECT Password FROM PersonalDetails WHERE Password='".$PASSWORD."'";
$name = mysqli_query($db,$queryNAME) or die (mysqli_error($db));
$pass = mysqli_query($db,$queryPASS) or die (mysqli_error($db));

//checks if the they match with the username and password that were enetered hy the user.
//once the right loggin is entered the user is taken to the booking page if not the user is told that they have entered an Incorect login.  

if (mysqli_num_rows($name) == 1 && mysqli_num_rows ($pass) >= 1) {
    echo "Logged in";
    $_SESSION['username'] = $USERNAME;
    header("Location:BookingPage.html");
    exit();
}else{
    echo "Incorrect login";
}

?>