<?php 
if (isset($_POST["submit"])) {
	if($_POST["nama"] == "admin" && $_POST["password"] == "123"){
		header("Location: logout.php");
		exit;
	}else{
		$eror = true;

	}
}







 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>menu login</title>


	<style>
		
		div {
			margin: auto;
     		position: absolute;
    		top: 0; left: 0; bottom: 0; right: 0;
			width:350px;
			height:350px;
			box-shadow:solid 1px;
			box-shadow: 0px 0px 5px 5px rgba(0,0,0,.1);
			border-radius:10px;
			}

		input:hover {
			box-shadow: 0px 0px 1px 1px yellow;
			}



		h1 {
			text-align: center;
		}

		form{
			text-align:center;
		}


		table { margin: auto;
			text-align:center;	

		}

		a {
			text-decoration:none;
		}


		button {
			width:100px;
			background-color:#618FBF;
		}

		p {
			text-align:center;
			color:red;
			font-style:italic;
		}
	</style>



</head>
<body>
	<div>
		<h1>Member login</h1>
		<?php if (isset($eror)) {?>

		<p>password/username salah !!!</p>

		<?php } ?>



					<table cellpadding="7">
						<form action="" method="POST">
							<tr>
								<td colspan="2"><input type="text" name="nama" id="username" placeholder="username"></td>
							
							</tr>
							<tr>
								<td colspan="2"><input type="password" name="password" id="password" placeholder="password" ></td>
								
							</tr>	
							<tr>
								<td><input type="checkbox" id="check"><label for="check">remember me</label></td>
								<td><a href="">forgot password ?</a></td>
							</tr>	
							<tr>
								<td><button type="submit" name="submit">ok</button></td>
								<td><button type="submit" name="cancel">cancel</button></td>
							</tr>	
							<tr>
								<td colspan="2"><a href="">create new account</a>
							
							</tr>	
						</form>
					</table>
	</div>



</body>
</html>