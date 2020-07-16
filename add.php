<?php 

	// if(isset($_GET['submit'])){
	// 	echo $_GET['email']."<br />";
	// 	echo $_GET['title']."<br />";
	// 	echo $_GET['ingredients'];
	// }	
	if(isset($_POST['submit'])){
		// ."<br />";
		// echo htmlspecialchars($_POST['title'])."<br />";
		// echo htmlspecialchars($_POST['ingredients']);

		// check email
		if(empty($_POST['email'])){
			echo "An email is required <br />";
		} else {
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				echo 'email must be a valid email address <br />';
			}
		}

		// check title
		if(empty($_POST['title'])){
			echo "A title is required <br />";
		} else {
			$title = $_POST['title'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
				echo 'Title must be letters and spaces only';
			}
		}

		// check ingredient
		if(empty($_POST['ingredients'])){
			echo "At least one ingredient is required <br />";
		} else {
			$ingredients = $_POST['ingredients'];
			if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
				echo 'ingredients must be comma separated';
			}
		}
	}// end of POST

?>

<!DOCTYPE html>
<html>

	<?php include 'templates/header.php'; ?>

	<section class="container grey-text">
		<h4 class="center">Add a Pizza</h4>
		<form class="white" action="add.php" method="POST">
			<label>Your Email:</label>
			<input type="text" name="email">
			<label>Pizza Title:</label>
			<input type="text" name="title">
			<label>Ingredients (comma separated):</label>
			<input type="text" name="ingredients">
			<div class="center">
				<input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>
	
	<?php include 'templates/footer.php'; ?>

	
	


</html>