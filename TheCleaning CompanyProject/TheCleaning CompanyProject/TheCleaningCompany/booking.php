<?php
//connecting to the database//
 $db = new mysqli('smcse-stuproj00.city.ac.uk', 'adbt117', '200012740', 'adbt117');
// Convert all applicable characters to HTML entities//
$USERNAME =  htmlentities($_POST['username']);
$CLEANINGTYPE = htmlentities($_POST['media']);
$CLEANINGDATE= htmlentities($_POST['bookingdate']);
$STARTTIME= htmlentities($_POST['demoA']);



$queryTIME = "SELECT StartTime FROM ServiceInfo WHERE StartTime='".$StartTime."'";
$queryDATE = "SELECT CleaningDate FROM ServiceInfo WHERE CleaningDate='".$CleaningDate."'";

$query="SELECT * FROM ServiceInfo WHERE Username = '".$USERNAME."'";

$time = mysqli_query($db,$queryTIME) or die (mysqli_error($db));
mysqli_real_escape_string($db,$queryTIME);

$date = mysqli_query($db,$queryDATE) or die (mysqli_error($db));
mysqli_real_escape_string($db,$queryDATE);
if (mysqli_num_rows($time) >= 1 && mysqli_num_rows($date) >= 1){
    echo "This Time or Date is taken";
    $_SESSION['username'] = $USERNAME;
    header("Location:Page1.html");
    exit();

} else {
//inserting  the data inputed by the user //
    $insert = "INSERT INTO ServiceInfo  (Username,CleaningType,CleaningDate,StartTime) 
VALUES ('" . $USERNAME . "', '" . $CLEANINGTYPE . "','" . $CLEANINGDATE . "', '" . $STARTTIME . "')";

    $stmt = mysqli_query($db, $insert) or die (mysqli_error($db));
    mysqli_real_escape_string($db,$insert);
    echo "Your booking has been registered ";
    $_SESSION['username'] = $USERNAME;
    header("Location:Page1.html");
    exit();
}
?>