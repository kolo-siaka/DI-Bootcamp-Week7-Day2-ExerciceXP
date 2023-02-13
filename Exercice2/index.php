<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercice XP</title>
</head>
<body>

  <?php  
//creation des variables pour afficher le nom et l'age de l'utilisateur
  $name = htmlspecialchars($_POST['name']);
  $age = htmlspecialchars($_POST['age']);
  if(isset($name)) {
        echo " Hello " . $name ." You are ". $age." years old ";
      }
      

  ?>
  <br><br>
    
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
  <label for="formulaire"> Nom </label>
  <input type="text" id="formulaire" name="name">
  <br>
  <label for="formulaire"> Age</label>
  <input type="text" id="formulaire" name="age">
  <br>
  <input type="submit" name="submit" value=" save"></form>
  
  

  </form>
</body>
</html>