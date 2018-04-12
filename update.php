<!doctype html>
<html lang="en">
	<head>
		<title>Update the Beer List</title>
		<style>
			body, textarea, input {
			  font-family: "Open Sans", sans-serif;
			  font-size: 1.2em;
			}
			input {
				font-size: 1.5em;
			}
			body {
				background-color: #374049;
				color: #fff;
			}
			.important {
				font-weight: bold;
				color: yellow;
			}
		</style>
	</head>
	<body>
		<?php
			// Check and process the form
			$password = $_POST["password"];
			global $passwordCheck;
			require 'pass.php';
			if (isset($password) && $password == $passwordCheck) {
				$beerListUpd = htmlspecialchars($_POST["beerlist"]);
				// check for new beers submitted
				if (isset($beerListUpd)) {
					$beerFile = fopen("beers.txt","r+");
					// clear out the file
					ftruncate($beerFile,0);
					// update the file with new values
					$fwrite = fwrite($beerFile,$beerListUpd);
					fclose($beerFile);
					// Logic complete, redirect to index
					echo "<script>window.location.href='index.php'</script>";
				}
			}
		?>
		<h1>Update the beer list</h1>
		<p>Put each beer on its <span class="important">own line</span>.</p>
		<form method="post" action="update.php">
			<table>
			<tr>
				<td valign="top">Beer list:</td>
				<td><textarea name="beerlist" rows="8" cols="50"><?php
					// Get the current list
					echo file_get_contents("beers.txt",true);
					?></textarea>
				</td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="text" name="password"></td>
			</tr>
			</table>
			<p>You <span class="important">must</span> enter your password to update the list.</p>
			<input type="submit" value="Update Beers!">
		</form>

	</body>
</html>