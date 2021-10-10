<?php
include "./control/process.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<fieldset style="width:270px">
<form action="" method="POST">
<h1>Enter the following information carefully</h1><br><br>
Firstname: <input type="text" name="fname"><?php echo " [Min. 3 characters]"?><br><br>
Lastname: <input type="text" name="lname"><?php echo " [Min. 3 characters]"?><br><br>
Date of Birth:
<input type="date" name="dob" id="dob" required><br><br>
Designation:
<input type="radio" name="designation" value="Junior Programmer">Junior Programmer
<input type="radio" name="designation" value="Senior Programmer">Senior Programmer
<input type="radio" name="designation" value="Project Lead">Project Lead<br><br>
Prefferedlanguage:
<input type="radio" name="prefferedlanguage" value="JAVA">JAVA
<input type="radio" name="prefferedlanguage" value="PHP">PHP<br><br>
E-mail: <input type="text" name="email"><?php echo " [Enter valid e-mail]"?><br><br>
Address:<br>
<textarea cols="50" rows="5" name="address"></textarea><?php echo " [Min. 12 characters]"?><br><br>
<input type="submit" value="Submit">

</form>
</fieldset>
    
</body>
</html>