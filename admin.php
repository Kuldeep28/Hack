
<html>
<head>
<script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</script>
</head>
<body>

<h1>uldeep.php</h1>
<?php
$my_var ="Hypertext Pre Processor";
echo $my_var;
?>



<form action="user.php" method="POST"> First name:

<input type="text" name="firstname"> <br> Last name:

<input type="text" name="lastname"> 

<input type="hidden" name="form_submitted" value="1" />

<input type="submit" value="Submit">

</form>

</body>

</html>