<?php 
 $_massa = $_POST['weight'];
 $_altura =$_POST['height'];

 $_Calculo = $_massa / ($_altura * $_altura  );
 echo"<h1>O resultado sa sua massa corporal é igual á " .$_Calculo;
?>