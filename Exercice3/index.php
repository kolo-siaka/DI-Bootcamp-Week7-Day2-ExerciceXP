
<?php 
function myFonct($value){
     try {
           if (filter_var($value, FILTER_VALIDATE_INT) === false){
               throw new Exception("The value is not valid integer");
           } else{
               echo  " validation complete";
           }
     }catch (Exception $e){
           echo  "Erro "  .$e->getMessage();
     
} finally {

}
}
$value = 2.5;
myFonct($value);
?>