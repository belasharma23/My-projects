<!DOCTYPE html>
<html>
<head>
<title>php demo</title>
</head>
<body>
<?php

$fName = $_POST['fname']; 
$lName = $_POST['lname'];
$Email = $_POST['email'];
$tDate = $_POST['date'];
$pGen = $_POST['gender'];

echo $fName . $lName . "   is the person's name.";
echo $Email . "   is his/her email.";
echo $tDate . "  is his/her birthdate.";
echo $pGen . "  is his/her gender";
?>

</body>
</html>
