<!DOCTYPE HTML>
<html lang = "pt-br">
<head>
   <title>Exemplo</title>
   <meta charset = "UTF-8">
</head>
<body>
   <form action="" method="post" >
      Primeiro Numero: <input name="num1" type="text"><br>
      Segundo numero: <input name="num2" type="text"><br>
      <input type="submit" name="operacao" value="+">     
      <input type="submit" name="operacao" value="-">     
      <input type="submit" name="operacao" value="*">     
      <input type="submit" name="operacao" value="/">     
   </form> 
<?php

   $a = isset($_POST['num1']) ? $_POST['num1'] : 0;
   $b = isset($_POST['num2']) ? $_POST['num2'] : 0;
   $op= isset($_POST['operacao']) ? $_POST['operacao'] : 0;

   if( !empty($op) ) {
      if($op == '+')
         $c = $a + $b;
      else if($op == '-')
         $c = $a - $b;
      else if($op == '*')
         $c = $a*$b;
      else
		  if ($b > 0) {
			$c = $a/$b;
		  } else {
			  $c = "Nao e possivel realizar divisao por 0";
		  }
		  

      echo "O resultado da opera&ccedil;&atilde;o &eacute;: $c";
   }

?>       
</body>
</html>