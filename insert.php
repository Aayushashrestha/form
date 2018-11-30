<html>

<body>


<?php

$con = mysqli_connect('localhost','root','','php_project');
 

$sql="INSERT INTO employee (Dt,ID, Name, Department)

VALUES

('$_POST[dt]','$_POST[id]','$_POST[name]','$_POST[d_id]')";

mysqli_query($con,$sql);

echo "Your record has been added."
?>

</body>

</html>