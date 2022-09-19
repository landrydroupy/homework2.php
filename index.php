

    
    <!DOCTYPE html>
<html>

	<head>
	<?php include("header.php");?>
	</head>	

	</br>
	
	
<body>

	
<div class="container" id="main-content">
	    
	<h2>Please fill out the forms using either the POST or GET method</h2>
	</br>
	<p>Filling out information here will use the POST method</p>
<form action="handlepost.php" method="post">
Name: <input type="text" name="name"><br>
	
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

	<p>Filling out the information here will use the GET method</p>
<form action="handleget.php" method="get">
Name: <input type="text" name="name"><br>
	
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
</div>


</body>
</html>
