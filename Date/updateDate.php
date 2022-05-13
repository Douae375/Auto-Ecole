<?php 
    require 'database.php';
 
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: indexDate.php");
    }
     
    if ( !empty($_POST)) {
        // keep track validation errors
        $customerError = null;
        $typeError = null;
        $dateTypeError = null;
        $timeError = null;
        $moniteurError = null;

         
        // keep track post values
        $customer = $_POST['customer'];
        $type = $_POST['type'];
        $date_type = $_POST['date'];
        $time = $_POST['time'];
        $moniteur = $_POST['moniteur'];
         
        // validate input
        $valid = true;
        if (empty($customer)) {
            $customerError = 'Please enter a customer ';
            $valid = false;
        }
        if (empty($type)) {
            $typeError = 'Please enter type';
            $valid = false;
        } 
        if (empty($date_type)) {
            $dateTypeError = 'Please enter a valid Date';
            $valid = false;
        }
        if (empty($time)) {
            $timeError = 'Please enter a valid Time';
            $valid = false;
        }
        if (empty($moniteur)) {
            $moniteurError = 'Please enter a valid name';
            $valid = false;
        }
           // update data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE Date_plan  set customer = ?, type = ?, date_type = ?, time =?, moniteur =? WHERE id = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($customer,$type,$date_type,$time,$moniteur,$id));
            Database::disconnect();
            header("Location: indexDate.php");
        }
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM Date_plan where id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $customer = $data['customer'];
        $type = $data['type'];
        $date_type = $data['date'];
        $time = $data['time'];
        $moniteur = $data['moniteur'];

        Database::disconnect();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type=text/css  href="style.css"/>

    <script src="js/bootstrap.min.js"></script>
    <style>
        .style1{
    position: relative;
    margin-top: 100px;
    margin: left 20px;
  }
    </style>
</head>
 
<body>
<div class="row">                                                                                                                                                                                                    ååpööööåå
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
         <section class="style1" >

                <div class="span10 offset1">
                    <div class="row">
                        <h3>Modification d'une planification : </h3>
                    </div>
                    <form class="form-horizontal" action="updateDate.php?id=<?php echo $id?>" method="post">
                      <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
                        <label class="control-label">Nom du Candidat :</label>
                        <div class="controls">
                            <input name="customer" type="text"  placeholder="Name" value="<?php echo !empty($customer)?$customer:'';?>">
                            <?php if (!empty($customerError)): ?>
                                <span class="help-inline"><?php echo $customerError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($typeError)?'error':'';?>">
                        <label class="control-label">Type</label>
                        <div class="controls">
                            <input name="type" type="text" placeholder="Type" value="<?php echo !empty($type)?$type:'';?>">
                            <?php if (!empty($typeError)): ?>
                                <span class="help-inline"><?php echo $typeError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($dateTypeError)?'error':'';?>">
                        <label class="control-label">Date : </label>
                        <div class="controls">
                            <input name="date" type="date"  placeholder="Date" value=" <?php echo !empty($date_type)?$date_type:'';?>">
                            <?php if (!empty($dateTypeError)): ?>
                                <span class="help-inline"><?php echo $dateTypeError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($timeError)?'error':'';?>">
                        <label class="control-label">L'heure:</label>
                        <div class="controls">
                            <input name="time" type="time"  placeholder="heure" value="<?php echo !empty($time)?$time:'';?>">
                            <?php if (!empty($timeError)): ?>
                                <span class="help-inline"><?php echo $timeError;?></span>
                            <?php endif; ?>
                        </div>
                      </div><div class="control-group <?php echo !empty($moniteurError)?'error':'';?>">
                        <label class="control-label">Nom du Moniteur  :</label>
                        <div class="controls">
                            <input name="moniteur" type="text"  placeholder="Moniteur" value="<?php echo !empty($moniteur)?$moniteur:'';?>">
                            <?php if (!empty($moniteurError)): ?>
                                <span class="help-inline"><?php echo $moniteurError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Update</button>
                          <a class="btn" href="indexDate.php">Back</a>
                        </div>
                    </form>
                </div>
                            </section>
    </div> <!-- /container -->
  </body>
  <footer>
  <p>Copyright © 2022 Auto ecole de Meknes</p>

  </footer>
</html>
