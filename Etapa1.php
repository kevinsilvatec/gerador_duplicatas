<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />

		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.10.4.custom.min.js"></script>
		<script type="text/javascript" src="js/jquery.maskMoney.min.js"></script>
		<script type="text/javascript" src="js/validacao.js"></script>
		<script type="text/javascript" src="js/verificar.js"></script>
		<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.10.4.custom.min.css" />
		<link rel="stylesheet" type="text/css" href="css/estilo.css" />
		<link rel="stylesheet" type="text/css" href="fonts/stylesheet.css" />
	</head>
	<body>
		<div id="divContent">
			<div id="divHeader">
				<label class="labelTitulo">Primeira Etapa - Dados da Empresa</label>
			</div>
			<div id="divMain">
				<form id="formPrimeiraEtapa" action="app/dadosEtapa2.php" method="post" enctype="multipart/form-data">
					<table>
						<tr>
							<td><label for="nomeFantasia">Nome Fantasia:</label></td>
							<td>
							<input type="text" name="nomeFantasia" id="nomeFantasia" placeholder="Ex.: Max-Systems" />
							</td>
						</tr>
						<tr>
							<td><label for="cnpj">CNPJ:</label></td>
							<td>
							<input type="text" name="cnpj" id="cnpj" placeholder="Ex.: 99.999.999/9999-99" />
							</td>
						</tr>
						<tr>
							<td><label for="inscEstadual">Insc. Estadual:</label></td>
							<td>
							<input type="text" name="inscEstadual" id="inscEstadual" placeholder="Ex.: 99.999.999.9999" />
							</td>
						</tr>
						<tr>
							<td><label for="uf">UF:</label></td>
							<td>
							<input type="text" name="uf" id="uf" placeholder="Ex.: MG" />
							</td>
						</tr>
						<tr>
							<td><label for="cidade">Cidade:</label></td>
							<td>
							<input type="text" name="cidade" id="cidade" placeholder="Ex.: Contagem" />
							</td>
						</tr>
						<tr>
							<td><label for="enderecoEmpresa">Endereço:</label></td>
							<td>
							<input type="text" name="enderecoEmpresa" id="enderecoEmpresa" placeholder="Ex.: Rua A, Avenida 3" />
							</td>
						</tr>
						<tr>
							<td><label for="numeroEmpresa">Nº:</label></td>
							<td>
							<input type="text" name="numeroEmpresa" id="numeroEmpresa" placeholder="Ex.: 45" />
							</td>
						</tr>
						<tr>
							<td><label for="bairroEmpresa">Bairro:</label></td>
							<td>
							<input type="text" name="bairroEmpresa" id="bairroEmpresa" placeholder="Ex.: Eldorado" />
							</td>
						</tr>
						<tr>
							<td><label for="cep">CEP:</label></td>
							<td>
							<input type="text" name="cep" id="cep" placeholder="99999-99" />
							</td>
						</tr>
						<tr>
							<td><label for="telefone">Telefone:</label></td>
							<td>
							<input type="text" name="telefone" id="telefone" placeholder="(99)9999-9999" />
							</td>
						</tr>
					</table>
					<input type="submit" id="btnEtapa" value="Próxima Etapa(2/3)" name="btnEnviar" />
				</form>
			</div>
		</div>
	</body>
</html>