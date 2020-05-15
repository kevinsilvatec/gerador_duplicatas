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
				<label class="labelTitulo">Segunda Etapa - Dados da Duplicatas</label>
			</div>
			<div id="divMain2">
				<form action="dadosEtapa3.php" method="post" enctype="multipart/form-data">
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

					<table>
						<tr>
							<td><label for="valorFatura">Valor da Fatura:</label></td>
							<td>
							<input type="text" name="valorFatura" id="valorFatura" placeholder="Ex.: 999,99" />
							</td>
						</tr>
						<tr>
							<td><label for="numeroFatura">Número da Fatura:</label></td>
							<td>
							<input type="text" name="numeroFatura" id="numeroFatura" placeholder="Ex.: 35487 13" />
							</td>
						</tr>
						<tr>
							<td><label for="valorDuplicata">Valor da Duplicata:</label></td>
							<td>
							<input type="text" name="valorDuplicata" id="valorDuplicata" placeholder="Ex.: 999,99" />
							</td>
						</tr>
						<tr>
							<td><label for="numeroOrdem">Número de Ordem:</label></td>
							<td>
							<input type="text" name="numeroOrdem" id="numeroOrdem" placeholder="Ex.: 35487 13" />
							</td>
						</tr>
						<tr>
							<td><label for="dataEmissao">Data de Emissão da Duplicata:</label></td>
							<td>
							<input type="text" name="dataEmissao" id="dataEmissao" class="datepicker" placeholder="Ex.: 01/01/2014" />
							</td>
						</tr>
						<tr>
							<td><label for="dataVencimento">Data de Vencimento da Duplicata:</label></td>
							<td>
							<input type="text" name="dataVencimento" id="dataVencimento" class="datepicker" placeholder="Ex.: 01/01/2014" />
							</td>
						</tr>
						<tr>
							<td><label for="valorDesconto">Valor do Desconto:</label></td>
							<td>
							<input type="text" name="valorDesconto" id="valorDesconto" value="0,00" placeholder="Ex.: 999,99" />
							</td>
						</tr>
						<tr>
							<td><label for="dataLimiteDesconto">Data Limite do Desconto:</label></td>
							<td>
							<input type="text" name="dataLimiteDesconto" id="dataLimiteDesconto" class="datepicker" placeholder="Ex.: 01/01/2014" />
							</td>
						</tr>
						<tr>
							<td><label for="condicoesEspeciais">Condições Especiais:</label></td>
							<td>							<textarea name="condicoesEspeciais" id="condicoesEspeciais">
								
							</textarea></td>
						</tr>
						<tr>
							<td><label for="tipoDuplicata">Tipo Duplicata:</label></td>
							<td>
							<input type="radio" name="tipoDuplicata" value="PRESTAÇÃO DE SERVIÇO" checked="checked" />
							<label class="labelInput">Prestação de Serviço</label>
							<input type="radio" name="tipoDuplicata" value="VENDA MERCANTIL" />
							<label class="labelInput">Venda Mercantil</label></td>
						</tr>
					</table>
					<input type="button" class="volta" value="Voltar(1/3)" id="btnVolta2" />
					<input type="submit" id="btnEtapa2" value="Próxima Etapa(3/3)" name="btnEnviar2" />
				</form>
			</div>
		</div>
	</body>
</html>