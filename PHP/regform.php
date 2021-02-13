<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
</head>
<body>
	<?php
$nameErr = $emailErr = $genderErr = "";
$name = $email = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
echo "<h3>Student Data:</h3>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
?>

</body>
</html>