<?php
  
    // Connect to database 
    $con = mysqli_connect("localhost","root","root","test");
      
    // mysqli_connect("servername","username","password","database_name")
   
    // Get all the categories from category table
    $sql = "SELECT * FROM customers ";
    $all_customers = mysqli_query($con,$sql);
    $sql = "SELECT * FROM moniteur ";
    $all_moniteurs = mysqli_query($con,$sql);
    $sql = "SELECT * FROM cars ";
    $all_cars = mysqli_query($con,$sql);
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type=text/css  href="style.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
<style>
    body{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Raleway' , sans-serif;
  background-color: rgba(0, 0, 0, 0.13);
  width: 100%;
height: 400px;
position: relative;
background-repeat: no-repeat;
background-size: cover;
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
  height: 130px;
  width: 150px;
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
      background-color: rgb(245, 194, 117);
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
  
  .form-label{
    color: #000;
    font-weight: bolder;
    text-decoration: underline;
  }
  .tablee{
    color: rgba(0, 0, 0, 0.986);
    margin-top: 160px;
    margin-right: 10px;
   
  }
  .tablee input{
    border-radius:2px #000;
  }
  footer p {
 margin: 100px ;
 margin-left: 40%;
  }
    #box{
  margin-top: 150px;}
</style>
    <title>Planifier une date :</title>
</head>
<body>
    
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
    <div class="container">
    <div id="box">
    <form action="simple.php" method="POST">
      <h2> Planification</h2>
                <label class="form-label"> Candidat :</label>
                <select name="customer" class="form-control">
                <option> Select a candidate </option>
                <?php 
                while ($category = mysqli_fetch_array(
                        $all_customers,MYSQLI_ASSOC)):; 
                ?><option value="<?php echo $category["name"];
            ?>">
                <?php echo $category["name"];
                ?>
            </option>
        <?php 
            endwhile; 
        ?>
    </select>
                <Label> Type de réservation :</Label> </br>
                <input type="checkbox" name="type" id="examen" value="examen"> 
                <label for="examen">Examen</label></br>
                <div class="checkbox-card" >
                  <input type="checkbox" name="type" id="seance" value="seance" class="checkme" > 
                  <label for="seance"> Seance </label></br>
                <div class="passport-box">
                <label class="form-label"> Moniteur :</label>
                <select name="moniteur" class="form-control">
                <option>   Selectionne un moniteur  </option>
                <?php 
                while ($category = mysqli_fetch_array(
                        $all_moniteurs,MYSQLI_ASSOC)):; 
                ?><option value="<?php echo $category["name"];
            ?>">
                <?php echo $category["name"];
                ?>
            </option>
        <?php 
            endwhile; 
        ?>
    </select>
    <label class="form-label"> Voiture :</label>
                <select name="car" class="form-control">
                <option> Selectionne une voiture </option>
                <?php 
                while ($category = mysqli_fetch_array(
                        $all_cars,MYSQLI_ASSOC)):; 
                ?><option value="<?php echo $category["name"];
            ?>">
                <?php echo $category["name"];
                ?>
            </option>
        <?php 
            endwhile; 
        ?>
    </select>
                </div>
                <label class="form-label">La date</label>
                  <input type="date" name="date_type" class="form-control">
                  <label for=""  class="form-label">L'heure</label>
                  <input type="time" name="time" class="form-control"> <br>
                </div>
                
                  <input type="submit" name="ajouter" class="btn btn-primary mt-4" value="Ajouter">   
        </form>
    </div>
    </div>
    
<script src="js/jquery-latest.min.js"></script>
<script>
	$(function(){
		$(".checkme").click(function(event) {
			var x = $(this).is(':checked');
			if (x == true) {
				$(this).parents(".checkbox-card").find('.passport-box').show();
			}
			else{
				$(this).parents(".checkbox-card").find('.passport-box').hide();
			}
		});
	})
</script>
</body>

</html>