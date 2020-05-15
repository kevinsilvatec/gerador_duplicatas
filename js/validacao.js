$(document).ready(function() {
	//Aplicando mascaras usando o plugin maskedInput;
	$("#cnpj").mask("99.999.999/9999-99");
	$("#inscEstadual").mask("999.999.999-9999");
	$("#cep").mask("99999-999");
	$("#telefone").mask("(99)9999-9999");
	$("#cepSacado").mask("99999-999");
	
	//Aplicando mascaras monetárias usando o plugin maskMoney;
	$("#valorFatura").maskMoney({
		symbol : 'R$ ',
		showSymbol : true,
		thousands : '.',
		decimal : ','
	});
	$("#valorDuplicata").maskMoney({
		symbol : 'R$ ',
		showSymbol : true,
		thousands : '.',
		decimal : ','
	});
	$("#valorDesconto").maskMoney({
		symbol : 'R$ ',
		showSymbol : true,
		thousands : '.',
		decimal : ','
	});
	//Nacionalizando o datepicker jQuery
	$(".datepicker").datepicker({
		dateFormat : 'dd/mm/yy',
		dayNames : ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
		dayNamesMin : ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
		dayNamesShort : ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
		monthNames : ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
		monthNamesShort : ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
		nextText : 'Próximo',
		prevText : 'Anterior'
	});
});
