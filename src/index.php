<?php 
	session_start();
	
	if(isset($_POST['submit']))
	{
		
		
		if((isset($_POST['search']))){
		$search = trim($_POST['search']);
		if (preg_match('/[^a-zA-Z0-9\s\-_\.\?]',$search)){
				alert("HASDHASHD");
					}
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
