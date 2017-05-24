Monto autorizado: {{ $credit->authorized_amount}} <br>
Interes del producto: {{ $credit->interest}} <br>
Meses para pagar: {{$credit->sequence}} <br>
Días para pagar: {{ $credit->term}} <br>

@php

$f = (($credit->authorized_amount*$credit->interest)+($credit->authorized_amount/$credit->sequence))/30;
echo "<br>";
echo "Pagos diarios: ".$f;
echo "<br>";
$capital = $credit->authorized_amount/$credit->term;
echo "Capital: ".$capital;
echo "<br>";
$int = $f - $capital;
echo "Interes: ".$int;
echo "<br>";
for ($i=1; $i <= $credit->term ; $i++) { 
	echo $i;
	echo "&nbsp &nbsp &nbsp &nbsp";	
	echo $capital;
	echo "&nbsp &nbsp &nbsp &nbsp";	
	echo $int;
	 echo "&nbsp &nbsp &nbsp &nbsp";	
	echo ceil($f);
	echo "<br>";
}


@endphp

