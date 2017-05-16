var $ = function(id) {
	return document.getElementById(id);
}

var calculadora = function () {
	var sales = document.getElementById("sales");
	var ventas = parseFloat ($("sales").value);
	var compras = parseFloat ($("buy").value);

	$("utilidad_bruta").value = "";

	if (isNaN(ventas) || ventas < 0 ) {
		alert ("El subtotal tiene que ser un número igual o mayor que cero");
	} else if (isNaN(compras) || compras < 0) {
		alert ("El porcentaje de IVA debe ser un número igual o mayor que cero");
	} else {
		var utilidad_bruta = ventas - compras;
		utilidad_bruta = parseFloat(utilidad_bruta.toFixed(2));
		$("utilidad_bruta").value = utilidad_bruta;
	}
}

window.onload = function () {
	$("calcular").onclick = calculadora;
}
