// JavaScript


// jQuery
$(document).ready(function(){

	// Masked Input
	$('input[type="text"].cep').mask('99999-999');
	$('input[type="text"].cnpj').mask('99.999.999/9999-99');
	$('input[type="text"].cpf').mask('999.999.999-99');
	$('input[type="text"].date').mask('99/99/9999');
	$('input[type="text"].telefone').mask('(99) 99999999?9');

	// Reset Default Value
	$('input[type="text"], input[type="email"], input[type="password"], input[type="search"], input[type="tel"], input[type="number"], input[type="color"], input[type="time"], input[type="date"], input[type="datetime"], input[type="datetime-local"], input[type="week"], input[type="month"], input[type="url"]').resetDefaultValue();

});

// Bootstrap
$(document).ready(function(){

	

});