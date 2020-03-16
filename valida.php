<meta charset='utf8'>
<?php 
 
header('content-type: text/html,charset=utf8');
// e = && 
// ou |
$cpf = $_POST['cpf'];

if ($cpf == '00000000000' ||$cpf == '11111111111' ||$cpf == '22222222222' ||$cpf ==  '33333333333' ||$cpf == '44444444444' ||$cpf == '55555555555' ||$cpf == '66666666666' ||$cpf == '77777777777' ||$cpf =='88888888888' ||$cpf ==
	'99999999999')
{
 echo '<script>alert("CPF Invalido!!!");window.location.href="valida.html"</script>';
}
else {
 $n1=substr($cpf,0,1);
 $n1 = $n1 * 10;
 $n2=substr($cpf,1,1);
 $n2 = $n2 * 9 ;
 $n3=substr($cpf,2,1);
 $n3 = $n3 * 8 ;
 $n4=substr($cpf,3,1);
 $n4 = $n4 * 7 ;
 $n5=substr($cpf,4,1);
 $n5 = $n5 * 6 ;
 $n6=substr($cpf,5,1);
 $n6 = $n6 * 5 ;
 $n7=substr($cpf,6,1);
 $n7 = $n7 * 4 ;
 $n8=substr($cpf,7,1);
 $n8 = $n8 * 3 ;
 $n9=substr($cpf,8,1);
 $n9 = $n9 * 2;

$resultado = $n1+$n2+$n3+$n4+$n5+$n6+$n7+$n8+$n9;


$divisao = $resultado%11;

if ($divisao < 2)
{
	$digito1 = 0;
	echo $digito1;
}
else
{$digito1 = 11-$divisao;
echo $digito1;}




$n1=substr($cpf,0,1);
 $n1 = $n1 * 11;
 $n2=substr($cpf,1,1);
 $n2 = $n2 * 10 ;
 $n3=substr($cpf,2,1);
 $n3 = $n3 * 9 ;
 $n4=substr($cpf,3,1);
 $n4 = $n4 * 8 ;
 $n5=substr($cpf,4,1);
 $n5 = $n5 * 7 ;
 $n6=substr($cpf,5,1);
 $n6 = $n6 * 6 ;
 $n7=substr($cpf,6,1);
 $n7 = $n7 * 5 ;
 $n8=substr($cpf,7,1);
 $n8 = $n8 * 4 ;
 $n9=substr($cpf,8,1);
 $n9 = $n9 * 3;
 $n10 = substr($cpf,9,1);
 $n10 =  $n10 *2;

$resultado2 = $n1+$n2+$n3+$n4+$n5+$n6+$n7+$n8+$n9+$n10;

$divisao2 = $resultado2%11;

if ($divisao2 < 2)
	{ $resultado2 = 0;
		echo $resultado2;}
else 
	{$resultado2 =11-$divisao2;
	echo $resultado2;}

$digitoUsuario = substr($cpf,9,1);
if ($digito1!=$digitoUsuario)
{
	echo '<script>
	alert("CPF Invalido");
	window.location.href="valida.html"</script>';
}



}
 


 ?>