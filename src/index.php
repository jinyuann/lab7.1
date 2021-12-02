<?php 
	session_start();
	
	if(isset($_POST['submit']))
	{
		if((isset($_POST['email']) && $_POST['email'] !='') && (isset($_POST['password']) && $_POST['password'] !=''))
		{
			$email = trim($_POST['email']);
			$password = trim($_POST['password']);
			
			if($email == "user@example.com")
			{	
				if($password == "password1234")
				{
					$_SESSION['user_id'] = $email;
					
					header('location:dashboard.php');
					exit;
					
				}
			}
			$errorMsg = "Login failed";
		}
		
		if((isset($_POST['search'])){
		$search = trim($_POST['search']);
		if ($search == "a"){
				alert("Attacked by Prans");
					}
		}

	}
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
	
	<div class="container">
		<h1>PHP Search</h1>
		<?php 
			if(isset($errorMsg))
			{
				echo "<div class='error-msg'>";
				echo $errorMsg;
				echo "</div>";
				unset($errorMsg);
			}
			
			if(isset($_GET['logout']))
			{
				echo "<div class='success-msg'>";
				echo "You have successfully logout";
				echo "</div>";
			}
		?>
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
			<div class="field-container">
				<label>Email</label>
				<input type="email" name="email" required placeholder="DO NOT ENTER THIS FIELD">
			</div>
			<div class="field-container">
				<label>Password</label>
				<input type="password" name="password" required placeholder="DO NOT ENTER THIS FIELD">
			</div>
			<div class="field-container">
				<label>Search</label>
				<input type="password" name="search" required placeholder="ENTER THIS FIELD ONLY">
			</div>
			<div class="field-container">
				<button type="submit" name="submit">Submit</button>
			</div>
			
		</form>
	</div>
</body>
</html>
