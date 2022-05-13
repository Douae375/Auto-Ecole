<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$user_type = $_POST['user_type'];


		if(!empty($user_name) && !empty($password) && !is_numeric($user_name) && !empty($user_type) )
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password,usertype) values ('$user_id','$user_name','$password','$user_type')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="vieuport" content="width-device-width, initial-scale-1.0">
    <title> Auto-école de Meknes </title>
    <link rel="stylesheet" href="style_do.css"/>
</head>
<body>
    <section class="main">
		<form method="post">
         <nav>
             <a href="#" class="logo">
                  <img  class="logo" src="logo.jpg">
             </a>
             <ul class="menu">
                <li><a href="accueil.html">Accueil</a></li>
                <li><a href="tarifs.php">Tarifs</a></li>
                <li> <a class="active" href="#">Se connecter</a></li>
            </ul>
         </nav> 
		 <div id="box">
		 <div  style="font-size:45px;margin: 30px;color: blue;">Créer Un compte :</div>
            <label> Username : </label><br>
			<input id="text" type="text" name="user_name"></br>
			<label> Password : </label><br>
			<input id="text" type="password" name="password"></br>
			<label> User Type : </label><br>
<select  style ="width=20%; " name="user_type" > </br>
    <option value="">--Please choose an option--</option>
    <option value="user">User</option>
    <option value="moniteur">Moniteur</option>
</select></br>
			<input id="button" type="submit" value="Signup"></br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>