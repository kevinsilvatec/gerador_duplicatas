<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="../js/jquery.maskedinput.js"></script>
		<script type="text/javascript" src="../js/jquery.maskMoney.min.js"></script>
		<script type="text/javascript" src="../js/validacao.js"></script>
		<script type="text/javascript" src="../js/verificar.js"></script>
		<script type="text/javascript" src="../js/jquery-ui-1.10.4.custom.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../css/estilo.css" />
		<link rel="stylesheet" type="text/css" href="../css/jquery-ui-1.10.4.custom.min.css" />
		<link rel="stylesheet" type="text/css" href="../fonts/stylesheet.css" />
	</head>
	<body>
		<div id="divContent">
			<div id="divHeader">
				<label class="labelTitulo">Terceira Etapa - Dados do Sacado</label>
			</div>
			<div id="divMain3">
				<form action="../docx/gerarDuplicataWord.php" method="post" enctype="multipart/form-data">
					<input type="hidden" name="nomeFantasia" value="<?php echo $nomeFantasia ?>" />
					<input type="hidden" name="cnpj" value="<?php echo $cnpj ?>" />
					<input type="hidden" name="enderecoEmpresa" value="<?php echo $enderecoEmpresa ?>" />
					<input type="hidden" name="bairroEmpresa" value="<?php echo $bairroEmpresa ?>" />
					<input type="hidden" name="telefone" value="<?php echo $telefone ?>" />
					<input type="hidden" name="cep" value="<?php echo $cep ?>" />
					<input type="hidden" name="cidade" value="<?php echo $cidade ?>" />
					<input type="hidden" name="numeroEmpresa" value="<?php echo $numeroEmpresa ?>" />
					<input type="hidden" name="uf" value="<?php echo $uf ?>" />
					<input type="hidden" name="inscEstadual" value="<?php echo $inscEstadual ?>" />
					<input type="hidden" name="valorFatura" value="<?php echo $valorFatura ?>" />
					<input type="hidden" name="numeroFatura" value="<?php echo $numeroFatura ?>" />
					<input type="hidden" name="valorDuplicata" value="<?php echo $valorDuplicata ?>" />
					<input type="hidden" name="valorDuplicataNormal" value="<?php echo $valorDuplicataNormal ?>" />
					<input type="hidden" name="numeroOrdem" value="<?php echo $numeroOrdem ?>" />
					<input type="hidden" name="dataVencimento" value="<?php echo $dataVencimento ?>" />
					<input type="hidden" name="dataEmissao" value="<?php echo $dataEmissao ?>" />
					<input type="hidden" name="tipoDuplicata" value="<?php echo $tipoDuplicata ?>" />
					<input type="hidden" name="valorDesconto" value="<?php echo $valorDesconto ?>" />
					<input type="hidden" name="dataLimiteDesconto" value="<?php echo $dataLimiteDesconto ?>" />
					<input type="hidden" name="condicoesEspeciais" value="<?php echo $condicoesEspeciais ?>" />
					<div id="divTbl3">
						<table>
							<tr>
								<td><label for="nomeSacado">Nome do Sacado:</label></td>
								<td>
								<input type="text" name="nomeSacado" id="nomeSacado" placeholder="Ex.: João da Silva" />
								</td>
							</tr>
							<tr>
								<td><label for="enderecoSacado">Endereço do Sacado:</label></td>
								<td>
								<input type="text" name="enderecoSacado" id="enderecoSacado" placeholder="Ex.: Rua A, Nº 40, Bairro Eldorado" />
								</td>
							</tr>
							<tr>
								<td><label for="cepSacado">CEP:</label></td>
								<td>
								<input type="text" name="cepSacado" id="cepSacado" placeholder="Ex.: 99999-999 " />
								</td>
							</tr>
							<tr>
								<td><label for="ufSacado">UF:</label></td>
								<td>
								<input type="text" name="ufSacado" id="ufSacado" placeholder="Ex.: MG" />
								</td>
							</tr>
							<tr>
								<td><label for="municipioSacado">Município:</label></td>
								<td>
								<input type="text" name="municipioSacado" id="municipioSacado" placeholder="Ex.: Contagem" />
								</td>
							</tr>
							<tr>
								<td><label for="enderecoCobranca">Endereço para Cobrança:</label></td>
								<td>
								<input type="text" name="enderecoCobranca" id="enderecoCobranca" placeholder="Ex.: Rua A, Avenida 3" />
								</td>
							</tr>
							<tr>
								<td><label for="pcaPagamento">Praça de Pagamento:</label></td>
								<td>
								<input type="text" name="pcaPagamento" id="pcaPagamento" value="Contagem" disabled="disabled" />
								</td>
							</tr>
							<tr>
								<td><label for="tipoPessoa">Pessoa Física ou Jurídica?</label></td>
								<td>
									<label class="labelInput" id="labelPessoaFisica">Pessoa Física</label>
									<input type="radio" class="tipoPessoa" name="tipoPessoa" id="tipoPessoaF" value="1" />
									
									<label class="labelInput">Pessoa Jurídica</label>
									<input type="radio" class="tipoPessoa" name="tipoPessoa" id="tipoPessoaJ" value="2" />
									
									<br class="brEstilo1" />
									<label for="cpfSacado" id="labelCpfSacado">CPF:</label>
									<input type="text" name="cpfSacado" id="cpfSacado" />
									<br id="brEstilo2" />
									
									<label for="cnpjSacado" id="labelCnpjSacado">CNPJ:</label>
									<input type="text" name="cnpjSacado" id="cnpjSacado" />
									
									<br id="brEstilo3" />
									<label for="inscEstadualSacado" id="labelInscEstadualSacado">Insc. Estadual:</label>
									<input type="text" name="inscEstadualSacado" id="inscEstadualSacado" placeholder="Ex.: 99.999.999.9999" />
								</td>
							</tr>
						</table>
					</div>
					<input type="button" class="volta" value="Voltar(2/3)" id="btnVolta3" />
					<input type="submit" id="btnEtapa3" value="Baixar Duplicata" name="btnConcluir" title="Para Visualizar o arquivo é necessário o Microsoft Word ou Libre Office" />
				</form>
			</div>
			</div>
		</div>
	</body>
</html>