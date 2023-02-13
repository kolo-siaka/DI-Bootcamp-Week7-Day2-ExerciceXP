<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accept The User Name</title>
</head>
<body>
  <form action="" method="post">
  <label for="formulaire"> Nom </label>
  <input type="text" id="formulaire" name = "name">
  <input type="submit" name="submit" value=" save">
  <?php 
  $name = $_POST['name'];
  if (isset($name)) {
     echo "<h3> Nom: $name </h3>";
   } 
  
  
  ?>

  </form>
</body>
</html>