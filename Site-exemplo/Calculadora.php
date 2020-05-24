<?php
if(!empty($_POST)){


   if(!empty($_POST['n1']) && !empty($_POST['n2']) && !empty($_POST['option'])){
 
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$option = $_POST["option"];

switch($option){
    case 1:

    break;
    case "soma":
      $resultado = $n1 + $n2;
      echo $n1." + ".$n2." = ";
      echo $resultado;
    break;
    case "subtracao":

    $resultado = $n1 - $n2;
    echo $n1." - ".$n2." = ";
    echo $resultado;

    break;
    case "multiplicacao":

    $resultado = $n1 * $n2;
    echo $n1." x ".$n2." = ";
    echo $resultado;

    break;

    case "divisao":

    $resultado = $n1 / $n2;
    echo $n1." % ".$n2." = ";
    echo $resultado;

    break;

     
    default:

break;
}
}else{
	echo "Preecha todos os campos";
}
}else{
  echo "O resultado aparecerá aqui";	
}

?>