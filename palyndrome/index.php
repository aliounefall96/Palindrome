<!DOCTYPE html>
<html>
<head>
	<title>defi</title>
	<meta charset="utf-8">
</head>
<body>
   <div>
   	<h3>Saisisser un mot pour voir si c'est un palyndrome</h3>
   	<form method="POST">
   		<input type="text" name="chaine"> <input type="submit" name="verifier">
   	</form>
   </div>
   <?php 
  
     if (isset($_POST['verifier']) && !empty($_POST['chaine'])) {
     	$chaine=$_POST['chaine'];
    
     	if ($chaine==strrev($chaine)){
     		echo $chaine." est un palyndrome";
      
      }
        else{
     	 echo $chaine." n est pas un palyndrome";
        }
      }
    ?>
</body>
</html>