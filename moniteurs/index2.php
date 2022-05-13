<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/class" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type=text/css  href="style.css"/>

    <script src="js/bootstrap.min.js"></script>
</head>
<body>
   
<div class="container">
            <div class="row">                                                                                                                                                                                         
            <nav>
             <a href="#" class="logo">
                  <img  class="logo" src="auto-ecole-formation.jpg">
             </a>
             <ul class="menu">
                <li><a href="accueil.html">Accueil</a></li>
                <li><a href="tarifs.php">Tarifs</a></li>
                <li> <a class="active" href="#">Se connecter</a></li>
              </ul>
         </nav> 
            </div>
            <div class="style1">
        
                <h3>Bienvenu   Auto-école</h3>
            </div>
            <div class="tablee">
                <p>
                    <a href="create2.php" id="btn" class="btn btn-success">Create</a>
                </p>
                 
                <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email Address</th>
                          <th>Mobile Number</th>
                          <th>Action</th>
                        </tr>
						</thead>
                      <tbody>
                      <?php 
                       include 'database2.php';
                       $pdo = Database::connect();
                       $sql = 'SELECT * FROM moniteur ORDER BY id DESC';
                       foreach ($pdo->query($sql) as $row) {
                                echo '<tr>';
                                echo '<td>'. $row['name'] . '</td>';
                                echo '<td>'. $row['email'] . '</td>';
                                echo '<td>'. $row['mobile'] . '</td>';
                                echo '<td width=250>';
                                echo '<a class="btn" href="read2.php?id='.$row['id'].'">Read</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="update2.php?id='.$row['id'].'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="delete2.php?id='.$row['id'].'">Delete</a>';
                                echo '</td>';
                                echo '</tr>';
                       }
                       Database::disconnect();
                      ?>
                      </tbody>
                </table>
        </div>
    </div> <!-- /container -->
  </body>
  <footer>
  <p>Copyright © 2022 Auto ecole de Meknes</p>

  </footer>
</html>
