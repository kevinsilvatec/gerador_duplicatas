$(document).ready(function() {
	//Escondendo campos e espaços no carregamento da página
	$("#brEstilo1").hide();
	$("#labelCpfSacado").hide();
	$("#cpfSacado").hide();
	$("#cnpjSacado").hide();
	$("#inscEstadualSacado").hide();
	$("#labelCnpjSacado").hide();
	$("#labelInscEstadualSacado").hide();
	$("#brEstilo2").hide();
	$("#brEstilo3").hide();
//Tratando os campos que devem ser mostrados e os que devem ser escondidos
	$(".tipoPessoa").change(function() {
		if ($("#tipoPessoaF").is(":checked")) {
			$("#brEstilo1").show();
			$("#labelCpfSacado").show();
			$("#cpfSacado").show().val("").focus().attr("placeholder","Ex.: 999.999.999-99").mask("999.999.999-99");
			$("#inscEstadualSacado").hide();
			$("#cnpjSacado").hide();
			$("#labelCnpjSacado").hide();
			$("#labelInscEstadualSacado").hide();
			$("#brEstilo2").hide();
			$("#brEstilo3").hide();

		}
		if ($("#tipoPessoaJ").is(":checked")) {
			$("#brEstilo2").show();
			$("#labelCnpjSacado").show();
			$("#cnpjSacado").show().val("").focus().attr("placeholder","Ex.: 99.999.999/9999-99").mask("99.999.999/9999-99");
			$("#inscEstadualSacado").show().mask("999.999.999-9999");
			$("#labelInscEstadualSacado").val("").show();
			$("#cpfSacado").hide();	
			$("#brEstilo1").hide();
			$("#brEstilo3").show();
			$("#labelCpfSacado").hide();

		}
	});
	//Botão Voltar com a função history.back()
	$(".volta").click(function(){
		 history.back(-1);
	});
});