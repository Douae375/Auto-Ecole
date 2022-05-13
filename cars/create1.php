<?php 
     
    require 'database1.php';
 
    if ( !empty($_POST)) {
        // keep track validation errors
        $nameError = null;
        $matriculeError = null;
        $typeError = null;
         
        // keep track post values
        $name = $_POST['name'];
        $matricule = $_POST['matricule'];
        $type = $_POST['type'];
         
        // validate input
        $valid = true;
        if (empty($name)) {
            $nameError = 'Please enter Name';
            $valid = false;
        }
         
        if (empty($matricule)) {
            $matriculeError = 'Please enter Matricule';
            $valid = false;
        } 
        
     
        if (empty($type)) {
            $typeError = 'Please enter type';
            $valid = false;
        }
         
        // insert data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO cars (name,matricule,type) values(?, ?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($name,$matricule,$type));
            Database::disconnect();
            header("Location: index1.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type=text/css  href="style1.css"/>

    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>
<div class="container">
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
            </div>
            <section class="style1" >

                        <h3>Create a Car</h3>
                    </div>
             
                    <form class="form-horizontal" action="create1.php" method="post">
                      <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
                        <label class="control-label">Name</label>
                        <div class="controls">
                            <input name="name" type="text"  placeholder="Name" value="<?php echo !empty($name)?$name:'';?>">
                            <?php if (!empty($nameError)): ?>
                                <span class="help-inline"><?php echo $nameError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($matriculeError)?'error':'';?>">
                        <label class="control-label">Matricule</label>
                        <div class="controls">
                            <input name="matricule" type="text" placeholder="Matricule" value="<?php echo !empty($matricule)?$matricule:'';?>">
                            <?php if (!empty($matriculeError)): ?>
                                <span class="help-inline"><?php echo $matriculeError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($typeError)?'error':'';?>">
                        <label class="control-label">Type</label>
                        <div class="controls">
                            <input name="type" type="text"  placeholder="Type" value="<?php echo !empty($type)?$type:'';?>">
                            <?php if (!empty($typeError)): ?>
                                <span class="help-inline"><?php echo $typeError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Create</button>
                          <a class="btn" href="index1.php">Back</a>
                        </div>
                    </form>
                </div>
                            </section>
    </div> <!-- /container -->
  </body>
</html>
