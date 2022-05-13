<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/class" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type=text/css  href="style.css"/>

</head>
<body>
<div class="container">
            <div class="row">                                                                                                                                                                                             
            <nav>
             <a href="#" class="logo">
                  <img  class="logo" src="auto-ecole-formation.jpg">
             </a>
             <ul class="menu">
                <li><a href="./acceuil.php">Accueil</a></li>
                <li><a href="tarifs.php">Tarifs</a></li>
                <li> <a class="active" href="#">Se connecter</a></li>
              </ul>
         </nav> 
            </div>
           
            <div class="tablee">
               <p>
                    <a href="planification.php" class="btn btn-success">Planifier</a>
                </p>
                 
                <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Candidat</th>
                          <th> Type</th>
                          <th> Date</th>
                          <th> L'heure</th>
                          <th> Le moniteur</th>

                          <th>Action</th>
                        </tr>
						</thead>
                      <tbody>
                      <?php 
                       include 'database.php';
                       $pdo = Database::connect();
                       $sql = 'SELECT * FROM Date_plan ORDER BY id DESC';
                       foreach ($pdo->query($sql) as $row) {
                                echo '<tr>';
                                echo '<td>'. $row['customer'] . '</td>';
                                echo '<td>'. $row['type'] . '</td>';
                                echo '<td>'. $row['date_type'] . '</td>';
                                echo '<td>'. $row['time'] . '</td>';
                                echo '<td>'. $row['moniteur'] . '</td>';
                                echo '<td width=250>';

                                echo '<a class="btn btn-success" href="updateDate.php?id='.$row['id'].'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="deleteDate.php?id='.$row['id'].'">Delete</a>';
                                echo '</td>';
                                echo '</tr>';
                       }
                       Database::disconnect();
                      ?>
                      </tbody>
                </table>
        </div>
    </div> 
  </body>
  <footer>
  <p>Copyright © 2022 Auto ecole de Meknes</p>

  </footer>
</html>
