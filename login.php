<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$passwordAdmin= "admin2022";

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			
			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					if($user_data['password'] === $passwordAdmin)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: admin_acceuil.html");
						die;
					}
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: tarifs1.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="vieuport" content="width-device-width, initial-scale-1.0">
    <title> Auto-école de Meknes </title>
    <link rel="stylesheet" href="style_do.css"/>
	<style>
		body{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Raleway' , sans-serif;
  background-color: rgba(0, 0, 0, 0.075);
  width: 100%;
height: 400px;
position: relative;
background-repeat: no-repeat;
background-size: auto;
  background-color: ghostwhite;
  background-image: url("dd.png");
background-position: right bottom 170%  ;

}
a{
  text-decoration: none;
}
.condition,.piece{
  margin-left: 20px;
  margin-top: 20px;
}
.at-text ul{
  list-style-type: circle;
}
ul{
  list-style: none;
}
li {
  font: 1rem 'Fira Sans', sans-serif;
  margin-bottom: .5rem;
}


input, button, textarea{
  border: none;
  outline: none;
}

nav{
  display: flex;
  justify-content: space-around;
  align-items: center;
  left: 0;
  top: 0;
  width: 100%;
  z-index: 1;
  position: fixed;
background-color: rgb(0, 0, 0);
}
nav ul{
  display: flex;
}
nav ul li a{
  height: 40px;
  line-height: 43px;
  margin: 3px;
  padding: 0 22px;
  display: flex;
  font-size: 0.7cm;
  text-transform: uppercase;
  font-weight: 0.7cm;
  letter-spacing: 1px;
  border-radius: 3px;
  transition-timing-function: 0.6s  ease-in-out;
  color: #ffffff;
}
nav ul li a:hover{
  background-color: rgb(126, 117, 245);
    color: #fff;
    box-shadow: 5px 10px 30px rgba(255, 255, 255, 0.397);
  }
  .active{
    background-color: #6157e9;
    color: #fff;
    box-shadow: 5px 10px 30px rgba(252, 243, 240, 0.397);
  }
.logo {
  width: 124px;
  margin-top: auto;
  margin-bottom: auto;
}
.main-heading{
  width: 500px;
   position: absolute;
   left: 16%;
   top: 50%;
   transform: translate(-16%, -47%);
}
.main-heading h1{
  font-size: 41px;
  margin: 0%;
  letter-spacing: 2px;
  color: rgba(236, 113, 12, 0.932);
}
.main-heading p{
 color: rgba(18, 82, 156, 0.918);
 margin-left: 30%;
 font-style: italic;
 font-size: larger;
background-color: #fff;
 
}
.main-btn:hover{
 box-shadow: 5px 18px 30px rgba(252, 59, 0, 0.397);
}
#text{

  height: 25px;
  border-radius: 5px;
  padding: 4px;
  border: solid thin #aaa;
  width: 50%;
  }
  #box{
  border : solid 2px grey ;
  border-radius : 4px;
  margin: 10%;
  width: 450px;
  padding: 100px;
      margin-right: 5%;
  
}
  div a {
  color : black ;
}
  #button {
      display: inline-block;
      background-color: rgb(136, 178, 218);
      border-radius: 5px;
      border: 4px double #cccccc;
      color: white;
      text-align: center;
      font-size: 28px;
      padding: 10px;
      width: 150px;
      -webkit-transition: all 0.5s;
      -moz-transition: all 0.5s;
      -o-transition: all 0.5s;
      transition: all 0.5s;
      cursor: pointer;
      margin: 5px;
    }
  
nav{
  display: flex;
  justify-content: space-around;
  align-items: center;
  left: 0;
  top: 0;
  width: 100%;
  z-index: 1;
  position: fixed;
  background-color: antiquewhite;
}
nav ul{
  list-style: none;
}

nav{
  display: flex;
  justify-content: space-around;
  align-items: center;
  left: 0;
  top: 0;
  width: 100%;
  z-index: 1;
  position: fixed;
  background-color: rgb(0, 0, 0);
}

footer{
  border-color: bisque;
  color: #333030;
  text-align: center;
}

  .form-label{
    color: #000;
    font-weight: bolder;
    text-decoration: underline;
  }
	</style>
</head>
<body>
<section >
		<form method="post">
         <nav>
             <a href="#" class="logo">
                  <img  class="logo" src="logo.gif">
             </a>
             <ul class="menu">
                <li><a href="accueil.html">Accueil</a></li> <nobr>
                <li><a href="tarifs.php">Tarifs</a></li> <nobr>
                <li> <a class="active" href="#">Se connecter</a></li> <nobr>
				
            </ul>
         </nav>
		 <div id="box">
		 <legend  style="font-size:50px;margin: 30px;color: blue;">S'authentifier :</legend>
            <label>  Username :</label> </br>
			<input id="text" type="text" name="user_name"></br>
			<label>  Password : </label><br>
			<input id="text" type="password" name="password"></br>
        	<input id="button" type="submit" value="Login"></br>
            <a href="test_signup.php" >Click to Signup</a><br><br> 
            </div>	
</form>
</section>
</body>
<footer>
<p> Copyright © 2022 Auto ecole de Meknes</p>
</footer>
</html>