<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css"> <!-- Külső stíluslapra mutató hivatkozás -->
</head>
<body>
     <form action="dblogin.php" method="post"> 
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Username</label>
     	<input type="text" name="username" placeholder="Enter your username"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Enter your password"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>